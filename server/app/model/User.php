<?php

namespace app\model;

use app\config\Database; // Correctly referencing Database

class User
{
    public static function create($data)
    {
        // Get the database connection
        $db = Database::getInstance()->getConnection();

        // Prepare and execute the query
        $stmt = $db->prepare("INSERT INTO users (email, password, role) VALUES (:email, :password, :role)");
        $stmt->execute([
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => $data['role']
        ]);

        // Return the last inserted ID
        return $db->lastInsertId();
    }
}
