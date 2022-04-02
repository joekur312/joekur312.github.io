<?php
$servername= "localhost";
$usename="root";
$password="";
$dbname="user";

$conn=mysqli_connect($servername,$usename,$password,$dbname);

if(!$conn)
{
	die();
}




$sql = "SELECT * FROM user.order";
$result =mysqli_query($conn,$sql);

$conn->close();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Panel</title>
</head>
<body>
	<style type="text/css">
		body
		{
			background-color: yellowgreen;
			margin: 10px;
			padding: 10px;
			font-family: sans-serif;
		}
	
		.input{
			width: 100%;
			text-align: left;
			background-color: grey;
			width: auto;
		}
	</style>
	<h2 align="center">Welcome Admin</h2>
	<table width="100%" class="tdata">
<div id="table_heads">
		<th align="left" ><u>ORDER</u></th>
		<th><u>QUANTITY</u></th>
		<th><u>EMAIL ADDRESS</u></th>
</div>

		<?php 

if( mysqli_num_rows($result ) >0 )
{
	while($rows=mysqli_fetch_assoc($result))
	
		   
    {

    	?>
    	<tr>
    		<td class="input"><?php echo $rows['fname'];?> </td>
    		<td class="input"><?php echo $rows['fnumber'];?> </td>
    		<td class="input"><?php echo $rows['email'];?> </td>

    	</tr><?php
    	
    }

    
	}
	?>



		 







	</table>

</body>
</html>
