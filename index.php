<?php
    session_start();
    if(isset($_SESSION['id'])){
        $login=TRUE;
    }
    else{
        $login=FALSE;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인페이지</title>
</head>
<body>
    <div style="width: 1080px; margin: 0 auto;">
        <div id="topbar" style="background-color: rgb(225, 225, 225); border: 2px solid black; height: 80px; display: flex; justify-content: space-between;">
            <div style="margin-top: 30px; margin-left: 50px;"><a href="index.html">스포츠 커뮤니티</a></div>
            <div style="margin-top: 30px; margin-right: 50px;">
                <a href="index.html" style="margin-left: 30px;">Home</a>
                <a href="" style="margin-left: 30px;">사이트맵</a>
                <?php
                    if($login){
                ?>
                <a href="" style="margin-left: 30px;">로그인</a>
                <?php
                    }else{
                ?>
                    <a href="" style="margin-left: 30px;">로그아웃</a>
                <?php
                    }
                ?>
            </div>
        </div>
        <div id="navbar" style="margin-top: 20px; border: 2px solid black; display: flex; justify-content: space-between; padding-left: 200px; padding-right: 200px; padding-top: 12px; padding-bottom: 12px;">
            <div class="dropdown" style="position: relative; display: inline-block;">
                <span class="dropbtn">축구</span>
                <div class="dropdown-content" style="display: none; position: absolute; z-index: 1; background-color: white; border: solid 1px black; width: 200px; height: 180px; padding: 15px;">
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">게시판</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">팀 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">선수 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">경기 일정</a>
                </div>
            </div>
            <div class="dropdown" style="position: relative; display: inline-block;">
                <span class="dropbtn">해외축구</span>
                <div class="dropdown-content" style="display: none; position: absolute; z-index: 1; background-color: white; border: solid 1px black; width: 200px; height: 180px; padding: 15px;">
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">게시판</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">팀 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">선수 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">경기 일정</a>
                </div>
            </div><div class="dropdown" style="position: relative; display: inline-block;">
                <span class="dropbtn">야구</span>
                <div class="dropdown-content" style="display: none; position: absolute; z-index: 1; background-color: white; border: solid 1px black; width: 200px; height: 180px; padding: 15px;">
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">게시판</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">팀 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">선수 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">경기 일정</a>
                </div>
            </div><div class="dropdown" style="position: relative; display: inline-block;">
                <span class="dropbtn">해외야구</span>
                <div class="dropdown-content" style="display: none; position: absolute; z-index: 1; background-color: white; border: solid 1px black; width: 200px; height: 180px; padding: 15px;">
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">게시판</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">팀 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">선수 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">경기 일정</a>
                </div>
            </div><div class="dropdown" style="position: relative; display: inline-block;">
                <span class="dropbtn">농구</span>
                <div class="dropdown-content" style="display: none; position: absolute; z-index: 1; background-color: white; border: solid 1px black; width: 200px; height: 180px; padding: 15px;">
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">게시판</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">팀 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">선수 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">경기 일정</a>
                </div>
            </div><div class="dropdown" style="position: relative; display: inline-block;">
                <span class="dropbtn">e스포츠</span>
                <div class="dropdown-content" style="display: none; position: absolute; z-index: 1; background-color: white; border: solid 1px black; width: 200px; height: 180px; padding: 15px;">
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">게시판</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">팀 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">선수 정보</a>
                    <a href="#" style="display: block; padding: 5px; margin-bottom: 12px;">경기 일정</a>
                </div>
            </div>
        </div>
        <div id="contents" style="display: flex; flex-wrap: wrap; margin-top: 20px;">
            <div style="border: 2px solid black; width: 520px; height: 256px; margin-right: 32px; margin-bottom: 20px;">
                <div style="margin-left: 35px; margin-right: 35px; display: flex; border-bottom: solid 5px rgb(228, 228, 228); width: 450px; height: 30px; padding-top: 15px;"><div style="margin-left: 25px; margin-right: 329px;">축구</div><div style="margin-right: 25px;"><a href="">More</a></div></div>
                <div style="margin-top: 15px; margin-left: 35px; margin-right: 35px; background-color: rgb(231, 231, 231); height: 160px;">게시글 리스트</div>
            </div>
            <div style="border: 2px solid black; width: 520px; height: 256px; margin-bottom: 20px;">
                <div style="margin-left: 35px; margin-right: 35px; display: flex; border-bottom: solid 5px rgb(228, 228, 228); width: 450px; height: 30px; padding-top: 15px;"><div style="margin-left: 25px; margin-right: 297.5px;">해외축구</div><div style="margin-right: 25px;"><a href="">More</a></div></div>
                <div style="margin-top: 15px; margin-left: 35px; margin-right: 35px; background-color: rgb(231, 231, 231); height: 160px;">게시글 리스트</div>
            </div>
            <div style="border: 2px solid black; width: 520px; height: 256px; margin-right: 32px; margin-bottom: 20px;">
                <div style="margin-left: 35px; margin-right: 35px; display: flex; border-bottom: solid 5px rgb(228, 228, 228); width: 450px; height: 30px; padding-top: 15px;"><div style="margin-left: 25px; margin-right: 329px;">야구</div><div style="margin-right: 25px;"><a href="">More</a></div></div>
                <div style="margin-top: 15px; margin-left: 35px; margin-right: 35px; background-color: rgb(231, 231, 231); height: 160px;">게시글 리스트</div>
            </div>
            <div style="border: 2px solid black; width: 520px; height: 256px; margin-bottom: 20px;">
                <div style="margin-left: 35px; margin-right: 35px; display: flex; border-bottom: solid 5px rgb(228, 228, 228); width: 450px; height: 30px; padding-top: 15px;"><div style="margin-left: 25px; margin-right: 297.5px;">해외야구</div><div style="margin-right: 25px;"><a href="">More</a></div></div>
                <div style="margin-top: 15px; margin-left: 35px; margin-right: 35px; background-color: rgb(231, 231, 231); height: 160px;">게시글 리스트</div>
            </div>
            <div style="border: 2px solid black; width: 520px; height: 256px; margin-right: 32px; margin-bottom: 20px;">
                <div style="margin-left: 35px; margin-right: 35px; display: flex; border-bottom: solid 5px rgb(228, 228, 228); width: 450px; height: 30px; padding-top: 15px;"><div style="margin-left: 25px; margin-right: 329px;">농구</div><div style="margin-right: 25px;"><a href="">More</a></div></div>
                <div style="margin-top: 15px; margin-left: 35px; margin-right: 35px; background-color: rgb(231, 231, 231); height: 160px;">게시글 리스트</div>
            </div>
            <div style="border: 2px solid black; width: 520px; height: 256px; margin-bottom: 20px;">
                <div style="margin-left: 35px; margin-right: 35px; display: flex; border-bottom: solid 5px rgb(228, 228, 228); width: 450px; height: 30px; padding-top: 15px;"><div style="margin-left: 25px; margin-right: 305px;">e스포츠</div><div style="margin-right: 25px;"><a href="">More</a></div></div>
                <div style="margin-top: 15px; margin-left: 35px; margin-right: 35px; background-color: rgb(231, 231, 231); height: 160px;">게시글 리스트</div>
            </div>
        </div>
    </div>
</body>
<style>
    .dropdown:hover .dropdown-content{
      display: block !important;
    }
</style>
</html>