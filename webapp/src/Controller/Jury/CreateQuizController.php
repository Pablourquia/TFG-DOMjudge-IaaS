<?php declare(strict_types=1);

namespace App\Controller\Jury;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Entity\Questionnaire;

/**
 * @Route("/jury/quizzes")
 * @IsGranted("ROLE_JURY")
 */
class CreateQuizController extends BaseController
{
    /**
     * @Route("/create", name="jury_create_quiz", methods={"GET", "POST"})
     */
    public function renderQuiz(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $name = $request->request->get('name');
            $questionnaire = $this->getDoctrine()->getRepository(Questionnaire::class)->findOneBy(['name' => $name]);
            if ($questionnaire) {
                throw $this->createNotFoundException('Ya existe un cuestionario con ese nombre');
            }
            $questionnaire = new Questionnaire($name);
            $this->getDoctrine()->getManager()->persist($questionnaire);
            $this->getDoctrine()->getManager()->flush();
            return $this->render('jury/create_quiz.html.twig', ['success' => true]);
        }
        return $this->render('jury/create_quiz.html.twig');
    }
}