<?php

namespace App\Controllers;
use App\Repository\UserRepository;

class UserController {
    private UserRepository $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }
}

?>