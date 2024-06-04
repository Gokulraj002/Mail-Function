<?php 
    session_start();
   if (!isset($_SESSION["name"])) {
   header("Location:index.php");
   }

?>
<?php
function reverseString($str) {
    $reversedStr = '';
    $length = strlen($str);

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedStr .= $str[$i];
    }

    return $reversedStr;
}

$originalString = "Hello, World!";
$reversedString = reverseString($originalString);
echo $reversedString; // Output: !dlroW ,olleH
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>    
          
      </ul>
      <div class =" ">
   
            <a class="nav-link text-primary float-end" href="logout.php">logout</a>
           
      </div>
    </div>
  </div>
</nav>
</header>


<!-- 

</body>
</html> -->


