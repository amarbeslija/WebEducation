<html>
    <head>
        <title>Status Korisnika</title>
        <meta charset="utf-8">
        <style>
        .admin{
                color: white;
                background-color: green;
            }
        .user{
                color: white;
                background-color: blue;
            }
        .undefined{
                color: white;
                background-color: red;
            }
        </style>
    </head>
    <body>
        <?php
        #CorePHP - Vježba 18/19-18

        #Status korisnika
        $userStatus = 1;
        switch($userStatus){
            case 1:
                echo "<h1 class='admin'>Welcome Administrator</h1>";
                break;
            case 2:
                echo "<h1 class='user'>Welcome User</h1>";
                break;
            default:
                echo "<h1 class='undefined'>Unknown User Type</h1>";
                break;
        }
        ?>
    </body>
</html>