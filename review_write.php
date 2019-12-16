<?php
  header('Content-Type: text/html; charset=utf-8');
  $host='39.115.75.246';
  $user='bobo';
  $password='opensw1';
  $dbname='test';
  $commonCafeAddress=$_POST['region'];
  $commonCafeName=$_POST['cafe'];
  $customerPost=$_POST['review'];
  $customerScore=$_POST['star']; //임의로 해둠
  $cafename_by_ownerID;
 //이부분 지금 php변수 받았어
  $name="myvar";
  $FK_userID=(int)$_COOKIE["myvar"];
  $db=new mysqli($host, $user, $password, $dbname);
  if(mysqli_connect_errno()){
    echo '<p>Error: Could not connect to database.<br/>
    Please try agin later.</p>';
    exit;
  }

  $owner_query="SELECT CafeName, OwnerID FROM owner";
  $stmt2=$db->prepare($owner_query);
  $stmt2->execute();
  $stmt2->store_result();
  $stmt2->bind_result($owner_CafeName, $owner_OwnerID);
  while($stmt2->fetch()){
    if(strcmp($owner_CafeName, $commonCafeName)==0){
      $cafename_by_ownerID=$owner_OwnerID;
    }
  }

  $customer_query="INSERT INTO customer (CustomerID, Score, Post, owner_OwnerID ) VALUES (?, ?, ?, ?)";
  $stmt1=$db->prepare($customer_query);
  $stmt1->bind_param('ddsd', $null, $customerScore, $customerPost, $cafename_by_ownerID);
  $stmt1->execute();
  Header("Location:./ver2_main.php");
?>
