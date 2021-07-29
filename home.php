<?php
    $usrname = empty($_GET["searchUserName"]) ? "" : $_GET["searchUserName"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <script src = "searchUser.js"></script>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
<!-- <form method = "GET" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
    <label for = "searchUserName">Username: </label>
    <input type = "text" id = "searchUserName" name = "searchUserName">
    &nbsp;&nbsp;
    <button type="submit" name="submitButton" onclick = "fetch()">Search</button>
    <br><br>
    <div id = "t5">
    </div>
<!-- </form> -->
</body>
</html>