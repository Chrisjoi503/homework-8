<?php
require "../app/models/Post.php";
require "../app/controllers/PostController.php";

use app\controllers\UserController;


$url = strtok($_SERVER["REQUEST_URI"], '?');


$uriArray = explode("/", $url);

if ($uriArray[1] === 'api' && $uriArray[2] === 'post' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $postController = new PostController();
    $PostController->getPost();
}

if ($uriArray[1] === 'post' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    require './views/displayPost.html';
}

if ($uriArray[1] === 'api' && $uriArray[2] === 'users' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController = new UserController();
    $userController->saveUser();
}

if ($uriArray[1] === 'addPost' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    require './views/addPost.html';
}
