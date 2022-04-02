<?php
$servername="localhost";
$username="root";
$password="";
$dbname="user";

$conn= mysqli_connect("localhost", "root", "", "user");
 
// Check connection
if($conn->connect_error)
{
    die("connection failed:" .$connect->connect_error);
}
 

$sql = "SELECT * FROM order";
$result =mysqli_query($conn,$sql);



if(mysqli_num_rows($result ) >0)
{
	while($rows=mysqli_fetch_assoc($result))
	
		   
    {

    	?>
    	<tr>
    		<td><?php echo $rows['fname'];?> </td>
    		<td><?php echo $rows['fnumber'];?> </td>
    	</tr><?php
    	
    }

    
	}
	?>


    
    
 


