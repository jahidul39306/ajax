<?php
    require "DBregistration.php";

    if(empty($_GET["searchUserName"]))
    {
        echo "<h3> No username is given </h3>";
    }

    else
    {
        $data = getUser($_GET["searchUserName"]);

        if($data != null)
        {
            echo "<table>";
            echo "<tr>";
            echo "<th>First name</th>";
            echo "<th>Last name</th>";
            echo "<th>Gender</th>";
            echo "<th>Date of Birth</th>";
            echo "<th>Religion</th>";
            echo "<th>Present address</th>";
            echo "<th>Permanent address</th>";
            echo "<th>Phone</th>";
            echo "<th>email</th>";
            echo "<th>website</th>";
            echo "<th>username</th>";
            echo "<th>password</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>" . $data["0"]["fname"];
            echo "<td>" . $data["0"]["lname"];
            echo "<td>" . $data["0"]["gender"];
            echo "<td>" . $data["0"]["dob"];
            echo "<td>" . $data["0"]["religion"];
            echo "<td>" . $data["0"]["present_Address"];
            echo "<td>" . $data["0"]["permanent_Address"];
            echo "<td>" . $data["0"]["phone"];
            echo "<td>" . $data["0"]["email"];
            echo "<td>" . $data["0"]["website"];
            echo "<td>" . $data["0"]["username"];
            echo "<td>" . $data["0"]["password"];
            echo "<tr>";
            echo "</table>";
        }

        else
        {
            echo "No data found";
        }

    }

?>