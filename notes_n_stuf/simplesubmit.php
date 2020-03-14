<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
<body>
    <h2>PHP Form Validation Example</h2>
    <form method="post" action="register.php">
        Title: <input type="text" name="title">
        <br><br>
        Description: <textarea type="text" name="description"></textarea>
        <br><br>
        Mal_ID: <input type="text" name="mal_id">
        <br><br>
        Review: <textarea name="review" rows="5" cols="40"></textarea>
        <br><br>
        <br><br>
        <input type="hidden" name="code" value="<?php include "generateID.php"; ?>" />
        <input type="hidden" name="name" value="bob" />
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     include "register.php";
    // }
    ?>

</body>

</html>