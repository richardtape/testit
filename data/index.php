<?php
/*
$mysqli = new mysqli( 'mariadb', 'root', '123456', 'myapp' );

if ( $mysqli->connect_errno ) {

	echo 'Sorry, this website is experiencing problems.';

	// Something you should not do on a public site, but this example will show you
	// anyways, is print out MySQL error related information -- you might log this
	echo 'Error: Failed to make a MySQL connection, here is why: <br />';
	echo 'Errno: ' . absint( $mysqli->connect_errno ) . '<br />';
	echo 'Error: ' . $mysqli->connect_error . '<br />';

	// You might want to show them something nice, but we will simply exit
	exit;
}

$mysqli->close();
*/
?>
<html>
<body>
	<h1>Hi there!</h1>
	<p><?php echo 'Hi! This is PHP Version: ' . phpversion(); ?></p>
	<p>To test things, <a id="go-to-other" href="/other.php">here is another page</a>.</p>
</body>
</html>
