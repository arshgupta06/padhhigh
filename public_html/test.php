<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json; charset=UTF-8");

require './db.php';
require './response.php';

$json = file_get_contents('php://input');
$data = json_decode($json);

if(isset($data)){

        //store object data in variable
$name = $data ->name;
$parent = $data ->parent;
$number = $data ->number;
$email = $data ->email;
$city = $data ->city;
$table = $data ->table;
/*insert data*/
$query = "INSERT INTO `$table`(`name`, `parent`, `number`, `email`, `city`) VALUES ('$name','$parent',$number,'$email','$city')";
$inserted = mySqli_query($con , $query);

$res = new Response;
if($inserted){
    $res -> success = true;
    $res -> message = "Detail Submitted";
   }else{
    $res -> success = false;
    $res -> message = "failed to apply";
}
/*insert data*/
echo json_encode($res);
}
?>