<?php
   header('Content-Type: text/html; charset=utf-8');
   $host='39.115.75.246';
   $user='ye1';
   $password='opensw10';
   $dbname='test';
   $id=$_POST['id'];
   $pw=$_POST['pwd1'];

   if(!$id||!$pw){
     echo '<p>You have not entered id or password.<br/>
     Please go back and try again.</p>';
     exit;
   }
   $db=new mysqli($host, $user, $password, $dbname);
   if(mysqli_connect_errno()){
     echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
     exit;
   }
   $id_query="SELECT UserID, Email, Password, UserType FROM user";
   $stmt=$db->prepare($id_query);
   $stmt->execute();
   $stmt->store_result();
   $stmt->bind_result($userUserID, $userEmail, $userPassword, $userUserType);
   $check=0;
   $method='"post"';

   while($id_row=$stmt->fetch()){
     if($userEmail == $id && $userPassword == $pw){
       $check=1;
       $name="myvar";
       $value=$userUserID;
       setcookie($name,$value);
       Header("Location:./ver2_main.php");
       exit;
     }
   }
   if($check==0) {
     Header("Location:./login_ye1.php");
   }
?>
