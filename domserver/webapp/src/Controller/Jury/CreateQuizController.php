<?php declare(strict_types=1);

namespace App\Controller\Jury;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/jury/quizzes")
 * @IsGranted("ROLE_JURY")
 */
class CreateQuizController extends BaseController
{
    /**
     * @Route("/create", name="jury_create_quiz", methods={"GET"})
     */
    public function renderQuiz(): Response
    {
        return $this->render('jury/create_quiz.html.twig');
    }
}