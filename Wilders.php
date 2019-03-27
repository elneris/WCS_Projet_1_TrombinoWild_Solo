<?php
/**
 * Created by PhpStorm.
 * User: elner
 * Date: 27/03/2019
 * Time: 14:00
 */

class Wilders
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $birthday;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $cursus;

    /**
     * @var string
     */
    private $github;

    /**
     * @var string
     */
    private $presentation;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Wilders
     */
    public function setId(int $id): Wilders
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Wilders
     */
    public function setFirstname(string $firstname): Wilders
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Wilders
     */
    public function setLastname(string $lastname): Wilders
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     * @return Wilders
     */
    public function setBirthday(string $birthday): Wilders
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Wilders
     */
    public function setEmail(string $email): Wilders
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getCursus(): string
    {
        return $this->cursus;
    }

    /**
     * @param string $cursus
     * @return Wilders
     */
    public function setCursus(string $cursus): Wilders
    {
        $this->cursus = $cursus;
        return $this;
    }

    /**
     * @return string
     */
    public function getGithub(): string
    {
        return $this->github;
    }

    /**
     * @param string $github
     * @return Wilders
     */
    public function setGithub(string $github): Wilders
    {
        $this->github = $github;
        return $this;
    }

    /**
     * @return string
     */
    public function getPresentation(): string
    {
        return $this->presentation;
    }

    /**
     * @param string $presentation
     * @return Wilders
     */
    public function setPresentation(string $presentation): Wilders
    {
        $this->presentation = $presentation;
        return $this;
    }



}