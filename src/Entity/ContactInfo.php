<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="string")
     * @var string
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $mail;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $phoneNumber;

    /**
     * @ORM\Column(type="text", length=1000)
     * @var string
     */
    protected $message;

    /**
     * @ORM\Column(type="string")
     * @var string
     */
    protected $ipAddress;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ContactInfo
     */
    public function setName(string $name): ContactInfo
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return ContactInfo
     */
    public function setMail(string $mail): ContactInfo
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return ContactInfo
     */
    public function setPhoneNumber(string $phoneNumber): ContactInfo
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return ContactInfo
     */
    public function setMessage(string $message): ContactInfo
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     * @return ContactInfo
     */
    public function setIpAddress(string $ipAddress): ContactInfo
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
}
