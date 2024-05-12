<?php
/*
    Игра на php угадай число работающая на формах методами GET и POST.
    Разработчик Карасев Семён
*/
$number = 0;
$hidden_number = rand(0,100);
$message = "Угадай число в диапазоне от 0 до 100!";
if(isset($_POST["checkDate"])){ //Если данные были отправлены на сервер
    //В переменную 
    $number = $_POST["number"];

    $hidden_number = $_POST["hidden_number"];

    if($number < $_POST["hidden_number"]){
        $message = "Загаданное число больше $number";
    }
    elseif($number > $_POST["hidden_number"]){
        $message = "Загаданное число меньше $number";
    }
    elseif($number == $_POST["hidden_number"]){
        $message = "Ура! вы угадали число!<br> Угадайте новое заданное число";
        $hidden_number = rand(0,100);
    }
}
?>

<html>
    <head>
        <title>Игра угадай число</title>
        <h1>Hello world</h1>
    </head>
    <body>
        <h2><?php echo $message; ?></h2>
        <form method = "POST">
            <input type = "text" name = "number" value = "<?php echo $number ?>"/>

            <input type = "submit" name = "checkDate" value ="Угадать"/><br/>

            <input type = "hidden" name ="hidden_number" value = "<?php echo $hidden_number ?>"/>
        </form>
    </body>
</html>