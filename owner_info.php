<!DOCTYPE html>
<html>
<body>

<h2><strong>view / modify owner information </h2>

<form action="owner_info_php.php" method="post">
<p>
새로운 카페 이름
 <input type="text" name="cafename" >
<p>
새로운 카페 주소
<input type="text" name="cafeaddress">
  <p>
[카페 타입]<br>
  <input type="radio" name="cafetype" value="franchise"> 프렌차이즈 
  <input type="radio" name="cafetype" value="independent"> 개인카페 <br>
<p>
  [카페 목적] <br>
  <input type="radio" name="purpose" value="study">스터디
 
  <input type="radio" name="purpose" value="chat"> 수다떨기
  <br><br>
  <p>
[바뀐 카페기능]<br>
  <콘센트><br>
  <input type="radio" name="plug" value="1"> 있음 
  <input type="radio" name="plug" value="0"> 없음 <br>
  <p>
  <주차가능><br>
  <input type="radio" name="parking" value="1"> 가능 
  <input type="radio" name="parking" value="0"> 불가능 <br>
  <p>
  <와이파이><br>
  <input type="radio" name="wifi" value="1"> 있음 
  <input type="radio" name="wifi" value="0"> 없음 <br>
  <p>
  <카페 내부 화장실> <br>
  <input type="radio" name="toilet" value="1"> 있음
  <input type="radio" name="toilet" value="0"> 없음 <br>
 <input type="submit" value="modify">
</form>
</body>
</html>
