<?php
  $name = "Rafael";
  $_salary = "610";
  $cities = [
    'luzon' => 'Manila',
    'visayas' => 'Cebu'
  ];

  const per_hour = 500;
  define('pi', 3.1416);

 
  echo $cities['visayas'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "sample.php";
    
    ?>
<h1>
    <?php
        echo "My first PHP<br/> $_salary";
        echo "HELLOWORLD!<br/> $_salary";
        echo $name;
        echo "<br/> My First Salary is " . per_hour . "<br/>";
        echo pi;
    ?>
</h1>
<?php
require_once "sample.php";

?>
</body>
</html>
