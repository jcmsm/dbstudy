<!DOCTYPE html>
<html>
<body>
<div>
<h1>Simple</h1>
<div>
<?php
    $dir = 'sqlite:test.db';
    $dbh  = new PDO($dir) or die("cannot open the database");
    $query =  "SELECT * FROM test";
    foreach ($dbh->query($query) as $row)
    {  echo "<p>".$row[0]." ".$row[1]."</p>";    }
?>

<div>
<h1>Drop Down</h1>
<div>

<?php
    echo '<select name="DROP DOWN NAME">'; // Open your drop down box
    // Loop through the query results, outputing the options one by one
    foreach ($dbh->query($query) as $row)
    {
       echo '<option value="'.$row[0].'">'.$row[0].'</option>';
    }
    echo '</select>';// Close your drop down box
?>


<div>
<h1>CheckList</h1>
<div>

<form action="testprint.php" method="get">
<?php
    // Loop through the query results, outputing the options one by one
    foreach ($dbh->query($query) as $row) 
    {
        echo '<input type="checkbox" name="'.$row[0].'value="'.$row[0].'">'.$row[0];
    }
    echo '<input type="submit"'
?>
</form>

<form action="testprint.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html> 
