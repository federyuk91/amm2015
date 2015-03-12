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
    </head>
    <body>
        <div id="container">
        <header>
            Intestazione
        </header>
        <nav>
            <a href="index.php">link 1</a>
            <a href="index.php">link 2</a>
            <a href="index.php">link 3</a>
            <a href="index.php">link 4</a>
            <a href="index.php">link 5</a>
            <a href="index.php">link 6</a>
        </nav>
        <aside>
            colonna sinistra
        </aside>
        <article>
            Articolo
            <section>
                sezione dell'articolo
            </section>
        </article>
        <div id="right">
            <h1>You are welcome</h1>
            <h2>Registrati ora</h2>
            <label for="psw">Password</label>
            <input type="password" name="psw" id="psw"/> <br/>
            <label for="mail">Mail</label>
            <input type="mail" name="mail" id="mail"/> <br/>
            <label for="usr">User</label>
            <input type="text" name="usr" id="usr" value="Username"/> <br/>
            <h2>Sesso:</h2>
            <label for="maschio">Maschio:</label> 
            <input type="radio" id="maschio" value="Maschio"/> <br/>
            <label for="femme">Femmina:</label> 
            <input type="radio" id="femme" value="Femmina"/> <br/>

            <textarea id="description"></textarea>

            <br/>
            <select name="title">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        
        <footer>
            note di creazione
        </footer>
    </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
