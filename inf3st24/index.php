<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>PoznaEurope</title>
        <link rel="stylesheet" href="styl9.css">
    </head>
    <body>
        <header>
            <h1>BIURO PODROZY</h1>
        </header>
        <aside>
            <h2>promocje</h2>
            <table>
                <tr>
                    <td>warszawa</td>
                    <td>od 600</td>
                </tr>
                <tr>
                    <td>wenecja</td>
                    <td>od 1200</td>
                </tr>
                <tr>
                    <td>paryz</td>
                    <td>od 1200</td>
                </tr>
            </table>
        </aside>
        <main>
            <h2>Wtym roku jedziemy do</h2>
            <?php

            $db = mysqli_connect('localhost',  'root', '', 'podróże');

            $q = 'SELECT nazwaPliku, podpis FROM `zdjecia` ORDER BY podpis;';

            $result = mysqli_query($db, $q);

            while($row = mysqli_fetch_array($result)){

               echo '<img src="'.$row['nazwaPliku'].'" alt="'.$row['podpis'].'" title"'.$row['podpis'].'">';

            }

            ?>

        </main>
        <aside>
            <h2>Kontakt</h2>
            <a href="mail: biuro@wycieczki.pl">naipzs do nsa</a>
            <p>telefon: 372882312</p>
        </aside>
        <section>
            <h3>W poprzednich latach byliśmy:</h3>
            <ol>
                <?php
                $q = 
                $result = mysqli_query($db, $q);
                echo '<li> Dnia <data> pojechalismy';
                ?>
            </ol>
        </section>
        <footer>
            <p>Strone wykonał: jaxd</p>
        </footer>
    </body>
</html>