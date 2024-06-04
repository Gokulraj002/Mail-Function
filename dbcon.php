<?php 
class dbcon{
    public $localhost='localhost';
    public $username ='root';
    public $password ='';
    public $dbname ='revice';
    public $conn;
    public function __construct(){
        $this->conn= new mysqli($this->localhost,$this->username,$this->password,$this->dbname);

        if ($this->conn->connect_error) {
            echo 'Failed to connect to MySQL: '.$this->conn->connect_error ;
        }
        else{
        }
    }

    public function createDatabase(){
        $sql = "CREATE DATABASE IF NOT EXISTS revice";
        if ($this->conn->query($sql) === TRUE) {
            echo "Database created successfully";
        $this->conn= new mysqli($this->localhost,$this->username,$this->password,$this->dbname);

        } else {
            echo "Error creating database: " . $this->conn->error;
        }
    }
    public function createTable(){
        $table = "CREATE TABLE IF NOT EXISTS register1(
           reg_id INT AUTO_INCREMENT PRIMARY KEY,
           username  VARCHAR (50) NOT NULL,
           email VARCHAR (40) NOT NULL,
           pass VARCHAR (18) NOT NULL,
           cpass VARCHAR(18) NOT NULL)";
        if($this->conn->query($table) === TRUE){
            echo "table created successfully";
        }
        else{
            echo"no create a table";
        }
    }
    // public function alter1(){
    // $table1 ="ALTER TABLE reg RENAME TO reg1 ";
    // $sql = $this->conn->query($table1)=== TRUE;
    // if($sql){
    //     echo'table alter ';

    // }
    // else{
    //     echo'tanle no alter';
    // }
    // }

    // public function dorp1(){
    //     $table1 ="DROP TABLE reg1 ";
    //     $sql = $this->conn->query($table1)=== TRUE;
    //     if($sql){
    //         echo'table alter ';
    
    //     }
    //     else{
    //         echo'tanle no alter';
    //     }
    //     }

    public function reg_insert($name,$mail,$pass,$cpass){
        $sql="INSERT INTO register1(username,email,pass,cpass) VALUES 
        ('$name','$mail','$pass','$cpass')";
        $res=$this->conn->query($sql);
        if($res){
        echo '<script>alert("Data inserted successfully");</script>';
        header('Location:index.php');
        exit();
        }
        else{
            echo "Error: " . $this->conn->error;
            echo '<script>alert("Data not inserted");</script>';
        } 
    }

    public function reg_Sel($name,$pass){
        session_start();
        $sql1 = "SELECT * FROM register1 WHERE username = '".$name."' AND  pass='".$pass."'";
        $res = $this->conn->query($sql1);
        if($res->num_rows > 0){
            $row=$res->fetch_assoc();
            $_SESSION['name']=$row['username'];
         echo'<script>alert("data matched")</script>';
        header('Location:dash.php');

         return $row;

        }
        else{
         echo'<script>alert("data not matched")</script>';
        header('Location:index.php');
        }
    }

    public function reg_Sel1() {
        $sql1 = "SELECT * FROM register1";
        $res = $this->conn->query($sql1);
       return $res;
    }
}
$obj = new dbcon;
// $obj->createTable();
?>