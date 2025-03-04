<?php

require_once "models/pdoModel.php";
require_once 'models/userModel.php';


class AuthController {
    private $userModel;
    
    public function __construct() {
        $this->userModel = new userModel();
    }
    
    public function registerUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pseudo = $_POST['pseudo'];
            $mail = $_POST['mail'];
            $tel = $_POST['tel'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];
            
            if ($password !== $confirmPassword) {
                echo "Les mots de passe ne correspondent pas.";
                return;
            }
            
            $result = register($pseudo, $mail, $tel, $password);
            if ($result === true) {
                header('Location: connexion');
                exit();
            } else {
                echo $result;
            }
        }
    }
    
    public function loginUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            
            if ($this->userModel->login($mail, $password)) {
                header('Location: home');
                exit();
            } else {
                echo "Email ou mot de passe incorrect.";
            }
        }
    }
    
    public function logoutUser() {
        $this->userModel->logout();
        header('Location: inscription');
        exit();
    }
}