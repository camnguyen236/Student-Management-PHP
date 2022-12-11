<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/C_student.php?action=update&stid=<?php echo $student->id; ?>" method="post">
        <table>
            <tr>
                <td>Id:</td>
                <td><input type="text" name="id" value="<?php echo $student->id; ?>" readonly></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $student->name; ?>"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="text" name="age" value="<?php echo $student->age; ?>"></td>
            </tr>
            <tr>
                <td>University:</td>
                <td><input type="text" name="university" value="<?php echo $student->university; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <br>
    <p><a href="javascript:history.back()">Back</a></p>
</body>
</html>