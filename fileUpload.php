<?php
if (isset($_POST['submit'])) {
    $fileName = $_FILES['upload']['name'];
    $permittedExtensions = ['png', 'jpg', 'jpeg', 'gif'];

    if (!empty($fileName)) {
        // print_r($_FILES);
        $fileSize = $_FILES['upload']['size'];
        $generatedFileName = time() . '-' . $fileName;
        $fileTmpName = $_FILES['upload']['tmp_name'];
        $destinationPath = "uploads/$generatedFileName";

        // lay duoi file - 
        //lay phan tu cuoi cua array
        $fileExtension = explode('.', $fileName);
        $fileExtension = strtolower(end($fileExtension));

        // kiem tra duoi imag
        if (in_array($fileExtension, $permittedExtensions)) {
            if ($fileSize <= 1024 * 1024 * 4) {
                //ok, move from tmp path to uploads
                move_uploaded_file($fileTmpName, $destinationPath);
                $message = "<p style='color:green;'>Upload file successfully.</p>";
            } else {
                $message = "<p style='color:red;'>File is too big.</p>";
            }
        }

        echo "$fileSize, $generatedFileName, $destinationPath, $fileExtension";
    } else {
        $message = "<p style='color:red;'>No file selected, please try again.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload in PHP</title>
</head>

<body>
    <h2>File upload in PHP.</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <label>Choose your image to upload</label>
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php echo $message ?? '' ?>
</body>

</html>