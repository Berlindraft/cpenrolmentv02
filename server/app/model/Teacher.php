<?php

namespace App\Model;

use PDO;
use app\config\Database; // Correctly referencing Database


class Teacher
{
    public static function create($data)
    {
        $database = new Database();
        $db = $database->getConnection();
        $stmt = $db->prepare("INSERT INTO teachers (user_id, name, subjects_taught, years_of_experience) VALUES (:user_id, :name, :subjects_taught, :years_of_experience)");
        $stmt->execute([
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'subjects_taught' => $data['subjects_taught'],
            'years_of_experience' => $data['years_of_experience']
        ]);
    }
}
