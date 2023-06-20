<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My data</title>
    </head>
    <body>
        <?php
        echo "<h1>Welcome</h1>";
        $servername ="localhost";
        $username="root";
        $password="";
        $dbname="project";
        $conn= mysqli_connect($servername,$username,$password,$dbname);
        if($conn){
            echo "succefully connected ";
            $result=mysqli_query($conn, "select* from master");
            while($row=mysqli_fetch_array($result)){
                echo $row["contact"]."<br> ".$row["skill"];
            }
        }
        else 
        echo "Database connection failed";
        ?>
    </body>
</html>