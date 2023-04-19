<?php 

function generatePw($pwLength) {
    $alphanumericChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+=;:<>/?'";
    $password = "";

    for ($i = 0; $i < $pwLength; $i++) {

        $password .= $alphanumericChars[rand(0, strlen($alphanumericChars) - 1)];

    }

    return $password;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW GEN</title>
</head>


<body>
    <h1>Generate Random Password</h1>

    <form action="index.php" method="GET">
        <label for="pwLength">Choose your password's length </label><br><br>
        <input type="number" id="pwLength" name="pwLength" min="8" max="16" required><br><br>
        <input type="submit" value="Create PW"><br><br>
    </form>

    <?php 
    if (isset($_GET['pwLength'])) {

        $pwLength = intval($_GET['pwLength']);

        if ($pwLength > 8) {

            $password = generatePw($pwLength);

            echo '<p>Generated Password:  <strong>' . $password . '</strong></p>';

        } else {

            echo '<p>Enter a number higher than 7</p>';
        }
    }
    ?>

</body>


</html>