<?php

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\QuotesRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: QuotesRepository::class)]
#[ORM\HasLifecycleCallbacks()]
class Quotes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['all'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['all'])]
    private $author;

    #[ORM\Column(type: 'string', length: 500)]
    #[Groups(['all'])]
    private $content;

    #[ORM\Column(type: 'datetime_immutable')]
    private $createdAt;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private $updatedAt;

    #[ORM\Column(type: 'boolean')]
    private $displayable;

    #[ORM\Column(type: 'boolean')]
    private $displayOnWebsite;

    public function __construct()
    {
        $this->createdAt = new DateTimeImmutable();
        $this->displayOnWebsite = 0;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Function to update the updatedAt value automatically
     * 
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue()
    {
        $this->updatedAt = new \DateTime();
    }

    public function getDisplayable(): ?bool
    {
        return $this->displayable;
    }

    public function setDisplayable(bool $displayable): self
    {
        $this->displayable = $displayable;

        return $this;
    }

    public function getDisplayOnWebsite(): ?bool
    {
        return $this->displayOnWebsite;
    }

    public function setDisplayOnWebsite(bool $displayOnWebsite): self
    {
        $this->displayOnWebsite = $displayOnWebsite;

        return $this;
    }
}
