function verifLength()
{
  if (document.getElementById("password").value.length < 3 )
     {
        document.getElementById("message1").innerHTML = "Attention : Votre pseudo doit contenir 3 lettres au minimum !";
     //   alert("Attention : Votre pseudo doit contenir 3 lettres au minimum !");
        return false;
      }
  else
     {
        return true;
     }
}

