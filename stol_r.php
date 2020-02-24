<?php
$chena = 280;

    if($_POST["высота"] == "")
        print "<center><h1>ошибка</h1><center/><br>введите параметр высота <br> <a href='zhelezo.php'>исправить</a><br>";
    

    if($_POST["ширина"] == "")
        print "<center><h1>ошибка</h1><center/><br>введите параметр ширина <br><a href='zhelezo.php'>исправить</a><br>";


    if($_POST["длинна"] == "")
        print "<center><h1>ошибка</h1><center/><br>введите параметр длинна <br/> <a href='zhelezo.php'>исправить</a><br>";

        print "<center><h3>стол разборный (2 боковины, 4 перемычки)<h3/><center>";
    
        print "<hr/>" . ((($_POST["длинна"] + $_POST["ширина"] + $_POST["высота"]) * 4) / 600) * 280 * 2 . "<br>" . "руб.";
        
?>

<html> 
      
<style type="text/css">
        h2 {
            background-color: #1C123B;
            color: #a4bcde;
            font-family: Comic Sans MS;
            
        }
        body{
            background-color:#a4bcde;
            font-size: 20px;
            color:black;
            
        }
        #ssvarka{
            text-decoration: none;
            color: darkgray;
            
        }
</style>
      
       <hr/>
        <center>
        <p>
        <a href="index.html" id="ssvarka" target=""><h2>на главную</h2></a>
        </p>
       
        <img src="%D1%81%D1%82%D0%BE%D0%BB.png" alt="пример" title="разборный" width="800" height="500" hspace="4" vspace="4">
        <p>
        <a href="zhelezo.php" id="ssvarka" target=""><h2>другие размеры</h2></a>
        </p>
        </center>
</html>