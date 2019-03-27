<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 27/03/2019
 * Time: 14:00
 */

class Wilder
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
     * @return Wilder
     */
    public function setId(int $id): Wilder
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
     * @return Wilder
     */
    public function setFirstname(string $firstname): Wilder
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
     * @return Wilder
     */
    public function setLastname(string $lastname): Wilder
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
     * @return Wilder
     */
    public function setBirthday(string $birthday): Wilder
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
     * @return Wilder
     */
    public function setEmail(string $email): Wilder
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
     * @return Wilder
     */
    public function setCursus(string $cursus): Wilder
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
     * @return Wilder
     */
    public function setGithub(string $github): Wilder
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
     * @return Wilder
     */
    public function setPresentation(string $presentation): Wilder
    {
        $this->presentation = $presentation;
        return $this;
    }




}
