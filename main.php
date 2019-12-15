<head>
    <META NAME="GENERATOR" Content="Microsoft Visual Studio">
    <meta name="description" content="This is an HTML5 example">
    <meta name="keywords" content="HTML5, CSS3, JavaScript">
<meta charset="utf-8">

    <title> 커픽(CUPPICK) </title>
    <link rel="stylesheet" href="main_css.css">


</head>

<body>
    <div class="wapper">

        <!--헤더시작-->
        <header>
            <a href="main.php"><img src="logo.jpg" width="100px" height="100px"></a>
            <p>What's your Cuppick?</p>
        </header>
       
        <!--콘텐츠부분-->
        <section>
           
            <article>
                 <form action="aftersearch.html"  method="post">
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
        <aside>
             <form action="login_ye1.php" method="post">
                <button>로그인</button>
            </form>
                <form action="new_signup.php" method="post">
				<button>회원가입</button>
	</form>
            
	
   

        </aside>
        <!--풋터-->
        <footer>   </footer>
    </div>
</body>
</html>
