<?php

$user = new User();

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

$validations = [
    'email' => [
        'method' => 'validateEmail',
        'args' => [$email],
        'message' => 'Please provide a valid email address (e.g. joe@gmail.com)'
    ],
    'password' => [
        'method' => 'validateString',
        'args' => [$password, 8, 255],
        'message' => 'Please provide a valid password (8 to 255 characters)'
    ]
];

foreach ($validations as $field => $validation) {
    if (!call_user_func_array(['Core\Validator', $validation['method']], $validation['args'])) {
        $errors[$field] = $validation['message'];
    }
}

if (!$user->userExists($email)) {
    $errors['email'] = 'User with that email does not exist';
}

if(!$user->login($email, $password)) {
    $errors['password'] = 'Incorrect password';
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    view('/user/login.View.php', compact('errors'));
    exit();
}

header("Location: ./");
$_SESSION['user'] = User::getUserId();
exit();
