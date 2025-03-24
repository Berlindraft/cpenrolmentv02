<?php

namespace App\Model;

use PDO;
use app\config\Database; // Correctly referencing Database

class Student
{
    public static function create($data)
    {
        $database = new Database();
        $db = $database->getConnection();
        $stmt = $db->prepare("INSERT INTO students (user_id, name, grade_level, parent_contact) VALUES (:user_id, :name, :grade_level, :parent_contact)");
        $stmt->execute([
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'grade_level' => $data['grade_level'],
            'parent_contact' => $data['parent_contact']
        ]);
    }
}
