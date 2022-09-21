<?php declare(strict_types=1) ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP || Functions </title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        <h1 class=text-center>Array</h1>
                    </div>
                    <div class="card-body">
                        <?php
                    $languages = array("Php", "javascript","nodejs","html","css" ,"c#");
                    
                    foreach ($languages as $key => $value) {
                        
                        echo "$key - "."$value"."<br>";
                    }

                    $elemansayisi = count($languages);
                    echo " Dizi içerisinde $elemansayisi eleman var  ";
                    
                    echo "<hr>";


                    $cars = array(

                        array("skoda",2,21,10,2000),
                        array("Nissan",1,20,15,2000),
                        array("Bmw",3,15,20,2000),
                        array("Fiat",8,3,30,2000),
                        array("peugot",8,3,30,2000),
                        array("ford",8,3,30,2000),
                        array("toyota",8,3,30,2000),
                        array("passad",8,3,30,2000),
                        array("honda",8,3,30,2000),
                        array("mazda",8,3,30,2000),
                        array("citreon",8,3,30,2000)
                        
                    );
                    
                    $carlenth = count($cars);                 

                    for ($i=0; $i < $carlenth ; $i++) { 
                    
                        echo "<p class='alert alert-primary'> Marka : ".$cars[$i][0]." Adet : ".$cars[$i][1]." Satış : ".$cars[$i][2]." Kalan :".$cars[$i][3]."</p>";
                    
                        
                    }

                    echo "<hr>";

                    $carslengt = count($cars);
                    $carsvaluelengt = count($cars[0]);
                    
                    for ($i=0; $i < $carslengt ; $i++) { 
                        
                        echo "<p class='text-white mt-2 py-3'>"."Satır Numarası :"."$i"."</p>";
                        
                        echo "<ul class='list-group'>";
                        
                        for ($x=0; $x <$carsvaluelengt ; $x++) {
                        echo "<li class='list-group-item'>".$cars[$i][$x]."</li>";
                    }
                    
                    echo "</ul>";
                    
                    }

                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>