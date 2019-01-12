<html>
    <head>
        <title>Vježba 18_19 - 41</title>
        <meta charset="utf-8">
        <style>
            .proizvod h1{
                color: crimson;
            }
            
            .proizvod h1 .red{
                color: darkred;
            }
            
            a{
                display: inline-block;
                margin-right: 20px;
            }
        </style>
    </head>
    <body>
        <?php
            require "model.php";
        
            if(isset($_GET['proizvod'])){
                # Dobavljanje proizvoda u promjenljivu
                $proizvod = $_GET['proizvod'];
                
                # Ispis linka za naslovnu stranicu
                echo "<a href='index.php'>Naslovna</a>";
                
                # Priprema proizvoda za ispis prethodnog
                if($proizvod == 1){
                    # Nemoj ispisati link jer nema ništa nazad    
                }else{
                    #Ispis linka za prethodni proizvod
                    $nazad = $proizvod - 1;
                    echo "<a href='index.php?proizvod=" . $nazad . "'>Prethodni proizvod</a>";
                }
                
                # Priprema proizvoda za ispis narednog
                $dalje = $proizvod + 1;
                
                # Ako je $dalje jednak proizvodu koji se ne nalazi u nizu, vrati na početak 
                # Odnosno, ako je smo došli do kraja niza sa proizvodima, vrati na početak
                # kako se ne bi desila greška: ispis proizvoda koji ne postoji u nizu
                # Urađeno je automatski (prebrojavanjem niza) kako bi se niz mogao dinamički puniti ili prazniti
                if($dalje == count($proizvodi)+1){
                    $dalje = 1;
                }
                
                #Ispis linka za naredni proizvod
                echo "<a href='index.php?proizvod=" . $dalje . "'>Naredni proizvod</a>";            
                
                //Ispisivanje proizvoda u odnosu na $_GET['proizvod'] promjenljivu
                echo "<div class='proizvod'>";
                    echo "<h1>" . $proizvodi[$proizvod]['name'] . " | <span class='red'>" . $proizvodi[$proizvod]['price'] . "</span> Euro </h1>";
                    echo "<img src='" . $proizvodi[$proizvod]['image'] . "' alt='" . $proizvodi[$proizvod]['name'] . "'>";
                    echo "<h2>Hardware</h2>";
                    echo "<ul>";
                        echo "<li>Camera: " . $proizvodi[$proizvod]['camera'] . "</li>";
                        echo "<li>Storage: " . $proizvodi[$proizvod]['storage'] . "</li>";
                        echo "<li>Memory: " . $proizvodi[$proizvod]['memory'] . "</li>";
                    echo "</ul>";
                echo "</div>";                
            }else{
                //Ispisivanje menija
                echo "<a href='index.php'>Naslovna</a>";
                echo "<a href='index.php?proizvod=1'>Naredni proizvod</a>";
                
                //Ispisivanje svih proizvoda
                for($i = 1; $i < count($proizvodi)+1; $i++){
                    echo "<div class='proizvod'>";
                        echo "<h1>" . $proizvodi[$i]['name'] . " | <span class='red'>" . $proizvodi[$i]['price'] . "</span> Euro </h1>";
                        echo "<img src='" . $proizvodi[$i]['image'] . "' alt='" . $proizvodi[$i]['name'] . "'>";
                        echo "<h2>Hardware</h2>";
                        echo "<ul>";
                            echo "<li>Camera: " . $proizvodi[$i]['camera'] . "</li>";
                            echo "<li>Storage: " . $proizvodi[$i]['storage'] . "</li>";
                            echo "<li>Memory: " . $proizvodi[$i]['memory'] . "</li>";
                        echo "</ul>";
                    echo "</div>";
                }
            }
        
        ?>
    </body>
</html>