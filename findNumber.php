<?php
/*
    Игра на php угадай число работающая на формах методами GET и POST.
    Разработчик Карасев Семён
*/
$message = "Угадай число в диапазоне от 0 до 100!";

if(isset($_POST["checkDate"])){ //Если данные были отправлены на сервер

}
?>

<html>
    <head>
        <title>Игра угадай число</title>
        <h1>Hello world</h1>
    </head>
    <body>
        <h2><?php echo $message;?></h2>
        <form method "post">
            <input type = "text" value ="<?php echo $number ?>" name = "number"/>
            <input type = "submit" name = "checkDate" value ="Угадать"/><br/>
            <input type = "hidden" value ="hidden_number" value ="<?php echo $hidden_number ?>"/>
        </form>
    </body>
</html>