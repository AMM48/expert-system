<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $name_parts = explode(' ', $name);
    if (count($name_parts) < 2) {
        echo nl2br("Name must contain first and last name\n");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo nl2br("Email must contain a valid email address\n");
    }

    if (strlen($comment) > 150) {
        echo nl2br("Comment must not exceed 150 characters\n");
    }
}

?>