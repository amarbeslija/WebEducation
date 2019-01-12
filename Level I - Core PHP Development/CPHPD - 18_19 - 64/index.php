<html>
    <head>
        <title>Vježba 18_19 - 64</title>
        <meta charset="utf-8">
    </head>
<body>
    
    <form method="POST" action="">
        <label for="superhero">Superhero Search</label>
        <input type="text" name="superhero">
        <br>
        <input type="submit" value="Search...">
    </form>
    
    <?php

    # Uključivanje konektora na bazu
    require "databaseConnector.php";

    
    if(isset($_POST['superhero'])){
        $superhero = $_POST['superhero'];
        
        # Dobavljanje podataka traženog superheroja
        $query = "SELECT * FROM superheroes.superhero WHERE sh_alias LIKE '%{$superhero}' OR sh_name LIKE '%{$superhero}%'";
        $result = mysqli_query($connection, $query);
        
        # Ispis koji zavisi da li superheroj postoji u bazi ili ne
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <div style='text-align:center;width:400px;border:1px solid gray;padding:5px; padding:10px; margin: 20px'>
               <h2 style='margin:10px;'><?php echo $row['sh_name']; ?></h2>
               <img src='<?php echo $row['sh_image']; ?>' width='100%' alt='<?php echo $row['sh_alias']; ?>' />
                <div>
                    <a href='<?php echo $row['sh_desc']; ?>'>Read more</a>
                </div>
            </div>
            <?php
            }
        }else{
            echo "Superheroj ne postoji u bazi";
        }
    }else{
        # Dobavljanje podataka svih superheroja
        $query = "SELECT * FROM superheroes.superhero";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <div style='text-align:center;width:400px;border:1px solid gray;padding:5px; padding:10px; margin: 20px'>
               <h2 style='margin:10px;'><?php echo $row['sh_name']; ?></h2>
               <img src='<?php echo $row['sh_image']; ?>' width='100%' alt='<?php echo $row['sh_alias']; ?>' />
                <div>
                    <a href='<?php echo $row['sh_desc']; ?>'>Read more</a>
                </div>
            </div>
            <?php
            }
        }    
    }
    

    ?>
</body>
</html>