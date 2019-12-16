<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
$host='39.115.75.246';
$user='bobo';
$password='opensw1';
$dbname='test';

$db=new mysqli($host, $user, $password, $dbname);
 if(mysqli_connect_errno()){
   echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
   exit;
 }

$user_nickname=$_POST['nickname'];
$user_password=$_POST['password'];


$userid = $_COOKIE["myvar"]; 
$usertype = $_COOKIE["myvar10"];  //session=cookie
$usercookie='';

$user_count="select count(*) from user where userid= ? "; //고객이므로
$stmt3=$db->prepare($user_count);
$stmt3->bind_param('d',$userid);
$stmt3->execute();
$stmt3->store_result();
$stmt3->bind_result($count);
$num=0;
while($id_row=$stmt3->fetch()){
}

echo "string   ";

echo $count;

if ($count == 0) {
 }
 else {
echo $user_nickname;
echo "update";
$user_query_update="UPDATE user SET nickname='$user_nickname',password='$user_password' WHERE UserID='$userid'";
 $stmt3=$db->prepare($user_query_update);
 $stmt3->execute();
}



?>
