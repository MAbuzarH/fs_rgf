<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        background-color: silver;
        max-width: 80%;
        margin:auto;
        padding: 20px;
    }
</style>
<body>
    <div class="container">
        <h1>Learn php</h1>
        <?php
         echo "<h1>Welcome</h1>";
         $age = 24;
         if ($age >= 18){
            echo "you can drive";
         }
         else{
            echo "you cannot drive";
         }
         // arrays 
         $languages = array('js', 'css', 'htm', 'php','python');
        //  for ($i = 0; $i < count($languages); $i++){
        //     echo $languages[$i];
        //     echo "<br />";
        //  }
        // $i=0;
        // while($i <= 4){
        //     echo $languages[$i];
        //     echo "<br />"; 
        //     $i++;
        // }
        // for each
        foreach ($languages as $value){
            echo "<br /> the value of the language ";
            echo $value;
        }
        ?>
    </div>
</body>
</html>