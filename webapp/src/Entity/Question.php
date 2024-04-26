<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Questionnaire;

/**
 * Represents a question in a questionnaire.
 *
 * @ORM\Entity()
 */
class Question
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
    private string $name = '';

    /**
     * @ORM\Column(type="string", length=100)
     */
    private string $typeQuestion = '';

    /**
     * @ORM\Column(type="json")
     */
    private array $options = [];

    /**
     * @ORM\Column(type="integer")
     */
    private int $entriesQuantity = 0;

    /**
     * @ORM\Column(type="string")
     */
    private string $file = '';

    // Define relationship with Questionnaire
    /**
     * @ORM\ManyToOne(targetEntity="Questionnaire", inversedBy="questions")
     * @ORM\JoinColumn(name="questionnaire_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private ?Questionnaire $questionnaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getTypeQuestion(): string
    {
        return $this->typeQuestion;
    }

    public function setTypeQuestion(string $typeQuestion): void
    {
        $this->typeQuestion = $typeQuestion;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    public function getEntriesQuantity(): int
    {
        return $this->entriesQuantity;
    }

    public function setEntriesQuantity(int $entriesQuantity): void
    {
        $this->entriesQuantity = $entriesQuantity;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function setFile(string $file): void
    {
        $this->file = $file;
    }

    public function getQuestionnaire(): ?Questionnaire
    {
        return $this->questionnaire;
    }

    public function setQuestionnaire(Questionnaire $questionnaire): void
    {
        $this->questionnaire = $questionnaire;
    }

    public function __construct(string $name, string $typeQuestion, array $options, int $entriesQuantity, string $file, Questionnaire $questionnaire)
    {
        $this->name = $name;
        $this->typeQuestion = $typeQuestion;
        $this->options = $options;
        $this->entriesQuantity = $entriesQuantity;
        $this->file = $file;
        $this->questionnaire = $questionnaire;
    }
}