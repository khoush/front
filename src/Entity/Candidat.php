<?php

namespace App\Entity;

use App\Repository\CandidatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CandidatRepository::class)]
class Candidat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $Position = null;

    #[ORM\Column(length: 255)]
    private ?string $Office = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Start_date = null;

    #[ORM\Column]
    private ?int $Salary = null;

    #[ORM\Column(length: 255)]
    private ?string $Curriculum_vitae = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->Position;
    }

    public function setPosition(string $Position): self
    {
        $this->Position = $Position;

        return $this;
    }

    public function getOffice(): ?string
    {
        return $this->Office;
    }

    public function setOffice(string $Office): self
    {
        $this->Office = $Office;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->Start_date;
    }

    public function setStartDate(\DateTimeInterface $Start_date): self
    {
        $this->Start_date = $Start_date;

        return $this;
    }

    public function getSalary(): ?int
    {
        return $this->Salary;
    }

    public function setSalary(int $Salary): self
    {
        $this->Salary = $Salary;

        return $this;
    }

    public function getCurriculumVitae(): ?string
    {
        return $this->Curriculum_vitae;
    }

    public function setCurriculumVitae(string $Curriculum_vitae): self
    {
        $this->Curriculum_vitae = $Curriculum_vitae;

        return $this;
    }
}
