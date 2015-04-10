<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Home.css" type="text/css" />
        <title>Il fagiolo magico</title>
        <style type="text/css" media="screen and (max-width:800px)">
            @media screen and (max-width:1200px){
                header{
                    background-color: green;
                }
                aside{
                    display: none;
                }
                article{
                    max-width: 100%;
                    height: auto;
                    margin-top: 10px;
                    border-top: 1px green solid;
                }
                #right{
                    float: none;
                    width: 100%;
                    height: auto;
                }
            }
        </style>
    </head>
    <body>
        <div id="container">
        <header>
            Il fagiolo magico
        </header>
        <nav>
            <a href="index.php">Home</a>
            <a href="index.php">News!</a>
            <a href="index.php">Recenti</a>
            <a href="index.php">Carrello</a>
            <a href="index.php">Storico</a>
            <a href="index.php">Profilo</a>
        </nav>
        <aside>
            <ul>
                <h3>Articoli più in vista:</h3>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
            </ul>
            <ul>
                <h3>Prodotti più venduti:</h3>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
            </ul>
        </aside>
        <div id="right">
            <h1>Benvenuto</h1>
            <?php
            if(empty($_POST['usr'])){
            ?>
            <h2>Accedi ora:</h2> <br/>
            <form action="index.php" method="post">
                
            <label for="usr">Username : </label>
            <input type="text" id="usr" name="usr"/>
            <br/>
                <!--<label for="psw">Password:<br/></label>
                <input type="password" name="psw" id="psw" value="*********"/> -->
                <input type="submit" value="invia">
            </form>
            <a href="">Non sei registrato ? clicca qui</a>
            <?php } else { 
                $usr=$_POST['usr'];
            echo "$usr <br/>";} ?>
            
        </div>
        <article>
            <h1>Pianta carnivora di super mario</h1>
            La Pianta Piranha (Piranha Plant - パックン フラワー, Pakkun Furawā?, Pakkun Flower) è una pianta carnivora che compare in quasi tutti i titoli del videogioco. 
            Generalmente, nelle avventure bidimensionali queste piante spuntano dai classici tubi appartenenti al mondo di 
            <section>
                <img src="piranha_plant.png">
                <br/>
                
            <label for="qnt">Quantità: </label>
                <select name="Quantità" id="qnt">
                    <?php
                    for($i=0;$i<10;$i++){
                    ?>
                    <option value="<?php echo $i;?>">
                        <?php echo $i; ?>
                    </option>
                    <?php } ?>
                </select><br/>
                <label for="add">Aggiungi al carrello</label>
                <button type="submit" class="add" value="Aggiungi al carrello"/>
            </section>
            Mario, cercando di addentarlo; alcune specie possono sputare palle di fuoco, alcune invece palle di ghiaccio, 
            altre possiedono un corpo intero.<br/> Il capo di tutte le Piante Piranha è Pipino Piranha.
        </article>
    </div>
        
        
        <footer>
            copyleft all right reversed 2015. |Federico Bachis|
        </footer>
        <?php
        // put your code here
        ?>
    </body>
</html>
