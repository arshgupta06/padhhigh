<?php
//mysqli_connect('hostname' , 'username' , 'password' , 'databasename');
$con = mysqli_connect ('localhost','padhhigh_demoform','padhhigh','padhhigh_demoform');

if($con){

$hometable = "CREATE TABLE home(
name varchar(15) NOT NULL,
parent varchar(15) NOT NULL,
number INT(10) NOT NULL,
email varchar(15) NOT NULL,
city varchar(15) NOT NULL
)";

mysqli_query($con , $hometable);

$quiqtable = "CREATE TABLE quiq(
    name varchar(15) NOT NULL,
    parent varchar(15) NOT NULL,
    number INT(10) NOT NULL,
    email varchar(15) NOT NULL,
    city varchar(15) NOT NULL
    )";
    
    mysqli_query($con , $quiqtable);

}else{
    echo $con->error_log;
}

?>