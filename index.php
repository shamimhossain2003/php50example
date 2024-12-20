<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php 50 example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    <div class="container justify-content-center text-center">
      <?php
      date_default_timezone_set("Asia/Dhaka");
      echo "<h1>"."Now Time is"." " .date("h/i/sa")."</h1>";
      echo "<h1>"."today is"." " .date("d/m/y")."</h1>";
      echo "<h1>"."Hello, world!"." "."How are you"."</h1>";
      $color= "red";
      $name= "sakib";
      $age=18;
      $number1=40;
      $number2=60;
      $totalnumber=$number1+$number2;
      $number3=20;
      $number4=30;
      $total2=$number3*$number4;
      $number5=450;
      $number6=245;
      $total3=$number5-$number6;
      $number7=50;
      $number8=10;
      $total4=$number7/$number8;
      $date= date("H");
      if ($number1>$number2) {
        echo "<h1>"."This is True"."</h1>";
      }elseif ($number1==$number2) {
        echo "<h1>"."This is False"."</h1>";
      }else{
        echo "<h1>"."Error"."</h1>";
      }
      if ($date<20) {
        echo "<h1>"."This is True"."</h1>";
      } else {
        echo "<h1>"."This is False"."</h1>";
      }
      echo "<h1>".$date."</h1>";
      echo "<h1>"."This color is"." ".$color."</h1>";
      echo "<h1>"."His Name is"." ".$name."</h1>";
      echo "<h1>"."His Age is"." ".$age."</h1>";
      echo "<h1>"."Total number is"." ".$totalnumber."</h1>";
      echo "<h1>"."The number is"." ".$total2."</h1>";
      echo "<h1>"."The number is"." ".$total3."</h1>";
      echo "<h1>"."The number is"." ".$total4."</h1>";

      switch ("Design") {
        case 'Developer':
          echo "<h1>"."I am a Full Stack Web Developer"."</h1>";
          break;
          case 'Design':
          echo "<h1>"."I am a Web Designer"."</h1>";
          break;
        
        default:
          echo "<h1>"."I am freelancer"."</h1>";
          break;
      }

      $q= 0;
      while($q <=100){
        echo "<h1>"."I Love You Bangladesh"."</h1>"."<br>";
        $q++;
      }
      $s=0;
      do {
        echo "<h1>"."shikhbe shobai"."</h1>"."<br>";
        $s++;
      } while ($s <=20);
     
      for ($i=0; $i <=10 ; $i++) { 
         echo "<h1>"."web development"."</h1>"."<br>";
      }
      function test_Name($name, $age=2){
        echo "<h1>"."Her Name is $name and his age is $age"."</h1>"."<br>";
      }
      test_Name("Shamim",22);
      test_Name("Shuvo",25);
      test_Name("Shojib");
      ?>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>