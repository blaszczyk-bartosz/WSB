<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>

<?php echo $_SESSION['mar']."<br/>".$_SESSION['mod']."<br/>".$_SESSION['prz']."<br/>".$_SESSION['rok']."<br/>".$_SESSION['kol']; ?>





    <button type="button" data-toggle="modal" data-target="#exampleModal">
        Zmien dane
      </button>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content okno">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="edit.php" method="POST">
                
              <div class="dp col-6">Imię</div><div class="dp col-6"> <input type="text" placeholder="marka" name="marka">  </div>    <div class="cl"></div>
              <div class="dp col-6">Nazwisko</div><div class="dp col-6"><input type="text" placeholder="model" name="model"></div><div class="cl"></div>
              <div class="dp col-6">Ulica</div><div class="dp col-6"><input type="text" placeholder="przebieg" name="przebieg"></div><div class="cl"></div>
              <div class="dp col-6">Kod Pocztowy</div><div class="dp col-6"><input type="text" placeholder="rocznik" name="rocznik"></div ><div class="cl"></div> 
              <div class="dp col-6">Miejscowośc</div><div class="dp col-6"><input type="text" placeholder="kolor" name="kolor"></div><div class="cl"></div> 
              <div class="dp col-6">Kraj</div><div class="dp col-6"><input type="text" placeholder="ubezpieczenie" name="ubezpieczenie"></div><div class="cl"></div> 
              
    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
              <button type="submit" class="btn btn-primary">Zatwierdź</button>
            </form>
            </div>
          </div>
        </div>
      </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>
</html>