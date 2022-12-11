<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/C_student.php?action=search" method="post">
        <table>
            <tr>
                <td><label for="select">Search for:</label></td>
                <td><select name="select" id="select">
                    <option value="id">Id</option>
                    <option value="name">Name</option>
                    <option value="age">Age</option>
                    <option value="university">University</option>
                </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="value" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="search" value="Search"></td>
            </tr>
        </table>
    </form>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>