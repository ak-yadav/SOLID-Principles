<?php

class Customer
{
    /**
     * @var
     */
    protected $firstName;

    /**
     * @var
     */
    protected $lastName;

    /**
     * @var
     */
    protected $email;

    public function __construct($firstName, $lastName, $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getEmail()
    {
        return $this->email;
    }
}