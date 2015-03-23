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
                header{height: auto; min-height: 100px;}
                aside{
                    display: none;
                    /*background-color: azure;
                    float: none;
                    width: 100%;
                    height: auto;*/
                }
                //aside ul{ display: inline; size:15px; width: 40%; float:left; border-right: 1px green solid;}
                //aside ul:hover{background-color: #ACE1AF;}
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
            <h2>Accedi ora:</h2>
            <form action=”index.php” method=”post”>
                <label for="usr">User</label>
                <input type="text" name="usr" id="usr" value="Username"/> 
                <label for="psw">Password</label>
                <input type="password" name="psw" id="psw" value="*********"/>
                <button type="submit" id="log" name="submit" value="invia">Accedi</button> <br/>
            </form>
            <a href="">Non sei registrato ? clicca qui</a>
            
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
    </div>
        
        
        <footer>
            copyleft all right reversed 2015. |Federico Bachis|
        </footer>
        <?php
        // put your code here
        ?>
    </body>
</html>
