<!DOCTYPE html>

<html lang="en">

<head>
    <META NAME="GENERATOR" Content="Microsoft Visual Studio">
    <meta name="description" content="This is an HTML5 example">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
    <title> 커픽(CUPPICK) </title>
    <link rel="stylesheet" href="main_css.css">
</head>


<body>
   <div class="wapper">
        <header>
            <a href="ver2_main.php"><img src="logo.jpg" width="100px" height="100px"></a>
            <p>What's your Cuppick?</p>
        </header>

     <?php
     $host='39.115.75.246';
     $user='bobo';
     $password='opensw1';
     $dbname='test';
     $wherecondition = "where";
     $cafeType=isset($_POST['cafetype']) ? $_POST['cafetype'] : 'independent';
     $cafePurpose=isset($_POST['purpose']) ? $_POST['purpose'] : 'chat';
     $cafePlug=isset($_POST['plug']) ? $_POST['plug'] : 0;
     $cafeToilet=isset($_POST['toilet']) ? $_POST['toilet'] : 0;
     $cafeParking=isset($_POST['parking']) ? $_POST['parking'] : 0;
     $cafeWiFi=isset($_POST['wifi']) ? $_POST['wifi'] : 0;
     $db=new mysqli($host, $user, $password, $dbname);
     $cafeName='';
     if(mysqli_connect_errno()){
       echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
       exit;
     }
    $cafe_query="SELECT CafeType, cafename, Purpose, Plug, Toilet, Parking, WiFi FROM owner
     where  cafetype = ? and purpose = ? and plug = ? and toilet = ? and parking = ? and wifi = ?";
     $stmt=$db->prepare($cafe_query);
     $stmt->bind_param('ssdddd',$cafeType,$cafePurpose, $cafePlug, $cafeToilet,$cafeParking, $cafeWiFi);
     $stmt->execute();
     $stmt->store_result();
    $stmt->bind_result($cafeType,$cafeName,$cafePurpose, $cafePlug, $cafeToilet,$cafeParking, $cafeWiFi);
  ?>


	<section>
        <table id="user-table">
            <thead>
                <tr>
		<th>순위</th>
		<th>카페명</th>
		<th>별점</th>
		<th></th>
                </tr>
            </thead>

            <tbody>


    <?php  while($stmt->fetch()){  ?>
                <tr>
		<td>2</td>
		<td><?php echo $cafeName; ?></td>
	<td><?php echo $cafeType; ?></td>

		<td><button type="button" onclick="location.href='자세히보기2.html' ">자세히보기</button></td>
                </tr>
                <tr>
<?php    }  ?>





            </tbody>
        </table>
</section>






    <!--사이드바-->
        <aside>
			<p>유저아이디 들어가는 자리</p>
            <form action="main.html" method="post">
                <button>로그아웃</button>
            </form>
        </aside>

            <script ="text/javascript">
     function logIn() {
        var memberRegister = window.open('logIn.html', '', 'width=800, height=600');
      }
     function register() {
        var memberRegister = window.open('memberRegister.html', '', 'width=800, height=600');
      }
            </script>


        </aside>

        <!--풋터-->

        <footer>footer</footer>

 </div>

</body>

</html>
