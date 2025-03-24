<?php

namespace App\Service;

class AuthService
{
    public static function validateSignup($email, $password, $role)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['status' => 'error', 'message' => 'Invalid email address'];
        }

        if (strlen($password) < 8) {
            return ['status' => 'error', 'message' => 'Password must be at least 8 characters'];
        }

        if (!in_array($role, ['student', 'teacher'])) {
            return ['status' => 'error', 'message' => 'Invalid role selected'];
        }

        return ['status' => 'success'];
    }
}
