<?php declare(strict_types=1);

namespace App\Controller\Jury;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Entity\Questionnaire;
use App\Entity\Question;
use App\Entity\CorrectAnswers;
use App\Entity\Contest;
use App\Entity\QuestionContest;

/**
 * @Route("/jury/add_questions")
 * @IsGranted("ROLE_JURY")
 */
class AddQuestionController extends BaseController {
    /**
     * @Route("/create", name="jury_add_question", methods={"GET", "POST"})
     */
    public function renderAddQuestion(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $selected_contest = $request->request->get('selected_contest');
            $selected_question = $request->request->get('selected_question');
            $contest = $this->getDoctrine()->getRepository(Contest::class)->findOneBy(['name' => $selected_contest]);
            $question = $this->getDoctrine()->getRepository(Question::class)->findOneBy(['name' => $selected_question]);
            $question_ids = [];
            $question_contest = $this->getDoctrine()->getRepository(QuestionContest::class)->findOneBy(['contestName' => $selected_contest]);
            if ($question_contest) {
                $question_ids = $question_contest->getQuestions();
                var_dump($question_ids);
            }
            $selected_type = $request->request->get('selected_type');
            if ($selected_type == 'Add') {
                if (!in_array($question->getId(), $question_ids)) {
                    $question_ids[] = $question->getId();
                    var_dump($question_ids);
                }
            } else {
                $key = array_search($question->getId(), $question_ids);
                if ($key !== false) {
                    unset($question_ids[$key]);
                }
            }
            if ($question_contest) {
                $question_contest->setQuestions($question_ids);
            } else {
                $question_contest = new QuestionContest($selected_contest, $question_ids);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question_contest);
            $entityManager->flush();
            return $this->redirectToRoute('jury_add_question');
        }
        $contests = $this->getDoctrine()->getRepository(Contest::class)->findAll();
        $questions = $this->getDoctrine()->getRepository(Question::class)->findAll();
        $question_contest = $this->getDoctrine()->getRepository(QuestionContest::class)->findAll();
        
        return $this->render('jury/add_question.html.twig', [
            'contests' => $contests,
            'questions' => $questions,
            'question_contests' => $question_contest
        ]);
    }
}