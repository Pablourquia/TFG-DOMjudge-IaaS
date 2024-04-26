<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Represents a correct answer in a questionnaire.
 *
 * @ORM\Entity()
 */
class CorrectAnswers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="integer")
     */
    private int $questionId;

    /**
     * @ORM\Column(type="json")
     */
    private array $correctAnswers;

    public function __construct(int $questionId, array $correctAnswers)
    {
        $this->questionId = $questionId;
        $this->correctAnswers = $correctAnswers;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestionId(): int
    {
        return $this->questionId;
    }

    public function setQuestionId(int $questionId): void
    {
        $this->questionId = $questionId;
    }

    public function getCorrectAnswers(): array
    {
        return $this->correctAnswers;
    }

    public function setCorrectAnswers(array $correctAnswers): void
    {
        $this->correctAnswers = $correctAnswers;
    }
}