<html>
    <head>
        <title>Vježba 18_19 - 23</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <?php 
            require "dugmici.html";
            
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                switch($page){
                    case "1":
                        require "page1.html";
                        break;
                    case "2":
                        require "page2.html";
                        break;
                    case "3":
                        require "page3.html";
                        break;
                    default:
                        require "default.html";
                        break;
                }
            }else{
                require "default.html";
            }
            ?>
        </div>
    </body>
</html>