<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Danh sach sinh vien:</h2>
    <?php
        $i = 1;
        foreach($studentList as $student){
            echo "<p>".$i++.". ".$student->name." <a href='?action=delete&stid=".$student->id."'>X</a></p>";
        }
    ?>
    <br>
    <p><a href="../index.php">Home page</a></p>
</body>
</html>