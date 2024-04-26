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

/**
 * @Route("/jury/questions")
 * @IsGranted("ROLE_JURY")
 */
class CreateQuestionController extends BaseController {
    /**
     * @Route("/create", name="jury_create_question", methods={"GET", "POST"})
     */
    public function renderQuestion(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            $statementFile = $request->files->get('statement');
            $statementFilePath = '';
            if ($statementFile) {
                $uploadDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/';
                $newFileName = uniqid() . '.' . $statementFile->guessExtension();
                $statementFile->move($uploadDirectory, $newFileName);
                $statementFilePath = '/uploads/' . $newFileName;
            }
            $questionnaire_name = $request->request->get('questionnaire_name');
            $type_question = $request->request->get('type_question');
            $options = [];
            $options_quantity = $request->request->get('options_quantity');
            $options_quantity = (int)$options_quantity;
            for ($i=1; $i <= $options_quantity; $i++) { 
                $options[] = $request->request->get('options_option_'.$i); 
            }
            $number_answers = $request->request->get('number_answers');
            $number_answers = (int)$number_answers;
            $question = $this->getDoctrine()->getRepository(Question::class)->findOneBy(['name' => $name]);
            if ($question) {
                throw $this->createNotFoundException('Ya existe una pregunta con ese nombre');
            }
            $questionnaire = $this->getDoctrine()->getRepository(Questionnaire::class)->findOneBy(['id' => $questionnaire_name]);
            $question = new Question($name, $type_question, $options, $number_answers, $statementFilePath, $questionnaire);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question);
            $entityManager->flush();
            $answers = [];
            for ($i=1; $i <= $number_answers; $i++) { 
                $answers[] = $request->request->get('answer_'.$i); 
            }
            $questionId = $question->getId();
            $correct_answer = new CorrectAnswers($questionId, $answers);
            $entityManager->persist($correct_answer);
            $entityManager->flush();
            return $this->redirectToRoute('jury_create_question');
        }
        $questionniares = $this->getDoctrine()->getRepository(Questionnaire::class)->findAll();
        return $this->render('jury/create_question.html.twig', 
            ['questionnaires' => $questionniares]);
    }
}