<?php

# Uključivanje konektora na bazu
require "databaseConnector.php";

# Dobavljanje podataka (limitirano jedan jer tražimo jednog superheroja)
$query = "SELECT * FROM superheroes.superhero LIMIT 1";
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