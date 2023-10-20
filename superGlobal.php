<?php
// SUPER GLOBALS: bien co san trong php; chi viec lay ra su dung, da co san
// vd: $_GET, $_POST, $_SERVER,...
// print_r($_SERVER); //server php cai dat
/**
 * $_GET & $_POST: 
 * chua tham so o trinh duyet client gui len server
 * quar URL, FORM data
 * lay du lieu: $_GET['name'], $_POST['name']
 * can kiem tra co ton tai khong voi `isset(x)`
 */

if (isset($_GET['name'])) {

    print_r($_GET['name']);
}

/**
 * su dung cu phap khac kiem tra thay cho `isset`
 * toan tu `coalescing`
 */

// toan tu COALESCING
$name = htmlspecialchars($_POST['email']) ?? 'no.email';
$name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS) ?? 'No name';
$add = htmlspecialchars($_GET['add']) ?? 'no add';
$age = htmlspecialchars($_POST['password']) ?? 'no.pass';
echo "$name - $add - $age <br/>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test form</title>
</head>

<body>
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