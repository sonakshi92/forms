<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","root","", "form");
    if($conn != TRUE){
        echo "Connection Failed";
    }
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $salary = $_POST['sal'];
        $add= mysqli_query($conn, "insert into employee(`f_name`, `l_name`, `email`, `password`, `salary`) values('$fname', '$lname','$email', '$password', $salary)");
        if($add == TRUE){
            echo"Data is inserted";
        }else{
            echo "Couldn't insert";
        }
    }
    ?>
    <form action="" method="POST">
        First Name: <input type="text" name="fname">
        Last Name: <input type="text" name="lname">
        Email: <input type="email" name="email">
        Password: <input type="password" name="pass" id="">
        Salary: <input type="number" name="sal" id="">
        <input type="submit" value="Submit" name="submit">
</form>
<?php
    for($i=1; $i<=20; $i+=2 ){
        echo $i. "<br>";
    }
    
    $arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
    foreach($arr as $val){
        if($val%2 != 0){
        echo $val. "<br>";
        }
    }
    ?>
</body>
</html>