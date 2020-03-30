<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'sqlInjection';
$error = '';
$result;
$row;

$connect = @mysqli_connect($db_host, $db_username,$db_password,$db_database) or die('Connection error: '. mysqli_connect_error());

//$query = "SELECT * FROM user WHERE username = '" . $_POST['form_innput_username'] . "'";
$query = "SELECT * FROM user WHERE username = '" . $_POST['form_innput_username'] . "' AND password = '". $_POST['form_innput_password'] ."'";


$stmt = $connect->prepare('SELECT * FROM user WHERE username = ? AND password = ?');
$stmt->bind_param('ss', $_POST['form_innput_username'],$_POST['form_innput_password']); // 's' specifies the variable type => 'string'
//$stmt->bind_param('s', $_POST['form_innput_password']);

$stmt->execute();
echo "Query using prepared statement:<br>";
$result2 = $stmt->get_result();
while ($row = $result2->fetch_row()) {
    echo "<br>" . $row[0] . " | " . $row[1] . " | " .$row[2] . " | ". $row[3]. " | " . $row[4]. "<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8" />
<head>
	<link rel="stylesheet" href="style.css">
</head>
<title>SQL INJECTION DEMO - PHP/MySQL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="main">
<div style="display:name;" class="command"><?php print_r($_POST)?></div>
<?php 'Error: '. $error; ?>

<h1>Query</h1>
<?php $query_display = "SELECT * FROM user WHERE username = "."<span style=\"color:#d00; font-weight:bold; background-color:#ff0; border:1px solid #f00;\">".$_POST['form_innput_username']."</span> AND password= "."<span style=\"color:#d00; font-weight:bold; background-color:#ff0; border:1px solid #f00;\">".$_POST['form_innput_password'].""?>
<pre style="color:#00f;"><?php echo '<div class="query">'.$query_display. '</div>'; ?></pre>

<h1>Result</h1>
<!--<table border="1">
	<tr>
		<th>Username</th>
		<th>Password</th>
		<th>First name</th>
		<th>Last name</th>
		<th>Phone</th>
	</tr>
	<?php 
	while($row = mysqli_fetch_array($result))
	{
	?>
	<tr>
		<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['password']; ?></td>
		<td><?php echo $row['f_name']; ?></td>
		<td><?php echo $row['l_name']; ?></td>
		<td><?php echo $row['phone']; ?></td>
	</tr>
	<?php 
	}	
	?>	
</table>
-->

<table border="1">
	<tr>
		<th>Username</th>
		<th>Password</th>
		<th>First name</th>
		<th>Last name</th>
		<th>Phone</th>
	</tr>
<?php
if (mysqli_multi_query($connect, $query)) {
	do {
		/* store first result set */
		if ($result = mysqli_store_result($connect)) {
			while ($row = mysqli_fetch_row($result)) 
			{
			?>
			<tr>
				<td><?php echo $row[0]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td><?php echo $row[4]; ?></td>
			</tr>
			<?php 				
			}
			mysqli_free_result($result);
			}
		/* print divider */
	} while (mysqli_next_result($connect));
}
?>
</table>

<footer>
<div class="error">
<p> 
<?php 
	if( mysqli_error($connect)){
		$error = mysqli_error($connect);
		Echo  "<span style=\"color:#d00; font-weight:bold; background-color:#ff0; border:1px solid #f00;\">ERROR: ".$error."</span>";
	} 
?> 
</p>
</div>

<p> 
<?php 
	Echo "<a href=index.php> << To Login Form </a>"
?> 
</p> 
</footer>
<div>
</body>
</html>

