<?php
session_start();
?>

<html lang="en">
    <head>
        <meta charset="utf8">
        <title>Welcome</title>
        <style type="text/css">
         .border {
        border-width: 2px;
        border-style: solid;
        border-color : black
        width: 200px;
    }
        </style>
    </head>

    <body>
        <div class="border">
           <?php

            date_default_timezone_set("Asia/Bangkok");

            function msg_login()
            {   
                if ($_SESSION['loginerrorusr'] == 0)
                {
                     Waktu();
                }
            }

            function Waktu()
            {
                if(date("a") == "pm")
                {
                    if((date("h") > 1 && date("h") <= 4) || date("h") == 12)
                    {
                        echo "Selamat Siang :)". date("  h:i:s a");
                    }
                    else if (date("h") > 4 && date("h") < 6)
                    {
                        echo "Selamat Sore :)". date("  h:i:s a");
                    }
                    else echo "Selamat Malam :)". date(" h:i:s a");
                }

                else
                {
                    if(date("h") > 6 && date("h") <= 11)
                    {
                        echo "Selamat Pagi :)". date("  h:i:s a");
                    }
                    else if (date("h") > 1 && date("h") < 6)
                    {
                        echo "Selamat Malam :)" . date("  h:i:s a");
                    }
                }
            }

            function logoutbtn()
            {
                if ($_SESSION['loginerrorusr'] == 0)
                {?>
                    <br><button type="button" onclick="location='logout.php'">Logout</button><br><br>
                <?php }
            }
            
            ?>

            <h1>Selamat Datang :)</h1>

            <div>
            <?php msg_login(); ?>
            </div>
            
            <div>
            <?php logoutbtn() ?>
            </div> 
        </div>
        
        
    </body>
</html>