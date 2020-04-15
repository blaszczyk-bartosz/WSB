<?php
session_start();                        //deklaracja tablicy globalnej przechowującej zmienne

if (!isset($_SESSION['zalogowany']))    //instrukcja utrzymania zalogowania(jeżeli nie istnieje zalogowanie)
{
    header('location: index.php');      //przenosi na stronę główną, logownia
    exit();                             //przerywa natychmiastowo działanie kodu, by dalej nie interpretowało
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Zalogowany Użytkownik</title>
    <meta name="description" content="Nowoczesna bankowo�� w najlepszym wydaniu. Szybko, prosto i skutecznie. Nie tra� czasu na stanie w kolejkach!">
    <meta name="keywords" content="dobry bank, szybki bank, nowoczesny bank, nowoczesna bankowo��"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href ="style.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Baloo+2|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontello/css/fontello.css" type="text/css"/>
</head>
<body> 



<div class="container">

    <div class="row mt-3">
        <div class="col-4 ">
            <figure>
                <a href="#""><img class="logo" src="safebank logo.jpg" alt="logo"/></a>
                <figcaption class="text-center">SafeBank</figcaption>
            </figure>           
        </div>

        <div class="col-4 text-center my-auto">
            Rodzaj Profilu: Indywidualny<br/>
            <?php echo $_SESSION['imie']." ".$_SESSION['nazwisko']; ?>
        </div>

        <div class="col-4 text-center settings ">    
            <a class="option2" href="#">Ustawienia<i class="icon-cog"></i>  </a> 
            <a class="option2" href="#">Wiadomości<i class="icon-mail-alt"></i> </a>  
            <a class="option2" href="wyloguj.php">Wylogowanie<i class="icon-off"></i> </a> 
        </div>
    </div>

    <nav class="navbar navbar-light navbar-expand-md mx-0">
         
        <a href="#"><i class="icon-home"></i></a>          

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="przelacznik menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="#"> PULPIT </a>
                </li>
                                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="subtransaction" aria-haspopup="true"> TRANSAKCJE </a>
                        <div class="dropdown-menu" aria-labelledby="subtransaction">
                            <a class="dropdown-item" href="#" style="border-bottom: 1px solid rgba(212, 199, 199, 0.863);">Odbiorcy zdefiniowani</a>
                            <a class="dropdown-item" href="#">Przelew</a>
                        </div>
                </li>

                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="accounts" aria-haspopup="true"> RACHUNKI </a>
                        <div class="dropdown-menu" aria-labelledby="accounts">
                            <a class="dropdown-item" href="#" style="border-bottom: 1px solid rgba(212, 199, 199, 0.863);">Konto Za Zero</a>
                            <a class="dropdown-item" href="#">Konto Oszczędnościowe</a>
                        </div>
                </li>
                    
                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="savings" aria-haspopup="true"> OSZCZĘDNOŚCI </a>
                        <div class="dropdown-menu" aria-labelledby="savings">
                            <a class="dropdown-item" href="#" style="border-bottom: 1px solid rgba(212, 199, 199, 0.863);">Samochód</a>
                            <a class="dropdown-item" href="#">Dodaj Produkt</a>
                        </div>                
                </li>

                <li class="navbar-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="paymants" aria-haspopup="true"> PŁATNOŚC </a>
                        <div class="dropdown-menu" aria-labelledby="paymants">
                            <a class="dropdown-item" href="#" style="border-bottom: 1px solid rgba(212, 199, 199, 0.863)";>Zlecenia Stałe</a>
                            <a class="dropdown-item" href="#">Zlecenia Zmienne</a>
                        </div>
                </li>

                <li class="navbar-item ">
                    <a class="nav-link" href="#">KARTY</a>
                </li>

            </ul>
        </div> 
    </nav>


    <main>
    <div class="row mt-3 ">
        <div class="col-lg-4 offset-1 balance my-auto col-sm-12 mx-auto ">
            <h1>Safe Konto</h1>
            <h2>Konto Za Zero</h2>
            <h3><span class="count">00 1010 1127 0500 1000 0000 7869</span></h3>    
            <h4><span class="number">Dostępne środki:</span> x=2563545,55</h4>
            <h3><span class="count">Inne konta:</span></h3> 
            <h6>Konto Oszczędnościowe <p>23 1045 0258 4056 0000 1236 1458</p></h6>
        </div>

        <div class="col-lg-5 offset-1 story col-sm-12 mx-auto mt-3 story">
            <h1>Historia Transakcji</h1>
                25.03.2020
                    <br/>
                <span><i class="icon-mobile ikona"></i> </span> <span class="odbiorca">Netflix</span> <span class="kwota">-50</span>
                    <hr><hr>
                22.03.2020
                    <br/>
                <span><i class="icon-mobile ikona"></i> </span> <span class="odbiorca">PSC SP.Z.O.O</span> <span class="kwota">-100,21</span>
                    <hr><hr>
                19.03.2020
                    <br>
                <span><i class="icon-mobile ikona"></i> </span> <span class="odbiorca">KFC POLSKA</span> <span class="kwota">-49,21</span>
                    <hr><hr>
        </div>
    </div>
    </main>

    <aside>
    <div class="row mt-4">
        <div class="col-6 ">
            <figure>
                <a href="#""><img class="reklama" src="bank reklama.JPG" alt="reklama"/></a>
            </figure>           
        </div>

        <div class="col-6 doreklamy my-auto ">
            Czym się różni paczka makaronu od nowego kredytu Na Start? 
                </br>
            Kredyt Na Start można łatwo zdobyć ! 
        </div>
    </div>


    <div class="row">
        <div class="col-12 RRSO">   
            Do 30 000 zł na Twoim koncie nawet dziś. Wystarczy wypełnić wniosek i podpisać umowę - wszystko załatwisz online.
            RRSO Rzeczywista Stopa Oprocentowanie dla reprezentatywnego przykładu. Kredyt Na Start skierowany jest do osób,
            które nie zaciągnęły pożyczki gotówkowej/kredytu gotówkowego w SafeBanku. Udzielenie Kredytu Na Start dla zdecydowanych jest uzależnione
            od pozytywnej oceny zdolności kredytowej. Propozycje na podobnych warunkach mogą wystąpić w przyszłości.
        </div>
    </div>
    </div>

    </aside>
    <div class="row">
        <div class="footer mx-auto">
            &copy; SAFE Bank &nbsp;&nbsp;&nbsp;
            <i class="icon-mail-alt"></i>dok@safebank.pl &nbsp;&nbsp;&nbsp;
            <i class="ico</t>n-mobile"></i>61 005 21 55  &nbsp;&nbsp;&nbsp;
            <i class="icon-phone"></i> 450 004 009 &nbsp;&nbsp;&nbsp;
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    
</body>
</html>