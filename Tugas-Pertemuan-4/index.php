<?php
require_once 'app/controllers/UserController.php';

$controller = new UserController($pdo);

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'create':
            $controller->create();
            break;
        case 'edit':
            if (isset($_GET['id'])) {
                $controller->edit($_GET['id']);
            }
            break;
        case 'delete':
            if (isset($_GET['id'])) {
                $controller->delete($_GET['id']);
            }
            break;
        case 'detail':
            if (isset($_GET['id'])) {
                $controller->detail($_GET['id']);
            }
            break;
        default:
            $controller->index();
            break;
    }
} else {
    $controller->index();
}
?>

