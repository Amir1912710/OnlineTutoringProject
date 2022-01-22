<?php
session_start();
?>

<?php 
if (filter_input(INPUT_POST, 'addtocart') != null) {

   $servername="localhost";
   $username="root";
   $password="";
   $DB="webproject";

   $conn=mysqli_connect($servername,$username,$password,$DB);

   
   $courseId= filter_input(INPUT_POST, 'courseId') ;
   $CourseName= filter_input(INPUT_POST, 'courseName') ;
   $CourseType= filter_input(INPUT_POST, 'courseType') ;
   $CoursePrice= filter_input(INPUT_POST, 'coursePrice') ;
   $CourseImage= filter_input(INPUT_POST, 'courseImage') ;

   $sql= "insert into mycart (CourseID, LearnerID, CourseName , CourseType , CoursePrice , Image) values('".$courseId."','".$_SESSION["LearnerID"]."','".$CourseName."','".$CourseType."','".$CoursePrice."','". $CourseImage."')";
   $result= $conn->query($sql);


}

if (filter_input(INPUT_POST, 'addtomycourse') != null) {

   $servername="localhost";
   $username="root";
   $password="";
   $DB="webproject";

   $conn=mysqli_connect($servername,$username,$password,$DB);

   $cartId= filter_input(INPUT_POST, 'cartId') ;
   $courseId= filter_input(INPUT_POST, 'courseId') ;
   $CourseName= filter_input(INPUT_POST, 'courseName') ;
   $CourseType= filter_input(INPUT_POST, 'courseType') ;
   $CoursePrice= filter_input(INPUT_POST, 'coursePrice') ;
   $CourseImage= filter_input(INPUT_POST, 'courseImage') ;

   $sql= "insert into mycourse (CourseID, LearnerID, CourseName , CourseType , CoursePrice , Image) values('".$courseId."','".$_SESSION["LearnerID"]."','".$CourseName."','".$CourseType."','".$CoursePrice."','". $CourseImage."')";
   $result= $conn->query($sql);

   $sql2= "DELETE FROM mycart WHERE CartID = $cartId";
   $result2= $conn->query($sql2);


}

if (filter_input(INPUT_POST, 'getrating') != null) {

   echo "Done";

   $servername="localhost";
   $username="root";
   $password="";
   $DB="webproject";

   $conn=mysqli_connect($servername,$username,$password,$DB);

   echo $courseId= filter_input(INPUT_POST, 'courseId') ;

   


}

if(filter_input(INPUT_POST, 'getmyCourseDetails') != null)
{
    $courseId= filter_input(INPUT_POST, 'courseId') ;

    $servername="localhost";
    $username="root";
    $password="";
    $DB="webproject";

    $conn=mysqli_connect($servername,$username,$password,$DB);

     $sql= "SELECT * FROM courses WHERE CourseID = $courseId";
     $result= $conn->query($sql);
     
     while ($data = $result->fetch_assoc())
      {
        $courseData[] = $data;
     }
     echo json_encode($courseData, JSON_FORCE_OBJECT);

     $conn->close();


}

if(filter_input(INPUT_POST, 'getCourseDetails') != null)
{
    $courseId= filter_input(INPUT_POST, 'courseId') ;

    $servername="localhost";
    $username="root";
    $password="";
    $DB="webproject";

    $conn=mysqli_connect($servername,$username,$password,$DB);

     $sql= "SELECT * FROM courses WHERE CourseID = $courseId";
     $result= $conn->query($sql);
     
     while ($data = $result->fetch_assoc())
      {
        $courseData[] = $data;
     }
     echo json_encode($courseData, JSON_FORCE_OBJECT);

     $conn->close();


}

if(filter_input(INPUT_POST, 'getUserDetails') != null)
{
    $Id= filter_input(INPUT_POST, 'Id') ;

    $servername="localhost";
    $username="root";
    $password="";
    $DB="webproject";

    $conn=mysqli_connect($servername,$username,$password,$DB);

     $sql= "SELECT * FROM adminregistration WHERE ID = $Id";
     $result= $conn->query($sql);
     
     while ($data = $result->fetch_assoc())
      {
        $userData[] = $data;
     }
     echo json_encode($userData, JSON_FORCE_OBJECT);

     $conn->close();

}

if (filter_input(INPUT_POST, 'deleteUserDetails') != null) {
    $Id= filter_input(INPUT_POST, 'Id') ;

    $servername="localhost";
    $username="root";
    $password="";
    $DB="webproject";

    $conn=mysqli_connect($servername,$username,$password,$DB);
    
    $sql= "DELETE FROM adminregistration WHERE ID = $Id";
    $result= $conn->query($sql);
    
    //$conn->close();
 }

 if (filter_input(INPUT_POST, 'deletecourseDetails') != null) {
    $CourseId= filter_input(INPUT_POST, 'courseId') ;

    $servername="localhost";
    $username="root";
    $password="";
    $DB="webproject";

    $conn=mysqli_connect($servername,$username,$password,$DB);
    
    $sql= "DELETE FROM courses WHERE CourseID = $CourseId";
    $result= $conn->query($sql);
    
    //$conn->close();
 }

 if (filter_input(INPUT_POST, 'approvecourseDetails') != null) {
    $RCourseId= filter_input(INPUT_POST, 'RcourseId') ;
    $RCourseName= filter_input(INPUT_POST, 'RcourseName') ;
    $RCourseType= filter_input(INPUT_POST, 'RcourseType') ;
    $RCoursePrice= filter_input(INPUT_POST, 'RcoursePrice') ;
    $RCourseImage= filter_input(INPUT_POST, 'RcourseImage') ;


    $servername="localhost";
    $username="root";
    $password="";
    $DB="webproject";

    $conn=mysqli_connect($servername,$username,$password,$DB);
    
    
    echo $sql= "insert into courses (CourseName , CourseType , CoursePrice , Image) values('".$RCourseName."','".$RCourseType."','".$RCoursePrice."','". $RCourseImage."')";
    $result= $conn->query($sql);

    $sql3= "DELETE FROM requestedcourse WHERE CourseID = $RCourseId";
    $result3= $conn->query($sql3);
    
    //$conn->close();
 }

 if (filter_input(INPUT_POST, 'deleteRcourseDetails') != null) {
    $CourseId= filter_input(INPUT_POST, 'courseId') ;

    $servername="localhost";
    $username="root";
    $password="";
    $DB="webproject";

    $conn=mysqli_connect($servername,$username,$password,$DB);
    
    $sql= "DELETE FROM requestedcourse WHERE CourseID = $CourseId";
    $result= $conn->query($sql);
    
    //$conn->close();
 }

 ?>