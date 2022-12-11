<?php
    include_once("E_student.php");
    $link = mysqli_connect("localhost","root","") or die ("Khong the ket noi den CSDL MySQL");
    mysqli_select_db($link,"DULIEU_2");
    class Model_student{
        public function __construct() {}
        public function getAllStudent() {
            $sql="SELECT * FROM Sinhvien";
            $result=mysqli_query($GLOBALS["link"],$sql);
            $i = 0;
            $studentList = array();
            while($row=mysqli_fetch_array($result)){
                while($i != $row['id']) $i++;
                $studentList[$i++] = new Entity_student($row['id'],$row['name'],$row['age'],$row['university']);
            }
            return $studentList;
        }
        public function getStudentDetail($id){
            $allStudent = $this->getAllStudent();
            return $allStudent[$id];
            // $sql="SELECT * FROM Sinhvien WHERE id = $id";
            // $result=mysqli_query($GLOBALS["link"],$sql);
            // $row=mysqli_fetch_array($result);
            // $student = new Entity_student($row['id'],$row['name'],$row['age'],$row['university']);
            // return $student;
        }
        public function updateStudent($id, $name, $age, $university){
            $sql="UPDATE Sinhvien SET name = '$name', age = '$age', university = '$university' WHERE id = $id";
            $result=mysqli_query($GLOBALS["link"],$sql);
            return $result;
        }
        public function addStudent($id, $name, $age, $university){
            $sql="SELECT * FROM Sinhvien WHERE id = $id";
            $result=mysqli_query($GLOBALS["link"],$sql);
            if(mysqli_num_rows($result) > 0){
                return false;
            }
            else{
                $sql="INSERT INTO Sinhvien VALUES ($id,'$name',$age,'$university')";
                $result=mysqli_query($GLOBALS["link"],$sql);
                return $result;
            }
        }
        public function searchStudent($select, $value){
            $sql="SELECT * FROM Sinhvien WHERE $select LIKE '%$value%'";
            $result=mysqli_query($GLOBALS["link"],$sql);
            $i = 0;
            $studentList = array();
            while($row=mysqli_fetch_array($result)){
                $student = new Entity_student($row['id'],$row['name'],$row['age'],$row['university']);
                $studentList[$i] = $student;
                $i++;
            }
            return $studentList;
        }
        public function deleteStudent($id){
            $sql="DELETE FROM Sinhvien WHERE id = $id";
            $result=mysqli_query($GLOBALS["link"],$sql);
            return $result;
        }
    }
?>