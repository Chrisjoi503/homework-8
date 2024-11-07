<?php

namespace app\models;

class Post {
    // Post array or database 
    public function getPost($params) {
    
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
    return $allPosts;
}

public function savePost() {
    
}
}