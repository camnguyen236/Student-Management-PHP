<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/C_student.php?action=add" method="post">
        <table>
            <tr>
                <td>Id:</td>
                <td><input type="text" name="id" value=""></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value=""></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age" value=""></td>
            </tr>
            <tr>
                <td>University:</td>
                <td><input type="text" name="university" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="add" value="Add"></td>
            </tr>
        </table>
    </form>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>