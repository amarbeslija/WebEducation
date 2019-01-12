<?php
# Uključivanje konektora na bazu
require "databaseConnector.php";

# Dobavljanje podataka
$query = "SELECT * FROM vijesti.news";
$result = mysqli_query($connection, $query);

# Promjenljiva u koju smještamo svaki red (redove ćemo kasnije promiješati)
$resultS = [];
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        # Smještanje redova
        $resultS[] = $row;   
    }
}

# Mijenjaše redoslijeda vijesti
shuffle($resultS);

#Ispis vijesti
for($i = 0; $i < count($resultS); $i++){
    echo "<h1>" . $resultS[$i]['news_title'] . "</h1>";
    echo "<p>" . substr($resultS[$i]['news_content'], 0 , 200) . "...</p>";
    echo "<hr>";
}

/*

Napomena:
Da bi primjer radio morate imati instaliran MySQL, te ubaciti tabele koje se nalaze u vijesti.sql
fajlu unutar baze koja se zove vijesti.
MySQL imate instaliran ako ste instalirali XAMPP, WAMP, MAMP.
*/