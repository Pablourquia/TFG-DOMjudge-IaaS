<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Represents a submission answer.
 * @ORM\Entity()
 */
class SubmissionAnswer
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
    private int $question_id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $user_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private string $name_user;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private string $name_question;

    /**
     * @ORM\Column(type="boolean", options={"default": 0})
     */
    private bool $correct;

    /**
     * @ORM\Column(type="json")
     */
    private array $answers;

    public function __construct(int $question_id, int $user_id, string $name_user, string $name_question, bool $correct, array $answers)
    {
        $this->question_id = $question_id;
        $this->user_id = $user_id;
        $this->name_user = $name_user;
        $this->name_question = $name_question;
        $this->correct = $correct;
        $this->answers = $answers;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestionId(): int
    {
        return $this->question_id;
    }

    public function setQuestionId(int $question_id): void
    {
        $this->question_id = $question_id;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function getNameUser(): string
    {
        return $this->name_user;
    }

    public function setNameUser(string $name_user): void
    {
        $this->name_user = $name_user;
    }

    public function getNameQuestion(): string
    {
        return $this->name_question;
    }

    public function setNameQuestion(string $name_question): void
    {
        $this->name_question = $name_question;
    }

    public function getCorrect(): bool
    {
        return $this->correct;
    }

    public function setCorrect(bool $correct): void
    {
        $this->correct = $correct;
    }

    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function setAnswers(array $answers): void
    {
        $this->answers = $answers;
    }
}