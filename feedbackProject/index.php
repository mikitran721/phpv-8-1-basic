<?php
require './components/header.php';
$name = $email = $body = '';
$nameError = $emailError = $bodyError = '';

//kiem tra user da submit form?
if (isset($_POST['submit'])) {
    //validations
    if (empty($_POST['name'])) {
        $nameError = 'Name is required';
    } else {
        $name = htmlspecialchars($_POST['name']);
    }
    if (empty($_POST['email'])) {
        $emailError = 'Email is required';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    if (empty($_POST['body'])) {
        $bodyError = 'Feedback content is required';
    } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    $validateSuccess = empty($nameError) && empty($emailError) && empty($bodyError);

    if ($validateSuccess) {
        //chen du lieu, se co cau lenh binding du lieu vao ?
        $sql = "INSERT INTO feedback(name,email,body)
            VALUES(?,?,?)
        ";

        //tuong tac voi DB nen cho zo try.catch de bat exceptions
        try {
            $statement = $connection->prepare($sql);
            $statement->bindParam(1, $name);
            $statement->bindParam(2, $email);
            $statement->bindParam(3, $body);
            $statement->execute();
            // echo "Inserted feedback";
            //chuyen huong
            header('Location: feedbackList.php');
        } catch (PDOException $e) {
            echo "Cannot insert your feedback. Error: " . $e->getMessage();
        }
    }
}

?>

<h2>Enter your feedback here</h2>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

    <div class="mb-3">
        <input name="name" type="text" class="form-control <?php echo $nameError ? 'is-invalid' : ''; ?>" placeholder="Your name">
        <p style="color:red;"><?php echo $nameError; ?></p>
    </div>
    <div class="mb-3">
        <input name="email" type="email" class="form-control <?php echo $emailError ? 'is-invalid' : ''; ?>" placeholder="Your email">
        <p style="color:red;"><?php echo $emailError; ?></p>
    </div>
    <div class="mb-3">
        <textarea class="form-control <?php echo $bodyError ? 'is-invalid' : ''; ?>" placeholder="Your feedback" name="body" cols="30" rows="3"></textarea>
        <p style="color:red;"><?php echo $bodyError; ?></p>
    </div>
    <div class="mb-3">
        <input class="btn btn-primary" name="submit" type="submit" value="Send">
    </div>
</form>
<?php include './components/footer.php'; ?>