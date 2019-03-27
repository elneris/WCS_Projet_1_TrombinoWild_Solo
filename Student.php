<?php
/**
 * Created by PhpStorm.
 * User: elner
 * Date: 27/03/2019
 * Time: 13:51
 */

class Student
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
     * @return Student
     */
    public function setId(int $id): Student
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
     * @return Student
     */
    public function setFirstname(string $firstname): Student
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
     * @return Student
     */
    public function setLastname(string $lastname): Student
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
     * @return Student
     */
    public function setBirthday(string $birthday): Student
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
     * @return Student
     */
    public function setEmail(string $email): Student
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
     * @return Student
     */
    public function setCursus(string $cursus): Student
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
     * @return Student
     */
    public function setGithub(string $github): Student
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
     * @return Student
     */
    public function setPresentation(string $presentation): Student
    {
        $this->presentation = $presentation;
        return $this;
    }



}