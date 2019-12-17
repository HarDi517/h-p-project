<?php
include "./password.php";
$host='39.115.75.246';
$user='bobo';
$password='opensw1';
$dbname='test';
//변수지정
$user_type=$_POST['usertype'];
$user_name=$_POST['nickname'];
$user_email=$_POST['email'];
$user_pw=$_POST['psw'];
//암호화
$sec_pw=password_hash($user_pw, PASSWORD_DEFAULT);

echo "$sec_pw";

$db=new mysqli($host, $user, $password, $dbname);
 if(mysqli_connect_errno()){
   echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
   exit;
 }
 $user_query_insert="INSERT INTO user(UserType, Nickname, Email, Password) VALUES (?, ?, ?, ?)";
   $stmt3=$db->prepare($user_query_insert);
   $stmt3->bind_param('dssd', $user_type,$user_name ,$user_email ,$sec_pw );
   $stmt3->execute();
   //여기까지가 값을 넣기

//Header("Location:./login_ye1.php");
//에러메세지 출력
?>
