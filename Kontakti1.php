<?php
    $dbc = mysqli_connect('localhost', 'root', '', 'ejlinipodaci');
    $query = "SELECT * FROM ejlaupit";
    $result = mysqli_query($dbc , $query);
    $exist = false;

	if(isset($_POST['Ime']) and isset($_POST['Mail']) and isset($_POST['Poruka'])){
		$Ime = $_POST['Ime'];
		$Mail = $_POST['Mail'];
		$Poruka = $_POST['Poruka'];

		$query = "INSERT INTO ejlaupit(Ime, Mail, Poruka) VALUES ('" . $_POST['Ime'] . "', '" . $_POST['Mail'] . "',  '" . $_POST['Poruka'] . "')";
	}
    mysqli_query($dbc , $query);
 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="Ejlass.css"/>
        <meta charset="utf-8">
        <title>Kontakt</title>
    </head>

    <body>

<!-- NAV BAR!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
      <div class="topnav">
        <div class="dropdown">
          <button type="button">Recepti</button>
              <div class="dropdown-content">
                <a href="browniecheesecake.html">Brownie Cheesecake</a>
                <a href="tisuculistica.html">Tisucu Listica</a>
                <a href="fruitcheesecake.html">Fruit Cheesecake</a>
                <a href="minichocolatemuffins.html">Mini Chocolate Muffins</a>
                <a href="cokoladnekocke.html">Cokoladne Kocke</a>
                <a href="cupcakeodvanilije.html">Cupcake Od Vanilije</a>
                <a href="princeskrafne.html">Princes Krafne</a>
                <a href="vocnitart.html">Vocni Tart</a>
              </div>
        </div>
        <div class="dropdown">
          <button type="button">Blogovi</button>
              <div class="dropdown-content">
                <a href="http://www.slatkiblog.com/?fbclid=IwAR0V8-rTCBAsVubWBi877ZtYopdxCag3XUCIy4u5eO7K7qGlIbziEQFxg70">Slatki Blog</a>
                <a href="http://slatkisvijet.com/?fbclid=IwAR3mdI0A6pjgoQV3y3fFDwvvrcdv0r1oLzTXLaoq82W2WhVwHsC2vXLcEB8">Slatki Svjet</a>
                <a href="http://www.justcakegirl.com/?fbclid=IwAR1X7UAOu31WD3c-PM0jNJ2B6tg-7SqpqwLkDFuDRsnnhKTcU90vHaUIPbo">Just Cake Girl</a>
              </div>
        </div>
        <div class="dropdown">
          <button type="button">O meni</button>
              <div class="dropdown-content">
                <a href="oMeni.html">:)</a>
              </div>
        </div>
        <div class="dropdown">
          <button type="button">Kontakt</button>
          <div class="dropdown-content">
            <a href="Kontakti1.php">Javite se utem stranice</a>
              </div>
        </div>
           <input type="text" placeholder="Search">
     </div>

<!-- KAPKEJK IMAGEEEEE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
     <div class="kapkejkimg">
       <a href="http://localhost/ejlass/Ejlass.html">
         <img src="https://scontent.fzag1-1.fna.fbcdn.net/v/t1.15752-9/47382804_454805168379852_4806953833206906880_n.jpg?_nc_cat=109&_nc_ht=scontent.fzag1-1.fna&oh=c3aa45044584a17c77d6f166cad5bebb&oe=5CA7D28B" width=560px height=315px>
       </a>
     </div>

     <br>

     <br>

     <br>

     <br>

     <div class="naslov">
       KONTAKT/SURADNJA/PR/REKLAMA
     </div>

     <br>

     <br>

     <div class="naslov2">
       Pošaljite mi vaš upit, kritiku ili pohvalu te ću vam se javiti u najbržem mogućem roku.
     </div>

     <br>

     <br>

     <br>


<!-- FORMAAAA!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
     <form action="Kontakti1.php" method="post" class="forma1">
        Ime :
        <br>
        <input type="text" name="Ime" class="forma2" placeholder="Vaše ime">
             <br>

             <br>
       Mail :
       <br>
       <input type="text" name="Mail" class="forma3" placeholder="Vaša email adresa">
             <br>

             <br>
       Poruka :
       <br>

       <textarea rows="10" type="text" name="Poruka" class="forma4" placeholder="Vaša poruka">
       </textarea>
               <br>

               <br>

             <input type="submit" value="POŠALJI" class="pošalji">
    </form>
    <br>
    <br>

    <footer>
      <a href="Ejlass.html">HOME</a>|<a href="Kontakti1.php">KONTAKT</a>|<a href="oMeni.html">O MENI</a>
      <br>
      <br>
      mAde By RoK d NuB wEbStEr
    </footer>



    </body>
</html>
