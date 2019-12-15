<?php
$host='39.115.75.246';
$user='bobo';
$password='opensw1';
$dbname='test';



//변수지정
$user_type=$_POST['usertype'];
$user_name=$_POST['nickname'];
$user_email=$_POST['email'];
$user_pw=$_POST['psw'];

$db=new mysqli($host, $user, $password, $dbname);
 if(mysqli_connect_errno()){
   echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
   exit;
 }


 $user_query_insert="INSERT INTO user(UserType, Nickname, Email, Password) VALUES (?, ?, ?, ?)";
   $stmt3=$db->prepare($user_query_insert);

   $stmt3->bind_param('dssd', $user_type,$user_name ,$user_email ,$user_pw );
   $stmt3->execute();
   //여기까지가 값을 넣기



  /* $common_query_select="SELECT CommonID FROM common";
   $stmt2=$db->prepare($common_query_select);
   $stmt2->execute();
   $stmt2->store_result();
   $stmt2->bind_result($common_commonID);
   $num=0;
   while($id_row=$stmt2->fetch()){
   }
   $customer_query="INSERT INTO customer (CustomerID, Score, Post, common_CommonID ) VALUES (?, ?, ?, ?)";
   $stmt1=$db->prepare($customer_query);
   $stmt1->bind_param('ddsd', $null, $customerScore, $customerPost, $common_commonID);
   $stmt1->execute();
   Header("Location:./ver2_main.php");*/


//에러메세지 출력

?>
