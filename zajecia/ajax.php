<?php
/*
 * Plik odpowiada wysyłając listę miast których nazwy rozpoczynają
 * się od danej frazy.
 * term to nazwa zmiennej generowanej przez jQuery UI w której
 * przechowywany jest badany parametr.
 * $_REQUEST to tablica ktora przechowuje wszystkie parametry przesłane
 * do srkrypty - w tym term.
 * $_REQUEST['term'] zawiera poszukiwaną frazę
 * instrukcja if else sprawdza czy parametr term został wysłany czy nie
 * jeśli nie, to sztucznie ustawia poszukiwaną frazę na Warsz - do
 * celów testowania
 */
    if (empty($_REQUEST['term']))
         $fraza="Warsz";
    else
         $fraza=$_REQUEST['term'];

    //nawiązanie połączenia z bazą danych world i wyświetlenie błędu
    //jeśli się to nie uda.
    $bazaDanych = new mysqli('localhost','root', '', 'world');
    if ($bazaDanych->connect_error) {
        die('Błąd połączenia z bazą danych (numer błędu: '
            . $bazaDanych->connect_errno . ') Komunikat błędu: '
            . $bazaDanych->connect_error);
    }
    //ustawienie kodowania znaków na utf8
    $bazaDanych->set_charset("utf8");
    //zapytanie sql które pyta o miasta rozpoczynające się od
    //znaków w zmiennej fraza
    $sql="select Name from city where Name like '{$fraza}%'";
    //wykonanie zapytania
    $wynikZapytania=$bazaDanych->query($sql);
    //przejście przez wszystkie rekordy
    while($rekord = $wynikZapytania->fetch_object()) {
                //zapisanie nazwy miasta do tablicy
                $tablica[]=$rekord->Name;
            }
   //zakodowanie tablicy w formacie JSON. JQuery UI wymaga danych
   //właśnie w tym formacie.
   //Następnie "wyświetlenie" tych zakodowanych danych
   echo json_encode($tablica);
?>