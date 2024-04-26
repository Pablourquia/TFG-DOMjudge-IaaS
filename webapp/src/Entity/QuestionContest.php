<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Represents a questions in a questionnaire.
 *
 * @ORM\Entity()
 */
class QuestionContest
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private string $contestName = '';

    /**
     * @ORM\Column(type="json")
     */
    private array $questions = [];

    public function __construct(string $contestName, array $questions)
    {
        $this->contestName = $contestName;
        $this->questions = $questions;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContestName(): string
    {
        return $this->contestName;
    }

    public function setContestName(string $contestName): void
    {
        $this->contestName = $contestName;
    }

    public function getQuestions(): array
    {
        return $this->questions;
    }

    public function setQuestions(array $questions): void
    {
        $this->questions = $questions;
    }

    public function addQuestion(int $questionId): void
    {
        if (!in_array($questionId, $this->questions)) {
            $this->questions[] = $questionId;
        }
    }


    public function removeQuestion(int $questionIdRemove): void
    {
        $key = array_search($questionIdRemove, $this->questions);
        if ($key !== false) {
            unset($this->questions[$key]);
        }
    }
}