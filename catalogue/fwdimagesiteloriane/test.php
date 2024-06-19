<!DOCTYPE html>
<html>
    <head>
        <title>Exemples JS</title>
    </head>
    <body>
        <script type="text/javascript">
            function submitconfirm() 
            {
                /*var result = confirm("Voulez-vous vraiment quitter cette page?");
                    if (result == true) {
                        alert("Merci de votre visite")
                    }
                    else {
                        alert("Merci de rester avec nous");
                    }*/
            var mail = document.fcontact.email.value;
            //var mail = document.forms["fcontact"]["email"].value;
            var password = document.fcontact.password.value;
            if (password == "" || mail == "") {
                alert ("Veuillez saisir votre login et votre mot de passe")
                document.fcontact.password.focus();
                return false;
            }
            atpos = mail.indexof("@");
            dotpos = mail.indexof(".");
            if (atpos < 1 || (dotpos - atpos <2))
            {
                alert("Entrez un mail valide");
                document.fcontact.email.focus();
                return false;
            }
            }
        </script>

        <form name="fcontact" action="" method="post" onsubmit="return submitconfirm()">
            <div> <input type = "text" name = "email"></div>
            <div> <input type="text" name = "password"></div>    
        <input type="submit" value="Valider">
        </form>

    </body>

</html>