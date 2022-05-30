<?php


setcookie(
    'LOGGED_USER',
    'user@example.com',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
)
?>