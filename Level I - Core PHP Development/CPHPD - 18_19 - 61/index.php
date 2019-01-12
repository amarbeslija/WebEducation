<?php
#Iskoristit ćemo već kreiranu tabelu customer i na osnovu nje kreirati praznu customerDuplicate

# Uključivanje konektora na bazu
require "databaseConnector.php";

# Dobavljanje podataka
$query = "SELECT * FROM customers.customer";
$result = mysqli_query($connection, $query);

#Prebacivanje podataka
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $queryIns = "INSERT INTO customers.customertwo (cust_id, cust_name, cust_email, cust_datetime) VALUES ('{$row['cust_id']}', '{$row['cust_name']}', '{$row['cust_email']}', '{$row['cust_datetime']}')";
        if(mysqli_query($connection, $queryIns)){
            echo "Inserted";
        }else{
            echo mysqli_error($connection);
        }
    }
}

/*

Napomene:
    - Morate kreirati dvije identične tabele u jednoj bazi
    - Morate jednu tabelu napuniti podacima
    - Ako ste drugačije nazvali tabele promijenite njihove nazive u querijima
    - Ovo je jedna od realnih situacija kada morate paziti oko podataka da ne napravite zbrku, te
    da izvršite pravilnu duplikaciju tabela

*/