<?php

$MySQLi_connection = new MySQLi('localhost', 'root','', 'test');

if($MySQLi_connection->connect_error)
{
    echo "Not Connected, error:" .$MySQLi_connection->connect_error;
}

else
{
    echo "connected";
}

?>
<?php

$link = mysqli_connect('localhost','root','');

if($link ==false)
{
    die("Error:Could not able to create DB." .mysqli_connect_error());
}

$sql = "CREATE DATABASE Mid_Term_Su";

if(mysqli_query($link, $sql)){
    echo "\nDB Created";
}
else{
    echo "\nError:Could not able to create DB." .mysqli_error($link);
}

mysqli_close($link)

?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE Department(
fid decimal(9.0) NOT NULL PRIMARY KEY,
fname VARCHAR(30) NULL,
deptid decimal(2.0) NULL
)";

if(mysqli_query($link, $sql)){
     echo "\nTable Created";
}
else{
    echo "\nError! Could not able to create table." .mysqli_error($link); 
}

mysqli_close($link)

?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO department(fid, fname, deptid) VALUES
('142519864','Ivana Teach','20'),('242518965','James Smith','68'),('141582651','Mary Johnson','20'),('011564812','John Williams','68'),
('254099823','Patricia Jones','68'),('356187925','Robert Brown','12'),('489456522','Linda Davis','20'),('287321212','Michael Miller','12')
('248965255','Barbara Wilson','12'),('159542516','William Moore','33'),('090873519','Elizabeth Taylor','11'),('486512566','David Anderson','20')
('619023588','Jennifer Thomas','11'),('489221823','Richard Jackson','33'),('548977562','Ulysses Teach','20')";

if(mysqli_query($link, $sql)){
    echo "\nTable Created";
}
else{
    echo"\nError:could not able to create table." .mysqli_error($link); 
}

mysqli_close($link)

?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE Course(
snum decimal(9.0) NOT NULL PRIMARY KEY,
cname VARCHAR(40) NOT NULL PRIMARY KEY 
)";

if(mysqli_query($link, $sql)){
     echo "\nTable Created";
}
else{
    echo "\nError! Could not able to create table." .mysqli_error($link); 
}

mysqli_close($link)

?>
?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'Mid_Term_Su');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO Course(snum, cname) VALUES
('112348546','Database Systems'),('115987938','Database Systems'),('348121549','Database Systems'),
('322654189','Database Systems'),('552455318','Database Systems'),('455798411','Operating System Design'),
('552455318','Operating System Design'),
('567354612','Operating System Design'),
('112348546','Operating System Design'),
('115987938','Operating System Design'),
('322654189','Operating System Design'),
('567354612','Data Structures'),
('552455318','Communication Networks'),
('455798411','Optical Electronics'),
('301221823','Perception'),
('301221823','Social Cognition'),
('301221823','American Political Parties'),
('556784565','Air Quality Engineering'),
('099354543','Patent Law'),
('574489456','Urban Economics')";

if(mysqli_query($link, $sql)){
    echo "\nTable Created";
}
else{
    echo"\nError:could not able to create table." .mysqli_error($link); 
}

mysqli_close($link)

?>