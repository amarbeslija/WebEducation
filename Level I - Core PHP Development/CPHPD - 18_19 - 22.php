<html>
    <head>
        <title>Discount Price</title>
        <meta charset="utf-8">
        <style>
            <?php
                $isNew = rand(0, 1);
                    if($isNew){
                        echo ".border{
                            border: 1px solid red;
                            }";
                    }
            ?>
        </style>
    </head>
    <body>
        <?php
        #CorePHP - Vježba 18/19-22

        #Cijena sa popustom
        $price = rand(1, 100);
        $discount = 0.8;

        if($price > 50){
            $discountPrice = $price * $discount;
            echo "<h1>The item is on the discount: <span  class='border'>" . $discountPrice . " BAM (<del>" . $price . " BAM</del>)</span>!</h1>";
        }else{
            echo "<h1>The item is not on the discount: <span  class='border'>" . $price . " BAM!</span></h1>";
        }
        ?>
    </body>
</html>