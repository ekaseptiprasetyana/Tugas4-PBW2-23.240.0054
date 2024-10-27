<?php
require_once 'config/database.php';
require_once 'app/models/UserModel.php';

class UserController {
    private $model;

    public function __construct($pdo) {
        $this->model = new UserModel($pdo);
    }

    public function index() {
        $users = $this->model->getAllUsers();
        include 'app/views/user/index.php';
    }

    public function detail($id) {
        $user = $this->model->getUserById($id);
        include 'app/views/user/detail.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['name'];
            $email = $_POST['email'];

            $this->model->createUser($nama, $email);
            header("Location: index.php");
        } else {
            include 'app/views/user/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = $_POST['name'];
            $email = $_POST['email'];

            $this->model->updateUser($id, $nama, $email);
            header("Location: index.php");
        } else {
            $user = $this->model->getUserById($id);
            include 'app/views/user/edit.php';
        }
    }

    public function delete($id) {
        $this->model->deleteUser($id);
        header("Location: index.php");
    }
}
?>

