<?php
include ('models/models.php');
include ('models/usermodel.php');

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    /**
     * @return void
     */
    public function invoke()
    {
        $result = $this->model->getLogin();

        if($result['status'] == 'login') {
            session_start();
            $_SESSION['username'] = $result['username'];
            header('Location: bo.php');
        } else {
            include 'login.php';
        }
    }

}


?>