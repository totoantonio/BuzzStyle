<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the form data
    // Perform any necessary checks on the form inputs
    // For example, you can check if the email is valid using filter_var()

    // Process the form data
    // Example: Save data to a file
    $data = "Name: $name\nEmail: $email\nMessage: $message\n";
    $file = fopen('form_data.txt', 'a');
    fwrite($file, $data);
    fclose($file);

    // Redirect the user to a success page
    header('Location: success.html');
    exit;
}
?>
