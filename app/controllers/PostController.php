<?php

namespace app\controllers;
use app\models\User;

class UserController
{
    public function getPosts() {
        $params = [
            
            'title' => $_GET['title'] ?: null,
        ];
        $postModel = new post();
        $post = $postModel->getPosts($params);
        header("Content-Type: application/json");
        echo json_encode($post);
        exit();
    }

    public function saveUser() {
        //get post data from our form post
        $title = $_POST['title'] ?: null;
        $content = $_POST['content'] ?: null;
        $errors = [];

        //validate and sanitize name ***
        if ($title) {
           
            $title = htmlspecialchars($title);

//

            //validate title length
            if (strlen($title) < 2) {
                $errors['title'] = 'title is too short';
            
        } else {
            $errors['title'] = 'Title is required';
        }

        //validate content length
        if (strlen($content) < 2) {
            $errors['content'] = 'Content is too short';
        }
    } else {
        $errors['title'] = 'name is required';
    }
        

        //if we have errors
        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }

        //we could save the data off to be saved here

        $returnData = [
            'title' => $title,
            'acontent' => $content
        ];
        echo json_encode($returnData);
        exit();

    }

}