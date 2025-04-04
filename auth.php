<?php
session_start();

$valid_credentials = [
    'admin' => password_hash('admin', PASSWORD_DEFAULT) // In real setup, store hashed password
];

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['username']) && isset($data['password'])) {
    if (array_key_exists($data['username'], $valid_credentials) && 
        password_verify($data['password'], $valid_credentials[$data['username']])) {
        $_SESSION['logged_in'] = true;
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?> 