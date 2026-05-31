<?php

namespace App\Models;

class User
{
    private ?int $id = null;
    private ?string $firstname = null;
    private ?string $lastname = null;
    private ?string $email = null;
    private ?string $password = null;

    private array $errors = [];

    public function __construct(?int $id = null, ?string $firstname = null, ?string $lastname = null, ?string $email = null, ?string $password = null)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }

    // GETTERS //

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    // SETTERS //

    public function setId(int $value): void
    {
        $this->id = $value;
    }

    public function setFirstname(string $value): void
    {
        if (strlen($value) < 3) {
            $this->errors['firstname'] = "Your first name must contains at leasts 3 characters";
            return;
        }
        $this->firstname = $value;
    }

    public function setLastname(string $value): void
    {
        if (strlen($value) < 3) {
            $this->errors['lastname'] = "Your last name must contains at leasts 3 characters";
            return;
        }
        $this->lastname = $value;
    }

    public function setEmail(string $value): void
    {
        if (strlen($value) < 4) {
            $this->errors['email'] = "Your email must contains at leasts 4 characters";
            return;
        }
        $this->email = $value;
    }

    public function setPassword(string $value): void
    {
        if (strlen($value) < 8) {
            $this->errors['password'] = "Your password must contains at leasts 8 characters";
            return;
        }
        $this->password = $value;
    }
}
