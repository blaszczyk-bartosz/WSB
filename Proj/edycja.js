function dane()
{
  var ma = document.getElementById("wer").value;

  if (ma=="")
  {
    alert("Nie wprowadzono wszystkich danych! Spróbuj ponownie!");
    return false;
  }

    else
  {
      alert("Zmienione dane będą widoczne po ponownym zalogowaniu!");
  }
}

function danedowod()
{

  var nrd = document.getElementById("nrd").value;
  var dwa = document.getElementById("nrd").value;
  var dlugosc = nrd.length;

  for (i=0; i<3; i++)
    {
      if (nrd.charCodeAt(0) >= 65 && nrd.charCodeAt(0) <= 90 && nrd.charCodeAt(1) >= 65 && nrd.charCodeAt(1) <= 90 && nrd.charCodeAt(2) >= 65 && nrd.charCodeAt(2) <= 90 && nrd.charCodeAt(i)!=32 )
      alert("Zmienione dane będą widoczne po ponownym zalogowaniu!");
    }
    alert("Wprowadzono błędne dane! Spróbuj ponownie!");
    return false;
}