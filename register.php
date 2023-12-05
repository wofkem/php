<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
</head>
<body>
<br><h2><center>회원등록 화면 </center></h2><hr>
    <form method="post">
        <center>
            <table border=0 bordercolor="blue" width=720 cellspacing=1 cellpadding=5>
                <tr>
                    <td width="450" align=right>아이디 : </td>
                    <td width="330">
                        <input type="text" size=10 maxlength=10 name="id">
                    </td>
                    <td width=200 align=right></td>
                    <td width=300>
                    </td>
                </tr>
                <tr>
                    <td align=right>비밀번호 : </td>
                    <td>
                        <input type="password" size=10 maxlength=10 name="pw1">
                    </td>
                    <td align=right>비밀번호 확인 : </td>
                    <td>
                        <input type="password" size=10 maxlength=10 name="pw2">
                    </td>
                </tr>
                <tr>
                    <td align=right>성별 : </td>
                    <td>
                        <input type="radio" name="sex" value="남자" checked>남
                        <input type="radio" name="sex" value="여자">여
                    </td>
                    <td align=right></td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td align=right>이메일 : </td>
                    <td colspan=3>
                        <input type="text" size=64 name="addr">
                    </td>
                </tr>
                <tr>
                    <td align=right></td>
                    <td colspan=3>
                        
                    </td>
                </tr>
            </table><br>
            <table border=0 width=800>
                <tr>
                    <td align=center>
                        <input type="submit" value=" 회원 등록 ">     
                        <input type="reset" value=" 다시 작성 ">
                        <a href="">HOME</a>
                    </td>
                </tr>
            </table>
            <center>
                <input type="hidden" name="thema" value="회원등록 서식">
            </center>
        </center>
    </form>s
</body>
</html>