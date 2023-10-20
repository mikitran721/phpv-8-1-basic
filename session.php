<?php
//session luu o server

//kich hoat session
session_start();

// kiem tra da submit chua
if (isset($_POST['submit'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];
    if ($email == 'test1@gmail.com' && $password == '123456') {
        //login successfully
        //redirect to another page
        // echo "Session: $_SESSION['email']";
        $_SESSION['email'] = $email;
        header('Location: dashboard.php');
    } else {
        echo "Incorrect email/password";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test form</title>
</head>

<body>
    <h2>Login you account</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <h3>Login Form</h3>
        <div>
            <label for="email">Your email</label>
            <input placeholder="Your email" type="text" name="email">
        </div>
        <div>
            <label for="password">Your age</label>
            <input placeholder="Your password" type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>