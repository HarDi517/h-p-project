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
            <a href="ver2_main.html"><img src="logo.jpg" width="100px" height="100px"></a>
            <p>What's your Cuppick?</p>
        </header>

     <?php
     $host='39.115.75.246';
     $user='bobo';
     $password='opensw1';
     $dbname='test';

	   $type1=isset($_POST['type1']) ? 1 : 0;

     $purpose1=isset($_POST['purpose1']) ? "스터디" : "수다떨기";

     $service1=isset($_POST['service1']) ? 1 : 0;
     $service2=isset($_POST['service2']) ? 1 : 0;
     $service3=isset($_POST['service3']) ? 1 : 0;
     $service4=isset($_POST['service4']) ? 1 : 0;



     $db=new mysqli($host, $user, $password, $dbname);
     if(mysqli_connect_errno()){
       echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
       exit;
     }
     $caffe_query="SELECT CafeType, Purpose, Plug, Toilet, Parking, WiFi FROM owner";
     $stmt=$db->prepare($cafe_query);
     $stmt->execute();
     $stmt->store_result();
     $stmt->bind_result($cafeType, $cafePurpose, $cafePlug, $cafeToilet,$cafeParking, $cafeWiFi);
     $check=0;
     $method='"post"';

     $common_query_select="SELECT CommonID FROM common";
     $stmt2=$db->prepare($common_query_select);
     $stmt2->execute();
     $stmt2->store_result();
     $stmt2->bind_result($common_commonID);


     while($cafe_row=$stmt2->fetch()){
       $answercafe_name="SELECT CafeName from common WHERE ($cafeType==$type1) AND ($cafePurpose==$purpose) AND ($cafePlug==$service1)
       AND ($cafeToilet==$service2) AND ($cafeParking==$service3) AND ($cafeWiFI==$service4)";
       echo '<tr><td>' . $cafe_row[CafeName] .

       if( $cafeType==$radio1  && $cafePurpose == ) {
         $check=1;
         $name="myvar";
         $value=$userUserID;
         setcookie($name,$value);
         $name="myvar2";
         $value=$id;
         setcookie($name,$value);
         Header("Location:./ver2_main.php");
         exit;
    }
  }
  if($check==0) {
    Header("Location:./login_ye1.php");
  }
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
                <tr>
                    <td>1</td>
                    <td>스타벅스 (신촌점)</td>
                    <td>4.5/5</td>
                    <td><button type="button" onclick="location.href='자세히보기2.html' ">자세히보기</button></td>

                </tr>
                <tr>
		<td>2</td>
		<td>이화다방</td>
		<td>4.3/5</td>
		<td><button type="button" onclick="location.href='자세히보기2.html' ">자세히보기</button></td>
                </tr>
                <tr>
		<td>3</td>
		<td>할리스</td>
		<td>3.9/5</td>
		<td><button type="button" onclick="location.href='자세히보기2.html' ">자세히보기</button></td>
                </tr>
                <tr>
		<td>4</td>
		<td>빽다방</td>
		<td>4.1/5</td>
		<td><button type="button" onclick="location.href='자세히보기2.html' ">자세히보기</button></td>
                </tr>

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
