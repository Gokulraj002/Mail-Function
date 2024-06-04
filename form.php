
<?php  

include 'dbcon.php';

if(isset($_POST['submit'])){
    $name = $_POST['username'];
    $mail=$_POST['mail'];

    $pass =$_POST['pass'];
    $cpass=$_POST['cpass'];

    $send = new dbcon();
    $send->reg_insert( $name,$mail,$pass,$cpass);
}

if(isset($_POST['sub'])){
    $name = $_POST['name'];
    $pass =$_POST['pass'];
    $obj = new dbcon();
    $obj->reg_Sel($name,$pass);
}


?>