<?php
// check if form is submitted
if(isset($_POST['submit'])) {
    // get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile_pic = $_FILES['profile_pic'];
    
    // validate form inputs
    if(empty($name) || empty($email) || empty($password) || empty($profile_pic)) {
        die("All fields are required");
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    
    // save profile picture to server
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($profile_pic['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $new_filename = uniqid() . '_' . date('YmdHis') . '.' . $imageFileType;
    $target_file = $target_dir . $new_filename;
    if(!move_uploaded_file($profile_pic['tmp_name'], $target_file)) {
        die("Error uploading profile picture");
    }
    
    // save user data to CSV file
    $user_data = array($name, $email, $new_filename);
    $csv_file = fopen("users.csv", "a");
    fputcsv($csv_file, $user_data);
    fclose($csv_file);
    
    // set cookie with user's name
    session_start();
    setcookie('name', $name);
    
    // redirect to user page
    header("Location: user.php");
} else {
    die("Access denied");
}
?>
