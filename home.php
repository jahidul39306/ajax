<?php
    require "DBsearchUser.php";
    $usrname = empty($_GET["searchUserName"]) ? "" : $_GET["searchUserName"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
<form method = "GET" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for = "searchUserName">Username: </label>
    <input type = "text" id = "searchUserName" name = "searchUserName">
    &nbsp;&nbsp;
    <button type="submit" name="submitButton">Search</button>
    <br><br>
    <table id = "t">
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Religion</th>
            <th>Present address</th>
            <th>Permanent address</th>
            <th>Phone</th>
            <th>email</th>
            <th>website</th>
            <th>username</th>
            <th>password</th>
        </tr>
    
    <?php

    ?>

<script>
    function fetch()
    {
        var userName=document.getElementById("searchUserName").value;
        let b=document.getElementById("b");
        if(userName.length==0)
        {
            //b.innerHTML='Empty'
        }
        else
        {
            var XML= new XMLHttpRequest();
            XML.onreadystatechange = function()
            {
                if(XML.status==200)
                {
                    b.innerHTML=XML.responseText; 
                }
            };
            XML.open('GET','DBsearchUser.php?searchUserName=' +username,true);
            XML.send();
        }
        
       
        
    }   
 </script>

</form>
</body>
</html>