<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "project_php";

$connection = new mysqli($hostname,$username,$password,$database);


function Insert(){
    // echo 123;
    global $connection;
    if(isset($_POST['btn-submit'])){
        $name = $_POST['name'];
        $sex = $_POST['gender'];
        $php = $_POST['php'];
        $java = $_POST['java'];
        $python = $_POST['python'];

        // echo $name.$sex.$php.$java.$python;
        if(!empty($name)&& !empty($sex)&& !empty($php)&& !empty($java)&& !empty($python)){
            $total = ($php + $java + $python);
            $avg = ($total / 3);
            // echo $total.$avg;

            $grade = '';
            
            /* 
                avg  < 50 = F
                avg  <= 60 = E
                avg  <= 70 = D
                avg  <= 80 = C
                avg  <= 90 = B
                avg   = A
            */

            if( $avg < 50){
                $grade = 'F';
            }elseif($avg <= 60){
                $grade = 'E';
            }elseif($avg <= 70){
                $grade = 'D';
            }elseif($avg <= 80){
                $grade = 'C';
            }elseif($avg <= 90){
                $grade = 'B';
            }else{
                $grade = 'A';
            }

            // echo $grade;

            $sql = " INSERT INTO `student_data`(`name`, `sex`, `php`, `java`, `python`, `total`, `average`, `grade`) VALUES ('$name','$sex','$php','$java','$python','$total','$avg','$grade')";

            $result = $connection->query($sql);
            if($result){
                echo '
                  <script>
                  $(document).ready(function(){
                            
                    swal("Good job!", "You clicked the button!", "success");
                });
                  </script>
    
    
                ';
            }
            else{
                echo '
                <script>
                    $(document).ready(function(){
                        swal("Error", "Data Can not Insert", "error")
                    });
                </script>
            ';
            }
        }
    }
}
Insert();

function GetData(){
    global $connection;
    $sql = " SELECT * FROM `student_data`";
    $result = $connection->query($sql);
    while($row = mysqli_fetch_assoc($result)){
        echo '
            <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['name'].'</td>
                <td>'.$row['sex'].'</td>
                <td>'.$row['php'].'</td>
                <td>'.$row['java'].'</td>
                <td>'.$row['python'].'</td>
                <td>'.$row['total'].'</td>
                <td>'.(intval($row['average']*100)/100).'</td>
                <td>'.$row['grade'].'</td>
                <td>
                    <button class="btn btn-warning " id="btn-open-update" data-bs-toggle="modal" data-bs-target="#exampleModal">កែទិន្នន័យ</button>
                    <button class="btn btn-danger"  data-bs-toggle="modal" id="btn_open_delete" data-bs-target="#delete">លុប</button>
                </td>
            </tr>
        ';
    }
    
}

function Update(){
    // echo 123;
    global $connection;
    if(isset($_POST['update'])){

        $id     = $_POST['id'];
        $name   = $_POST['name'];
        $sex    = $_POST['gender'];
        $php    = $_POST['php'];
        $java   = $_POST['java'];
        $python = $_POST['python'];
        // echo $id;

        // echo $name.$sex.$php.$java.$python;
        if(!empty($name)&& !empty($sex)&& !empty($php)&& !empty($java)&& !empty($python)){
            $total = ($php + $java + $python);
            $avg = ($total / 3);
            // echo $total.$avg;

            $grade = '';
            
            /* 
                avg  < 50 = F
                avg  <= 60 = E
                avg  <= 70 = D
                avg  <= 80 = C
                avg  <= 90 = B
                avg   = A
            */

            if( $avg < 50){
                $grade = 'F';
            }elseif($avg <= 60){
                $grade = 'E';
            }elseif($avg <= 70){
                $grade = 'D';
            }elseif($avg <= 80){
                $grade = 'C';
            }elseif($avg <= 90){
                $grade = 'B';
            }else{
                $grade = 'A';
            }

            // echo $grade;

            $sql = "UPDATE `student_data` SET `name`='$name',`sex`='$sex',`php`='$php',`java`='$java',`python`='$python',`total`='$total',`average`='$avg',`grade`='$grade' WHERE `id`='$id'";

            $result = $connection->query($sql);
            if($result){
                echo '
                  <script>
                    $(document).ready(function(){        
                        swal("Good job!", "You clicked the button!", "success");
                    });
                  </script>
                ';
            }
        }
    }
}
Update();
function Delete(){
    global $connection;
    if(isset($_POST['btn_delete'])){
        // echo 123;
        $del_id = $_POST['del_id'];

        $sql = "DELETE FROM `student_data` WHERE `id` = '$del_id'";

        $result = $connection->query($sql);
        if($result){
            echo '
            <script>
                $(document).ready(function(){
                    
                swal("Good job!", "You clicked the button!", "success");
                });
            </script>
          ';
        } else{
            echo '
            <script>
                $(document).ready(function(){
                    swal("Error", "Data Can not Insert", "error")
                });
            </script>
        ';
        }
       
    }
}
Delete();