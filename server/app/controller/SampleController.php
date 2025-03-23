<?php

require_once 'models/SampleModel.php';

class SampleController {
    public function index() {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();

        require 'views/users.php';
    }
}
