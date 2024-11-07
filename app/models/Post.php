<?php

namespace app\models;

class Post {
    
    // public $title;
    // public $content;

    // // constructor for User in creating new post 
    // public function __construct($title, $content) {
    //     $this->title = $title;
    //     $this->content = $content;
    // }
    public function getPost($params) {
        
    // Post array or database with some randomm data 
          $allposts = [
        [
            
            'title' => 'image',
            'content' => 'picture of a cat.'
        ],
        [
            
            'title' => 'warning',
            'content' => 'no internet connection'
        ]

    ];

if (!empty($params['title'])) {
    return array_filter($allposts, function ($post) use ($params) {
        if ($user['title'] === $params['title']) {
            return $post;
        };
        return null;
    });
}

return $allposts;
}
public function savePost() {
    
}
}