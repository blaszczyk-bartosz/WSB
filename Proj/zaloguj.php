<?php

    session_start();                    //inicjalizuje tablice globalną
    require_once "connect.php";         //połączeznie z bazą
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);  //otwarcie polaczenia z baza danych w nawiasie zmienne z pliku który łączy z bazą

    if((!isset ($_POST['user'])) || (!isset ($_POST['pass'])))      //przekierowanie na stronę startową przy bezpośredniej próbie wejścia do pliku
            {
                header('location: index.php');
                exit();
            }




    if ($polaczenie->connect_errno!=0)              //jeżeli wystąpi jakiś błąd(!=0) to
        {
            echo "Error: ".$polaczenie->connect_errno;      //informuj nas o błędzie
        }
    else
        {   
            $log = $_POST['user'];                  //w przeciwnym razie, przyjmij dane uzupełnione przez użytkownika i przypisz do zmiennych
            $pass = $_POST['pass'];   
            
            $log= htmlentities($log, ENT_QUOTES,"UTF-8");       //zencjuj znaki przypisane do (zmiennej log, uwzględniając apostrof i cudzysłów, w UTF-8)
            $pass= htmlentities($pass, ENT_QUOTES,"UTF-8");     //zencjuj znaki przypisane do (zmiennej pass, uwzględniając apostrof i cudzysłów, w UTF-8)
        

            if ($rezultat = $polaczenie->query(                             
                sprintf("SELECT * FROM klient WHERE NumerID='%s' AND Haslo='%s'",  //wykonaj zapytanie SQL dla wartości wpisanych przez użytkownika
                mysqli_real_escape_string($polaczenie,$log),                //uprzednio uniemożliwiając naruszenia zapytania(mysqli_real_escape_string)
                mysqli_real_escape_string($polaczenie,$pass))))         
                {
                    $ilu = $rezultat->num_rows;                             //wynik zapytania, zmienną rezultat(cały wiersz->num_rows) przypisz do zmiennej ili

                    if($ilu>0)                  //jeżeli zmienna ilu zwraca jeden wiersz(więcej nie może, bo jest tylko jeden taki użytkownik) to
                    {
                        $_SESSION['zalogowany'] = true;                     //do zmienneh globalnej zalogowany przypisz wartość true(oznacza, że wykonują się polecenia zalogowania)
                        $wiersz = $rezultat->fetch_assoc();                 //do zmiennej wiersz przypisz wynik zapytania tworząc tablicę asocjacyjną(zamieniającą indeksy[0,1,2 itp] na wartości nazw kolumn)
                        $_SESSION['numer'] = $wiersz['NumerID'];                 //indeks(zmienną) z tablicy asocjacyjnej zapytania przypisz do zmiennej globalnej
                        $_SESSION['imie'] = $wiersz['Imie'];                //indeks(zmienną) z tablicy asocjacyjnej zapytania przypisz do zmiennej globalnej
                        $_SESSION['nazwisko'] = $wiersz['Nazwisko'];        //indeks(zmienną) z tablicy asocjacyjnej zapytania przypisz do zmiennej globalnej
                        
                        unset($_SESSION['blad']);                   //jeżeli jesteśmy zalogowani usuń zmienną przechowującą informację o błędnych danych
                        $rezultat->close();                         //zamknij wynik zapytania
                        header('location: start.php');              //wszystkie zmienne przenieś i wykonaj w skrypcie następnym
                    }
                    else
                    {
                        $_SESSION['blad'] = '<span style="color:red;">Nieprawidłowy login lub hasło!</span>';  //jeżeli w bazie nie będzie danego wiersza, to 
                        header('location:index.php');                   //wróć na stronę główną i wyświetl komunikat.
                    }
                }
            }
        
            $polaczenie->close(); //po wykonaniu wszystkiego zamknij połączenie z bazą
        
?>