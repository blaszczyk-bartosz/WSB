<?php
    session_start();                //inicjalizacja sesji globalnej przechowującej zmienne

    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))     //instrukcja utrzymania zalogowania, jeżeli zmienna zalogowany istnieje i jest true to
        {
            header('location: start.php');      //przenosi na stronę startową i
            exit();                             // przerywa działanie kodu, w przeciwnym razie wykonuje pozostałe linie
        }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="description" content="Nowoczesna bankowo�� w najlepszym wydaniu. Szybko, prosto i skutecznie. Nie tra� czasu na stanie w kolejkach!">
    <meta name="keywords" content="dobry bank, szybki bank, nowoczesny bank, nowoczesna bankowo��"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SafeBank - nowoczesna bankowość</title>
    <link rel="stylesheet" href="form.css" type="text/css"/>
</head>
<body>
    <div id="cont">
        <form action="zaloguj.php" method="POST">
            
            <input type="text" placeholder="Login" name="user">              
            <input type="password" placeholder="Hasło" name="pass">                
            <input type="submit" value="Zaloguj się"> 
              
        </form>

<?php
    if(isset($_SESSION['blad'])) echo $_SESSION['blad'];        //wyświetlanie błędu zalogowania, przyjmuje zmienne 
?>
    </div>
    
</body>
</html>