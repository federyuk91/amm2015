<html>
    <body>
        <?php
        if(empty($_POST['usr']) || empty($_POST['psw']) || empty($_POST['email']) ){
            echo "Dati mancanti o incompleti <br/>";
        }
        else{
            
            $usr = $_POST['usr'];
            $psw = $_POST['psw'];
            $email=$_POST['email'];
            
            echo "Benvenuto $usr la tua mail &egrave; $email e la tua password &egrave; $psw";
        }
        ?>
    </body>
</html>


