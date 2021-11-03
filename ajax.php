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
?>
    <h3>Users Form</h3>
    <form action="ajaxphp.php" id="myform" method="POST" enctype="multipart/form-data">

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
        <input type="submit" id="submit" name="submit" value="Register User">
        <?php endif ?>
    </form>
    <br><br>
    <h1>Display Data</h1>
    <button id="displaydata">Get Data</button>
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
        <tbody id="response">
           
        </tbody>
    </table>
    <br><br>
    
    
</body>
<script>
    $(document).ready(function() {
        $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
        var form=$('#myform');
        $('#submit').click(function(){
            $.ajax({
                url:'form.attr("action")',
                type:'post',
                data:$('#myform input').serialize(),
                success:function(data){
                    console.log(data);
                }
            });
        });

        $("#displaydata").click(function(){
            $.ajax({
                url:'ajaxdisplay.php',
                type:'post',
                success:function(responsedata){
                    $('#response').html(responsedata);
                }
            });
        });
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