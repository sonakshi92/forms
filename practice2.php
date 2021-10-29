<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "form");
    $row['f_name']="";
    ?>
    <form>
        <input type="hidden" name="id" value="<?php $row['id']; ?>">
        First Name:
        <input type="text" name="f_name" value="<?php $row['f_name'] ?>">
        Last Name
        <select name="l_name[]" >
            <option value="jai">jai</option>
            <option value="jaiswal">jaiswal</option>
            <option value="adad">adad</option>
        </select>
        Email:
        <input type="checkbox" name="email" value="google" id="">google
        <input type="checkbox" name="email" value="fb" id="">fb
        <input type="checkbox" name="email" value="insta" id="">insta
        <input type="checkbox" name="email" value="snap" id="">snap
        Salary:
        <input type="radio" name="salary" value="10000" id="">Above 10000
        <input type="radio" name="salary" value="50000" id="">Above 50000
        <input type="radio" name="salary" value="100000" id="">Above 50000
        <input type="submit" name="add" value="ADD">
    </form>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Salary</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $q = mysqli_query($conn, "SELECT * FROM employee");
            //print_r($r);
            while($r= mysqli_fetch_array($q)):
            ?>
            <tr>
                <td><?php echo $r['f_name'] ?></td>
                <td><?php echo $r['l_name'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['salary'] ?></td>
                <td><a href="practice2.php?edit=<?php ?>"><button value="edit">EDIT</button></a></td>
                <td><a href="practice2.php?delete=<?php ?>"><button value="Delete">DELETE</button></a></td>
            </tr>
            <?php endwhile; ?>

        </tbody>
    </table>
    
</body>
</html>