<!-- <!Doctype html> -->
<?php 
    include_once("../Model/M_student.php");
    class C_Student{
        public function invoke(){
            if(isset($_GET['stid'])){
                $modelStudent = new Model_student();
                $student = $modelStudent->getStudentDetail($_GET['stid']);
                include_once("../View/StudentDetail.php");
            }                           
            else {
                $modelStudent = new Model_student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentList.php");
            }
        }
        public function updateStudent(){
            $modelStudent = new Model_student();
            if (isset($_GET['stid'])){
                if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['university'])){
                    $result = $modelStudent->updateStudent($_GET['stid'],$_POST['name'],$_POST['age'],$_POST['university']);
                    if($result){
                        // echo "Update successfully";
                        $studentList = $modelStudent->getAllStudent();
                        include_once("../View/UpdateStudent.php");
                    }
                    else{
                        echo "Update fail";
                    }
                }
                else{
                    $student = $modelStudent->getStudentDetail($_GET['stid']);
                    include_once("../View/UpdateStudent-form.php");
                }
            }
            else {
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/UpdateStudent.php");
            }            
        }
        public function addStudent(){
            $modelStudent = new Model_student();
            if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['university'])){
                $result = $modelStudent->addStudent($_POST['id'],$_POST['name'],$_POST['age'],$_POST['university']);
                if($result){
                    // echo "Add successfully";
                    $studentList = $modelStudent->getAllStudent();
                    include_once("../View/StudentList.php");
                }
                else{
                    echo "Add fail";
                }
            }
            else{
                include_once("../View/AddStudent.php");
            }
        }
        public function searchStudent(){
            $modelStudent = new Model_student();
            if(isset($_POST['value']) && isset($_POST['select'])){
                $studentList = $modelStudent->searchStudent($_POST['select'],$_POST['value']);
                include_once("../View/StudentList.php");
            }
            else{
                include_once("../View/SearchStudent.php");
            }
        }
        public function deleteStudent(){
            $modelStudent = new Model_student();
            if(isset($_GET['stid'])){
                $result = $modelStudent->deleteStudent($_GET['stid']);
                if($result){
                    // echo "Delete successfully";
                    $studentList = $modelStudent->getAllStudent();
                    include_once("../View/DeleteStudent.php");
                }
                else{
                    echo "Delete fail";
                }
            }
            else{
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/DeleteStudent.php");
            }
        }
    }
    $C_student = new C_Student();
    if(isset($_GET['action'])){
        if($_GET['action'] == 'update'){
            $C_student->updateStudent();
        }
        if($_GET['action'] == 'add'){
            $C_student->addStudent();
        }
        if($_GET['action'] == 'search'){
            $C_student->searchStudent();
        }
        if($_GET['action'] == 'delete'){
            $C_student->deleteStudent();
        }
    }
    else {
        $C_student->invoke();
    }
?>