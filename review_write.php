<?php
  header('Content-Type: text/html; charset=utf-8');
  $host='39.115.75.246';
  $user='ye1';
  $password='opensw10';
  $dbname='test';
  $commonCafeAddress=(string)$_POST['region'];
  $commonCafeName=(string)$_POST['cafe'];
  $customerPost=(string)$_POST['review'];
  $customerScore=10; //임의로 해둠
  $null=NULL;
 //이부분 지금 php변수 받았어
  $name="myvar";
  $FK_userID=(int)$_COOKIE["myvar"];

  $db=new mysqli($host, $user, $password, $dbname);
  if(mysqli_connect_errno()){
    echo '<p>Error: Could not connect to database.<br/>
    Please try agin later.</p>';
    exit;
  }

  $common_query_insert="INSERT INTO common (CommonID,CafeAddress, CafeName, user_UserID ) VALUES (?, ?, ?, ?)";
  $stmt3=$db->prepare($common_query_insert);
  $stmt3->bind_param('dssd', $null, $commonCafeAddress, $commonCafeName, $FK_userID);
  $stmt3->execute();

  $common_query_select="SELECT CommonID FROM common";
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

  Header("Location:./ver2_main.php");

?>
