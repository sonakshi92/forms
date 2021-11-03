<?php
    $conn = mysqli_connect("localhost", "root", "", "form");
    if(!($conn)) echo "Connection Failed";
    
    extract($_POST);
    if(isset($_POST['submit'])){
        $users = mysqli_query($conn, "INSERT INTO users(`f_name`, `l_name`, `email`, `phone`, `birthday`, `password`, `gender`) values('$fname', '$lname', '$email', '$phone', '$birthday', '$password', '$gender')");
        $getId = mysqli_insert_id($conn);
        $user_data = mysqli_query($conn, "INSERT INTO user_data(`u_id`, `address`, `city`, `state`, `country`, `employeed`, `salary`, `occupation`, `curr_location`, `other_phone`, `alt_email`, `education`, `image`, `notes`) values('$getId', '$address', '$city', '$state', '$country', '$employeed', '$salary', '$occupation', '$curr_location', '$other_phone', '$alt_email', '$education', '$image','$notes')");
      //  header('location:ajax.php');
    }

    if(isset($_GET['edit'])){
        $update = TRUE;
        $id = $_GET['edit'];
        $edit1 = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
        $edit2 = mysqli_query($conn, "SELECT * FROM user_data WHERE u_id=$id");
        $row1 = mysqli_fetch_array($edit1);
        $row2 = mysqli_fetch_array($edit2);
        $edu_arr = explode(',', $row2['education']);
        //print_r($edu_arr);
    }

    if(isset($_POST['update'])){
       // print_r($_POST);
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birthday = $_POST['birthday'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $employeed = $_POST['employeed'];
        $salary = $_POST['salary'];
        $curr_location = $_POST['curr_location'];
        $other_phone = $_POST['other_phone'];
        $occupation = $_POST['occupation'];
        $alt_email = $_POST['alt_email'];
        $education = implode(',', $_POST['education']);
        $notes = $_POST['notes'];
       

        $users_update = mysqli_query($conn, "UPDATE users SET `f_name`='$fname', `l_name`='$lname', `email`='$email', `phone`='$phone', `birthday`='$birthday', `password`='$password', `gender`='$gender' WHERE id=$id");
        
        if(!empty($_FILES['image'])){
            //print_r($_FILES['image']);
            $img = mysqli_query($conn, "SELECT image FROM user_data WHERE u_id=$id");
            $row = mysqli_fetch_array($img);
            unlink($row['image']);
            $file = $_FILES['image'];
            $filename = $file['name'];
            $filepath = $file['tmp_name'];
            $image = 'profile/'.$filename;
            move_uploaded_file($filepath, $image);
           
            $user_data_update = mysqli_query($conn, "UPDATE user_data SET `address`='$address', `city`='$city', `state`='$state', `country`='$country', `employeed`='$employeed', `salary`='$salary', `occupation`='$occupation', `curr_location`='$curr_location', `other_phone`='$other_phone', `alt_email`='$alt_email', `education`='$education', `image`='$image', `notes`='$notes' WHERE u_id=$id");
        }else{
            $user_data_update = mysqli_query($conn, "UPDATE user_data SET `address`='$address', `city`='$city', `state`='$state', `country`='$country', `employeed`='$employeed', `salary`='$salary', `occupation`='$occupation', `curr_location`='$curr_location', `other_phone`='$other_phone', `alt_email`='$alt_email', `education`='$education',  `notes`='$notes' WHERE u_id=$id");
        }
      
        
       header('location:user.php');
    }

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $img = mysqli_query($conn, "SELECT image FROM user_data WHERE u_id=$id");
        $row = mysqli_fetch_array($img);
        unlink($row['image']);
      //  print_r($row); die(); 
        $q2= mysqli_query($conn, "DELETE FROM users WHERE id=$id");
        $q3= mysqli_query($conn, "DELETE FROM user_data WHERE u_id=$id");
       header('location:user.php');

    }
    ?>