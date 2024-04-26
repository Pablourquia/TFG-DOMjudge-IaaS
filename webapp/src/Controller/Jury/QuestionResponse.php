<?php declare(strict_types=1);

namespace App\Controller\Jury;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;
use App\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Entity\Questionnaire;
use App\Entity\Question;
use App\Entity\CorrectAnswers;
use App\Entity\SubmissionAnswer;
use App\Entity\QuestionContest;

/**
 * @Route("/jury/questions")
 */
class QuestionResponse extends BaseController {
    /**
     * @Route("/response", name="jury_question_response", methods={"GET", "POST"})
     */
    public function renderQuestionResponse(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $questionName = $request->request->get('questionName');
            $contestName = $request->request->get('contestName');
            $question = $this->getDoctrine()->getRepository(Question::class)->findOneBy(['name' => $questionName]);
            $contest = $this->getDoctrine()->getRepository(Questionnaire::class)->findOneBy(['name' => $contestName]);
            $user = $this->getUser();
            if ($question->getTypeQuestion() == 'options') {
                $answer = $request->request->get('options');
                $answers = [];
                $answers[] = $answer;
                if ($answer == $this->getDoctrine()->getRepository(CorrectAnswers::class)->findOneBy(['questionId' => $question->getId()])->getCorrectAnswers()[0]) {
                    if ($this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $question->getId(), 'user_id' => $user->getUserid()])) {
                        $submissionAnswer = $this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $question->getId(), 'user_id' => $user->getUserid()]);
                        $submissionAnswer->setCorrect(true);
                        $submissionAnswer->setAnswers($answers);
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($submissionAnswer);
                        $entityManager->flush();
                    } else {
                        $submissionAnswer = new SubmissionAnswer($question->getId(), $user->getUserid(), $user->getUsername(), $question->getName(), true, $answers);
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($submissionAnswer);
                        $entityManager->flush();
                    }
                } else {
                    if ($this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $question->getId(), 'user_id' => $user->getUserid()])) {
                        $submissionAnswer = $this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $question->getId(), 'user_id' => $user->getUserid()]);
                        $submissionAnswer->setCorrect(false);
                        $submissionAnswer->setAnswers($answers);
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($submissionAnswer);
                        $entityManager->flush();
                    } else {
                        $submissionAnswer = new SubmissionAnswer($question->getId(), $user->getUserid(), $user->getUsername(), $question->getName(), false, $answers);
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($submissionAnswer);
                        $entityManager->flush();
                    }
                }
            } else {
                $answers = [];
                $correct_answers_validate = $this->getDoctrine()->getRepository(CorrectAnswers::class)->findOneBy(['questionId' => $question->getId()])->getCorrectAnswers();
                $correct_answers =  [];
                for ($i = 0; $i < $question->getEntriesQuantity(); $i++) {
                    $answer = $request->request->get('question' . $i);
                    $answers[] = $answer;
                    if ($answer == $correct_answers_validate[$i]) {
                        $correct_answers[] = true;
                    } else {
                        $correct_answers[] = false;
                    }
                }
                if ($correct_answers === array_fill(0, $question->getEntriesQuantity(), true)) {
                    if ($this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $question->getId(), 'user_id' => $user->getUserid()])) {
                        $submissionAnswer = $this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $question->getId(), 'user_id' => $user->getUserid()]);
                        $submissionAnswer->setAnswers($answers);
                        $submissionAnswer->setCorrect(true);
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($submissionAnswer);
                        $entityManager->flush();
                    } else {
                        $submissionAnswer = new SubmissionAnswer($question->getId(), $user->getUserid(), $user->getUsername(), $question->getName(), true, $answers);
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($submissionAnswer);
                        $entityManager->flush();
                    }
                } else {
                    if ($this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $question->getId(), 'user_id' => $user->getUserid()])) {
                        $submissionAnswer = $this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $question->getId(), 'user_id' => $user->getUserid()]);
                        $submissionAnswer->setCorrect(false);
                        $submissionAnswer->setAnswers($answers);
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($submissionAnswer);
                        $entityManager->flush();
                    } else {
                        $submissionAnswer = new SubmissionAnswer($question->getId(), $user->getUserid(), $user->getUsername(), $question->getName(), false, $answers);
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($submissionAnswer);
                        $entityManager->flush();
                    }   
                }
            }
            return $this->redirectToRoute('jury_question_response', ['contestName' => $contestName, 'questionName' => $questionName]);      
        }
        $contestName = $request->query->get('contestName');
        $questionName = $request->query->get('questionName');
        $contest = $this->getDoctrine()->getRepository(Questionnaire::class)->findOneBy(['name' => $contestName]);  
        $question = $this->getDoctrine()->getRepository(Question::class)->findOneBy(['name' => $questionName]);
        $question_type = $question->getTypeQuestion();
        $entries_quantity = $question->getEntriesQuantity();
        $options = $question->getOptions();

        $ids = $this->getDoctrine()->getRepository(QuestionContest::class)->findOneBy(['contestName' => $contestName])->getQuestions();
        $size = max($ids);
        $booleanVector = array_fill(0, $size + 1, false);
        for ($i =0; $i < $size; $i++) {
            $submission = $this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $ids[$i], 'user_id' => $this->getUser()->getUserid()]);
            if ($submission) {
                if ($submission->getCorrect()) {
                    $booleanVector[$ids[$i]] = true;
                }
            }
        }

        $filePath = str_replace('/uploads/', '', $question->getFile());
        
        $correct = false;
        for ($i =0; $i < $size; $i++) {
            $submission = $this->getDoctrine()->getRepository(SubmissionAnswer::class)->findOneBy(['question_id' => $ids[$i], 'user_id' => $this->getUser()->getUserid()]);
            if ($submission) {
                if ($submission->getCorrect()) {
                    $correct = true;
                }
                else {
                    $correct = false;
                    break;
                }
            }
            else {
                $correct = false;
                break;
            }
        }

        if ($correct) {
            $this->addFlash('success', '¡Cuestionario correcto!');
        }
        
        return $this->render('jury/question_response.html.twig', [
            'contest' => $contest,
            'question' => $question,
            'question_type' => $question_type,
            'entries_quantity' => $entries_quantity,
            'options' => $options,
            'filePath' => $filePath,
            'boolean_vector' => $booleanVector,
            'name_contest' => $contestName
        ]);

    }

    /**
     * @Route("/download/{filePath}", name="download_file")
     */
    public function downloadFile(string $filePath): Response
    {
        $absoluteFilePath = '/opt/domjudge/domserver/webapp/public/uploads/' . $filePath;

        if (file_exists($absoluteFilePath)) {
            $response = new Response(file_get_contents($absoluteFilePath));
            $response->headers->set('Content-Type', 'application/pdf');
            $response->headers->set('Content-Disposition', 'attachment; filename="' . basename($absoluteFilePath) . '"');

            return $response;
        } else {
            throw $this->createNotFoundException('El archivo no existe');
        }
    }
}