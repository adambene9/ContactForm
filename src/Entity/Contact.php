<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]

     /**
    * #[ORM\@Assert\NotBlank
    */
     
    private ?int $id = null;

    #[ORM\Column(length: 255)]
 
    
    private ?string $fullName = null;
 

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    /** 
    * @Assert\Email
    */ 

     /**
    * #[ORM\@Assert\NotBlank
    *  #[ORM\@Assert\Email
    */
    

    #[ORM\Column(length: 255)]
    private ?string $text = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): static
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }
}
