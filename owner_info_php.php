<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php
$host='39.115.75.246';
$user='bobo';
$password='opensw1';
$dbname='test';


$owner_cafename=$_POST['cafename'];
$owner_address=$_POST['cafeaddress'];
//변수지정
$owner_cafetype=$_POST['cafetype'];
$owner_purpose=$_POST['purpose'];

$owner_plug=$_POST['plug'];
$owner_parking=$_POST['parking'];
$owner_wifi=$_POST['wifi'];
$owner_toilet=$_POST['toilet'];

$db=new mysqli($host, $user, $password, $dbname);
 if(mysqli_connect_errno()){
   echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
   exit;
 }

echo $owner_cafetype;
echo $owner_purpose ;

echo $owner_plug;
echo $owner_parking;
echo $owner_toilet;
echo $owner_wifi ;
$userid = 13;  //session=cookie
// if select count(*) from owner  where userid = $user_userid;
  //   update owner set cafetype = $owner_cafetype , purpose = $
//$user_query_insert="INSERT INTO owner (ownerid, CafeType, Purpose, Plug, Parking, Toilet, WiFi, common_CommonID) VALUES (?, ?, ?, ?, ? , ?, 1)";
$user_count="select count(*) from owner where ownerid = ?";
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
  echo "insert";


 $user_query_insert="INSERT INTO owner (ownerid,CafeType, cafename, cafeaddress, Purpose, Plug, Parking, Toilet, WiFi, user_userid)  VALUES (?,?,?, ?, ?, ?, ? , ?, ?,?)";
   $stmt3=$db->prepare($user_query_insert);
   $stmt3->bind_param('dssssddddd',$userid,$owner_cafetype,$owner_cafename,$owner_address,$owner_purpose,$owner_plug,$owner_parking,$owner_toilet,$owner_wifi,$userid);
   $stmt3->execute();
 } else {
echo "update";

 }


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
