<?php

$user = new User();

$full_name = $_POST['full-name'];
$username = $_POST['user-name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmed_password = $_POST['confirm_password'];
$errors = [];

// Would be used for custom error messages but html handles that yay
//---------------------------------------------------------------------
//$error_fields = [
//    'full_name' => 'A full name is required',
//    'user-name' => 'Username is required',
//    'email' => 'Email is required',
//    'password' => 'Password is required',
//    'confirmed_password' => 'Please confirm your password'
//];

//foreach ($error_fields as $field => $message) {
//    if (empty($$field)) {
//        $errors[$field] = $message;
//    }
//}
//---------------------------------------------------------------------

$validations = [
    'email' => [
        'method' => 'validateEmail',
        'args' => [$email],
        'message' => 'Please provide a valid email address (e.g. joe@gmail.com)'
    ],
    'full_name' => [
        'method' => 'validateString',
        'args' => [$full_name, 2, 255],
        'message' => 'Please provide a valid full name (2 to 255 characters)'
    ],
    'username' => [
        'method' => 'validateString',
        'args' => [$username, 3, 50],
        'message' => 'Please provide a valid username (3 to 50 characters)'
    ],
    'password' => [
        'method' => 'validateString',
        'args' => [$password, 8, 255],
        'message' => 'Please provide a valid password (8 to 255 characters)'
    ],
    'confirm_password' => [
        'method' => 'matchPassword',
        'args' => [$password, $confirmed_password],
        'message' => 'Passwords do not match'
    ]
];

foreach ($validations as $field => $validation) {
    if (!call_user_func_array(['Core\Validator', $validation['method']], $validation['args'])) {
        $errors[$field] = $validation['message'];
    }
}

if ($user->userExists($email)) {
    $errors['email'] = 'Email already exists';
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    view('/user/register.view.php', compact('errors'));
    exit();
}


$user->register([
    "full-name" => $full_name,
    "username" => $username,
    "email" => $email,
    "password" => password_hash($password, PASSWORD_DEFAULT)
]);

header("Location: ./login");
$_SESSION['successMessage'] = "Account created successfully. You can now log-in.";
exit();


