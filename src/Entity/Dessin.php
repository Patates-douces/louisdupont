<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DessinRepository::class)
 */
class Dessin
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /** @ORM\Column(type="Date") */
    private $date;
    /** @ORM\Column(type="string", length=40) */
    private $title;
    /** @ORM\Column(type="string", length=60) */
    private $url;
    /** @ORM\Column(type="string") */
    private $description;
    /** @ORM\Column(type="boolean") */
    private $sold = false;

    public function __construct()
    {
        $this->date = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function setUrl($url): void
    {
        $this->url = $url;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getSold(): ?bool
    {
        return $this->sold;
    }

    public function setSold(bool $sold): self
    {
        $this->sold = $sold;
    }

}
