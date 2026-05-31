<?php

namespace App\Repository;
use App\Config\Database;

class UserRepository extends Database {

    public function create() {

    }

    public function read() {

    }

    public function findByEmail(string $email): ?array {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

    public function update() {

    }

    public function delete() {

    }
}

?>