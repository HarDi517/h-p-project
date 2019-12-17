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


     $cafeName=$_COOKIE["myvar3"];
     $OwnerID=$_COOKIE["myvar4"];
     


     $cafeScore='';
     $cafePost='';
     $cafeOwnerID='';

     $db=new mysqli($host, $user, $password, $dbname);

     if(mysqli_connect_errno()){
       echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
       exit;
     }

    $select_review_query="SELECT Score, Post FROM customer WHERE owner_OwnerID =  $OwnerID";
     $stmt6=$db->prepare($select_review_query);

     $stmt6->execute();
     $stmt6->store_result();
     $stmt6->bind_result($cafeScore,$cafePost);
  ?>


<section>
<article>
 <h1><?php echo $cafeName; ?></h1>

 <table id="user-table2">
            <thead>

                <tr>

		<th></th>
		<th>사용자들의 리뷰</th>
		<th>별점(5점만점)</th>
                </tr>
            </thead>

            <tbody>

              <?php
              $sum=0;
              $count=0;
              $star=0;

               while($stmt6->fetch()){ ?>

                <tr>
                  	<?php  $count=$count+1; ?>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $cafePost; ?></td>
	                  <td><?php echo $cafeScore; ?></td>
                    <?php $sum=$sum+$cafeScore; ?>
                </tr>
                <?php    }  ?>
                <?php  $star=$sum/$count;?>
                <?php $name6="myvar6";
       	             $value6=$star;
        	            setcookie($name6,$value6); ?>
                      <?php echo $star; ?>

            </tbody>
        </table>

</article>
</section>







 <!--사이드바-->
        <aside>
	안녕하세요! [
	<?php
		$userEmail=$_COOKIE["myvar2"];
		echo $userEmail;
	?> ] 님</p>

            <form action="main.php" method="post">
                <button>로그아웃</button>
            </form>
	<form action="customer_info.php" method="post">
                <button>회원정보수정</button>
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



        <footer>footer</footer>

</div>


</body>

</html>
