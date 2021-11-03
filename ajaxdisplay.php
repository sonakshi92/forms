<?php
    $conn = mysqli_connect("localhost", "root", "", "form");
    if(!($conn)) echo "Connection Failed";
    
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