<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
</head>
<body>

    <form action="insert_data.php" method="post">
    <!-- method 의 defalut 값은 get  -->

        아이디 : <input type="text" name="id"><br>
        이름 : <input type="text" name="name"><br>
        비밀번호 : <input type="password" name="pass"><br>
        전화번호 : <input type="text" name="phone"><br>
        국적 : <input type="text" name="nati"><br>
        <input type="submit" value="제출">

        <!-- form 안에 있는 submit type 버튼은 form 의 action 경로로 이동시킨다.-->
    </form>

    <script>
        

    </script>    
</body>
</html>