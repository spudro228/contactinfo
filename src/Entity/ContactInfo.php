<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use libphonenumber\PhoneNumber;
use Symfony\Component\Validator\Constraints as Assert;
use Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumber as AssertPhoneNumber;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactInfoRepository")
 */
class ContactInfo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     * @var string|null
     */
    protected $name;

    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     * @ORM\Column(type="string")
     * @var string|null
     */
    protected $mail;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="phone_number")
     * @var PhoneNumber|null
     */
    protected $phoneNumber;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="text", length=1000)
     * @var string|null
     */
    protected $message;

    /**
     * @AssertPhoneNumber(type="mobile")
     * @Assert\IsNull()
     * @ORM\Column(type="string")
     * @var string|null
     */
    protected $ipAddress;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     * @return ContactInfo
     */
    public function setName(?string $name): ContactInfo
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param null|string $mail
     * @return ContactInfo
     */
    public function setMail(?string $mail): ContactInfo
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return null|PhoneNumber
     */
    public function getPhoneNumber(): ?PhoneNumber
    {
        return $this->phoneNumber;
    }

    /**
     * @param null|PhoneNumber $phoneNumber
     * @return ContactInfo
     */
    public function setPhoneNumber(?PhoneNumber $phoneNumber): ContactInfo
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param null|string $message
     * @return ContactInfo
     */
    public function setMessage(?string $message): ContactInfo
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param null|string $ipAddress
     * @return ContactInfo
     */
    public function setIpAddress(?string $ipAddress): ContactInfo
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
}
