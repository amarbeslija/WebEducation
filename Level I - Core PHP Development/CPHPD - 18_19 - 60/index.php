<html>
    <head>
        <title>Vježba 18_19 - 60</title>
        <meta charset="utf-8">
        <style>
            table, tr, th, td{
                border: 1px solid #000;
            }
            table{
                border-collapse: collapse;
            }
            th{
                background: #EEE;
            }
            td{
                padding: 0 20px;
                background: #75b9e6;
                color: #FFF;
            }
        </style>
    </head>
    <body>
    <?php

    # Uključivanje konektora na bazu
    require "databaseConnector.php";

    # Dobavljanje podataka
    $query = "SELECT * FROM customers.customer";
    $result = mysqli_query($connection, $query);

    #Ispis podataka
    echo "<table>";
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Customer Name</th>";
        echo "<th>Customer Email</th>";
    echo "</tr>";
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
              echo "<tr>";
                echo "<td>" . $row['cust_id'] . "</td>";
                echo "<td>" . $row['cust_name'] . "</td>";
                echo "<td>" . $row['cust_email'] . "</td>";
              echo "</tr>";
        }
    }
    echo "</table>";
    
    /*

    Napomena:
    Da bi primjer radio morate imati instaliran MySQL, te ubaciti tabele koje se nalaze u customers.sql
    fajlu unutar baze koja se zove customers.
    MySQL imate instaliran ako ste instalirali XAMPP, WAMP, MAMP.
    
    */
    ?>
    </body>
</html>


