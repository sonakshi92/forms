<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
</head>
<body>
    <?php
    $update = $edu_arr[] = "";
    $row1['f_name'] = $row1['birthday'] = $row1['l_name']  = $row1['email']  = $row1['phone']  = $row1['password'] = $row1['gender'] = "";
    $row2['address'] = $row2['city'] = $row2['state'] = $row2['country'] = $row2['employeed'] = $row2['salary'] = $row2['curr_location'] = $row2['other_phone'] = $row2['occupation'] = $row2['alt_email'] = $row2['education'] = $row2['image'] = $row2['notes'] = ""; 
    $conn = mysqli_connect("localhost", "root", "", "form");
    if(!($conn)) echo "Connection Failed";
    if(isset($_POST['add'])){
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
        $file = $_FILES['image'];
        $imgname = $file['name'];
        $filename =  explode(".", $_FILES["image"]["name"]);
        $newfilename =  date('Y-m-d-H-i-s') . $imgname . '.' . end($filename);
        $filepath = $file['tmp_name'];
        $image = 'profile/'.$newfilename;
        move_uploaded_file($filepath, $image);

            //echo "INSERT INTO users(`f_name`, `l_name`, `email`, `phone`, `birthday`, `password`, `gender`) values('$fname', '$lname', '$email', '$phone', '$birthday', '$password', '$gender')"; exit();

        $users = mysqli_query($conn, "INSERT INTO users(`f_name`, `l_name`, `email`, `phone`, `birthday`, `password`, `gender`) values('$fname', '$lname', '$email', '$phone', '$birthday', '$password', '$gender')");

        $getId = mysqli_insert_id($conn);

        $user_data = mysqli_query($conn, "INSERT INTO user_data(`u_id`, `address`, `city`, `state`, `country`, `employeed`, `salary`, `occupation`, `curr_location`, `other_phone`, `alt_email`, `education`, `image`, `notes`) values('$getId', '$address', '$city', '$state', '$country', '$employeed', '$salary', '$occupation', '$curr_location', '$other_phone', '$alt_email', '$education', '$image','$notes')");
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
    <h3>Users Form</h3>
    <form action="" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id"  value="<?php echo $row2['u_id']; ?>">
        <input type="text" name="fname" id="fname" placeholder="First Name" value="<?php echo $row1['f_name']; ?>">

        <input type="text" name="lname" id="lname" placeholder="Last Name" value="<?php echo $row1['l_name']; ?>"><br><br>

        <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $row1['email']; ?>">

        <input type="tel" name="phone" id="phone" placeholder="Phone" value="<?php echo $row1['phone']; ?>"><br><br>

        <p>Date: <input type="text" name="birthday" id="datepicker" value="<?php echo $row1['birthday']; ?>"></p><br><br>

        <input type="password" name="password" id="password" placeholder="Password">

        <input type="password" name="conf" id="conf" placeholder="Confirm Password"><br><br>

        Gender :<input type="radio" name="gender" value="male" id="gender" 
            <?php if($row1['gender']=="male") echo "checked";?>>Male
            <input type="radio" name="gender" value="female" id="" 
            <?php if($row1['gender']=="female") echo "checked"; ?>>Female
        <br><br>

        <input type="text" name="address" id="address" placeholder="Address" value="<?php echo $row2['address']; ?>">

        <input type="text" name="city" id="city" placeholder="City" value="<?php echo $row2['city']; ?>"><br><br>

        <input type="text" name="state" id="state" placeholder="State" value="<?php echo $row2['state']; ?>">
        Country : <select name="country" id=""> 
            <option value="<?php echo $row2['country'];?>"><?php echo strtoupper($row2['country']);?></option>
            <option value="india">India</option>
            <option value="pakistan">Pakistan</option>
            <option value="bangaladesh">Bangladesh</option>
            <option value="srilanka">Srilanka</option>
            <option value="australia">Australia</option>
            <option value="usa">USA</option>
        </select><br><br>

        Employeed:<input type="radio" name="employeed" id="employeed" onclick="checkyes()" value="yes"  <?php if($row2['employeed']=="yes") echo "checked";?>>YES
        <input type="radio" name="employeed" onclick="checkno()" value="no" <?php if($row2['employeed']=="no") echo "checked";?>>NO

        <input type="number" name="salary" id="salary" placeholder="Salary" value="<?php echo $row2['salary']; ?>"><br><br>

        <input type="text" name="curr_location" placeholder="Current Location" value="<?php echo $row2['curr_location']; ?>">

        <input type="tel" name="other_phone" placeholder="Other Phone" value="<?php echo $row2['other_phone']; ?>"><br><br>

        <input type="text" name="occupation" placeholder="Occupation" value="<?php echo $row2['occupation']; ?>">

        <input type="email" name="alt_email" id="alt_email" placeholder="Alternate Email" value="<?php echo $row2['alt_email']; ?>"><br><br>

        Education:<input type="checkbox" name="education[]" id="education" value="schooling" <?php if(in_array('schooling', $edu_arr)) echo "checked";?>>Schooling
        <input type="checkbox" name="education[]" value="intermediate" <?php if(in_array('intermediate', $edu_arr)) echo "checked";?>>Inter
        <input type="checkbox" name="education[]" value="degree" <?php if(in_array('degree', $edu_arr)) echo "checked";?>>Degree
        <input type="checkbox" name="education[]" value="postgraduation" <?php if(in_array('postgraduation', $edu_arr)) echo "checked";?>>PG
        <input type="checkbox" name="education[]" value="phd" <?php if(in_array('phd', $edu_arr)) echo "checked";?>>PHD <br><br>

        <textarea name="notes" id="" cols="45" rows="8" placeholder="Notes:"> <?php echo $row2['notes']; ?></textarea>
        <br><br>

        <?php if($update==TRUE): ?>
        <img src="<?php echo $row2['image']  ?>" alt="" width="90">
        Update Profile Image: <input type="file" name="image" ><br><br>

        <input type="submit" name="update" value="Update User">
        <?php else:?>
        Profile Image: <input type="file" name="image" ><br><br>
        <input type="submit" name="add" value="Register User">
        <?php endif ?>
    </form>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                <th>Employeed</th>
                <th>Salary</th>
                <th>Occupation</th>
                <th>Other Phone No.</th>
                <th>Alternate Email</th>
                <th>Education</th>
                <th>Image</th>
                <th>Notes</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $q= mysqli_query($conn, "SELECT * 
                From users as u
                LEFT JOIN user_data as d
                on u.id=d.u_id");
                while($row=mysqli_fetch_array($q)){
                    //echo "<pre>"; print_r($row);exit();
       
            ?>
            <tr> 
                <td><?php echo ucfirst($row['f_name']). " ". substr($row['l_name'], 0,3); ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['birthday']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['employeed']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td><?php echo $row['occupation']; ?></td>
                <td><?php echo $row['other_phone']; ?></td>
                <td><?php echo $row['alt_email']; ?></td>
                <td><?php echo $row['education']; ?></td>
                <td><img src="<?php echo $row['image'];?>" alt="Profile Image" width=50></td>
                <td><?php echo $row['notes']; ?></td>
                <td>
                    <a href="user.php?edit=<?php echo $row['u_id'];?>"><input type="button" value="edit"></a>
                    <a href="user.php?delete=<?php echo $row['u_id'];?>"><input type="button" value="delete"></a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <br><br>
    
    
</body>
<script>
    $(document).ready(function() {
    $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
    });
    
    function checkyes(){
        document.getElementById('salary').style.display = "";
    }
    function checkno(){
        document.getElementById('salary').value = "";
        document.getElementById('salary').style.display = "none";
        
    }
</script>
</html>