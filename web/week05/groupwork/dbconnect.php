<?php
​
try
{
$user = 'postgres';
$password = 'kdst4977';
$db = new PDO('pgsql:host=127.0.0.1;dbname=gp', $user, $password;
}
catch(PDOException $ex)
{
	echo 'Error!: ' . $ex->getMessage();
};
​
echo "<h2>Scripture Resources</h2>";
​
foreach ($db->query('SELECT * FROM scriptures') as $row)
{
	echo '<div><b>' . $row['book'] . ' '. $row['chapter'] . ":" . $row['verse'] . '</b> - "' . . '"';
}
?>