<?php
    if (isset($_POST['submit'])) {
        $txt = $_POST['txt'];

        $md5 = md5($txt);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MD5 Hash Generator | Brave Coder</title>
</head>
<body>
    <div class="wrapper">
        <h2>MD5 Hash Generator | Brave Coder</h2>
        <p><?php if (isset($_POST['submit'])) { echo $md5; } ?></p>
        <form class="form" action="" method="post">
            <input type="text" name="txt" required>
            <button type="submit" name="submit">Generate</button>
        </form>
    </div>
</body>
</html>