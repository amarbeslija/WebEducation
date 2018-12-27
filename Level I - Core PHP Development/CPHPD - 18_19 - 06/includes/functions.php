<?php
function getPrivateData(){
    global $connection;
    
    $sqlUser = "SELECT * FROM web_stranica.users";
    $resultUser = mysqli_query($connection, $sqlUser);
    
    if(mysqli_num_rows($resultUser) > 0){
        $row = mysqli_fetch_assoc($resultUser);{}
        echo "<h1>";
            echo $row['user_name'] . " " . $row['user_nickname'] . " " . $row['user_lastname'];
        echo "</h1>";
    }
    
    $sqlRoles = "SELECT * FROM web_stranica.user_roles as a WHERE a.roles_link_status = '1'";
    $resultRoles = mysqli_query($connection, $sqlRoles);
    if(mysqli_num_rows($resultRoles) > 0){
        echo "<p>";
        while($rowTwo = mysqli_fetch_assoc($resultRoles)){
            echo "<a href=http://{$rowTwo['roles_link']} target='_blank'>{$rowTwo['roles_name']}</a>&nbsp;&bull;&nbsp;";    
        }
        echo "</p>";
    }
}


function getSocialData(){
    global $connection;
    
    $sql = "SELECT * FROM web_stranica.social";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0){
        echo "<nav><ul>";
        while($row = mysqli_fetch_assoc($result)){
            $linkIcon = strtolower($row['social_name']);
            echo "<li>";
            echo "<a href='http://{$row['social_link']}' target='_blank' class='icon fa-";
            if($row['social_name'] == "Email"){
                echo "envelope-o'>";
            }else{
                echo "{$linkIcon}'>";    
            }

            echo "<span class='label'>{$row['social_name']}</span>";
            echo "</a>";
            echo "</li>";
        }
        echo "</ul></nav>";
    }
}

function getData(string $whichOne = "all"){
    $settingsData = json_decode(file_get_contents('includes/system.json'), true);
    if($whichOne == "all"){
        return $settingsData;
    }else{
        return $settingsData['data'][$whichOne];
    }
}

?>
















