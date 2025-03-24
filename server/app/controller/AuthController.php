<?php 

namespace App\Controller;

use App\Service\AuthService;
use App\Model\User;
use App\Model\Student;
use App\Model\Teacher;

class AuthController
{
    public function signup($request)
    {
        $email = $request['email'];
        $password = $request['password'];
        $role = $request['role'];
        $name = $request['name'];

        // Validate input
        $validation = AuthService::validateSignup($email, $password, $role);
        if ($validation['status'] !== 'success') {
            return $validation;
        }

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Create user in `users` table
        $userId = User::create([
            'email' => $email,
            'password' => $hashedPassword,
            'role' => $role,
        ]);

        if (!$userId) {
            return ['status' => 'error', 'message' => 'Signup failed'];
        }

        // Add to role-specific table
        if ($role === 'student') {
            Student::create([
                'user_id' => $userId,
                'name' => $name,
                'grade_level' => $request['grade_level'],
                'parent_contact' => $request['parent_contact'],
            ]);
        } elseif ($role === 'teacher') {
            Teacher::create([
                'user_id' => $userId,
                'name' => $name,
                'subjects_taught' => $request['subjects_taught'],
                'years_of_experience' => $request['years_of_experience'],
            ]);
        }

        return ['status' => 'success', 'message' => 'Signup successful'];
    }
}
