<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice form</title>
</head>
<body>
    <?php
    $row['f_name'] = $row['l_name'] = $row['email'] = $row['salary'] = "";
    $conn = mysqli_connect("localhost", "root", "", "form");
    if(!($conn)) echo "failed";
    if(isset($_POST['add'])){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $salary = $_POST['salary'];
        $q2 = mysqli_query($conn, "INSERT INTO employee (`f_name`, `l_name`, `email`, `password`, `salary`) VALUES ('$f_name', '$l_name', '$email', '$password', '$salary')");
    }

    if(isset($_GET['edit'])){
        $update = TRUE;
        $id = $_GET['edit'];
        $edit = mysqli_query($conn, "SELECT * FROM employee WHERE id=$id");
        $row= mysqli_fetch_array($edit);
    }
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $salary = $_POST['salary'];
        $q3 = mysqli_query($conn, "UPDATE employee SET `f_name`='$f_name', `l_name`='$l_name', `email`='$email', `password`='$password', `salary`=$salary WHERE id=$id");
    }
    if(isset($_GET['delete'])){
        $id= $_GET['delete'];
        $del = mysqli_query($conn, "DELETE FROM employee WHERE id=$id");
    }
    ?>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="f_name" value="<?php echo $row['f_name'];?>" placeholder="FIRST NAME">
    <input type="text" name="l_name" value="<?php echo $row['l_name'];?>" placeholder="LAST NAME">
    <input type="email" name="email" value="<?php echo $row['email'];?>" placeholder="EMAIL">
    <input type="password" name="password" placeholder="PASSWORD">
    <input type="number" name="salary" value="<?php echo $row['salary']; ?>"placeholder="SALARY">
    <input type="submit" value="add" name="add">
    <button type="submit" value="add" name="update"> UPDATE </button>
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
            $q= mysqli_query($conn, "SELECT * FROM employee");
            while($r=mysqli_fetch_array($q)):
              //  print_r($r);
            ?>
            <tr>
                <td><?php echo $r['f_name']; ?></td>
                <td><?php echo $r['l_name']; ?></td>
                <td><?php echo $r['email']; ?></td>
                <td><?php echo $r['salary']; ?></td>
                <td><a href="practice.php?edit=<?php echo $r['id']; ?>"><button>EDIT</button></a></td>
                <td><a href="practice.php?delete=<?php echo $r['id']; ?>"><button>DELETE</button></a></td>
            </tr>
            <?php endwhile ?>
        </tbody>
    </table>

</body>
</html>