<?php

$request = $_SERVER['REQUEST_URI'];

if ($request == "/posts") {
    include "api/posts.php";
} else {
    echo "API Running";
}