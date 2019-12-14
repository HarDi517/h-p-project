<head>
    <meta charset="utf-8">
    <META NAME="GENERATOR" Content="Microsoft Visual Studio">
    <meta name="description" content="This is an HTML5 example">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
    <title> 커픽(CUPPICK) </title>
    <link rel="stylesheet" href="main_css.css">
</head>
<body>
    <div class="wapper">
        <!--헤더시작-->
        <header>
            <a href="ver2_main.php"><img src="logo.jpg" width="100px" height="100px"></a>
            <p>What's your Cuppick?</p>
        </header>
        <!--콘텐츠부분-->
        <section>
            <article>
                <form action="aftersearch2.html" method="get">
	<p>지역 :
	<select name="region">
    	<option value="">지역선택</option>
	<optgroup label="서울특별시">
    	<optgroup label="서대문구">서대문구
	<option value="Daehyeon-dong">대현동</option>
    	<option value="Shinchon-dong">신촌동</option>
   	 <option value="Ahyeon-dong">아현동</option>
    	
	</optgroup>
	</optgroup>
    	</select>
                    <p><b>원하시는 조건들을 선택해주세요!</b></p>
                    <input type="checkbox" name="type" value="Franchise"> 프렌차이즈
                    <input type="checkbox" name="type" value="Individual"> 개인카페
                    <p>----------------------------------------</p>
                    <input type="checkbox" name="type" value="Study">스터디
                    <input type="checkbox" name="type" value="Chatter"> 수다떨기
                    <p>-----------------------------------------</p>
                    <input type="checkbox" name="type" value="Concent">콘센트
                    <input type="checkbox" name="type" value="Toilet">카페 내부에 화장실
                    <p></p>
                    <input type="checkbox" name="type" value="Light">밝은조명
                    <input type="checkbox" name="type" value="Parking">주차장
                    <input type="checkbox" name="type" value="Wifi">무료 와이파이
                     <p><button>검색</button></p>
                </form>
            </article>
        </section>
        <!--사이드바-->
        <aside><p>
	안녕하세요! [
	<?php 
		$userEmail=$_COOKIE["myvar2"];
		echo $userEmail;
	?> ] 님</p>
            <form action="main.php" method="post">
                <button>로그아웃</button>
            </form>
        <div class="wapper">
	<article>
	<form action="review_write.php" method="post">
	<p><b>[리뷰작성하기]</b></br>
	<p>지역 :
	<select name="region">
    	<option value="">지역선택</option>
	<optgroup label="서울특별시">
    	<optgroup label="서대문구">서대문구
	<option value="Daehyeon-dong">대현동</option>
    	<option value="Shinchon-dong">신촌동</option>
   	 <option value="Ahyeon-dong">아현동</option>
    	
	</optgroup>
	</optgroup>
    	</select>
	<p>카페명:
    	<select name="cafe">
  	  <option value="">카페명</option>
   	 <option value="Starbucks">스타벅스</option>
   	 <option value="Hollys">할리스</option>
    	<option value="Ewhadabang">이화다방</option>
    	<option value="Baekdabang">빽다방</option>
  	  
  	  </select>
	<p>직접입력(기타 카페): <input type="text" name="cafe_name"
    size="20" value="카페명을 입력해주세요."></p>
	<p>별점:
  	 <select name="star">
    	<option value="">별점</option>
    	<option value="1">★</option>
   	 <option value="2">★★</option>
    	<option value="3">★★★</option>
    	<option value="4">★★★★</option>
    	<option value="5">★★★★★</option>
    	</select><p>

  리뷰작성:
  <p><input name="review" rows="8" cols="30"></p>
  <p><input type="submit" value="리뷰작성하기"></p>
</form>
</article>
        </div>
        </aside>
        <!--풋터-->
        <footer>   </footer>
    </div>
</body>
</html>
