<?php


function validatePost($post)
{
    $errors = array();

    
    if (empty($post['title'])) {
        array_push($errors, 'Title est demandé');
    }

    if (empty($post['content'])) {
        array_push($errors, 'Le corps est demandé');
    }
    return $errors;
}