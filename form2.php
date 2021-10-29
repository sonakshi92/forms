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
        $conn = mysqli_connect("localhost", "root", "", "form");
        if($conn != TRUE)
        echo "Connection Failed";
        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $query = mysqli_query($conn, "insert into user(`name`, `age`, `email`) values('$name', $age, '$email')");
            if($query != TRUE)
            echo "Insert of values Failed";
        }
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Name" >
        <input type="number" name="age" placeholder="Enter AGE" >
        <input type="email" name="email" placeholder="Enter Email">
        <input type="submit" value="ADD" name="add">
    </form>
    <div>
        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $q= mysqli_query($conn, "SELECT * FROM user");
                 while( $row = mysqli_fetch_assoc($q)):?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['age']; ?></td>
                <td><?php echo $row['email']; ?></td>
                 </tr>
                <?php endwhile; ?>
            </tbody>
    </table>
    </div>
</body>
</html>