<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Home.css" type="text/css" media="" />
        <title>Il fagiolo magico</title>
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
                <h2>Articoli più in vista:</h2>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
            </ul>
            <ul>
                <h2>Prodotti più venduti:</h2>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
                <li><a href="undefined.html">Come coltivare</a></li>
            </ul>
        </aside>
        <article>
            <h1>Pianta carnivora di super mario</h1>
            La Pianta Piranha (Piranha Plant - パックン フラワー, Pakkun Furawā?, Pakkun Flower) è una pianta carnivora che compare in quasi tutti i titoli del videogioco. 
            Generalmente, nelle avventure bidimensionali queste piante spuntano dai classici tubi appartenenti al mondo di 
            
            <section>
                <img src="piranha_plant.png">
                <br/>
                
            <label for="qnt">Quantità: </label>
                <select name="Quantità" id="qnt">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select><br/>
                <label for="add">Aggiungi al carrello</label>
                <button type="submit" class="add" value="Aggiungi al carrello"/>
            </section>
            Mario, cercando di addentarlo; alcune specie possono sputare palle di fuoco, alcune invece palle di ghiaccio, 
            altre possiedono un corpo intero.<br/> Il capo di tutte le Piante Piranha è Pipino Piranha.
           
        </article>
        <div id="right">
            <h1>Benvenuto</h1>
            <h2>Accedi ora:</h2>
            <label for="usr">User</label>
            <input type="text" name="usr" id="usr" value="Username"/> <br/>
            <label for="psw">Password</label>
            <input type="password" name="psw" id="psw" value="*********"/> <br/>
            
            <button type="submit" id="log">Accedi</button> <br/>
            <a href="">Non sei registrato ? clicca qui</a>
        </div>
        
        <footer>
            copyleft all right reversed 2015. |Federico Bachis|
        </footer>
    </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
