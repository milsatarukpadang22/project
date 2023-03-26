<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>FILM ANIMASI</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
            $url = 'http://www.omdbapi.com/?apikey=45f49812&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $film) {
                
                echo "\n <p>Judul: ".$film["Title"]."</p>";
                echo "<p>Tahun: ".$film["Year"]."</p>";
                echo '<img src= "'.$film['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>FILM ANIMASI</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>top animasi</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="kartun2.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">monster</h5>
        <p class="card-text">Monsters, Inc. adalah sebuah film animasi komputer yang diproduksi oleh Pixar Animation Studios dan dirilis oleh Walt Disney Pictures pada 2 November 2001. Cerita ini memiliki prekuel yang berjudul Monsters University yang telah dirilis pada 21 Juni 2013</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="DRAGON.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">dragon</h5>
        <p class="card-text">Long ago up North on the Island of Berk, the young Viking, Hiccup, wants to join his town's fight against the dragons that continually raid their town. However, his macho father and village leader, Stoik the Vast, will not allow his small, clumsy, but inventive son to do so. Regardless, Hiccup ventures out into battle and downs a mysterious Night Fury dragon with his invention, but can't bring himself to kill it. Instead, Hiccup and the dragon, whom he dubs Toothless, begin a friendship that would open up both their worlds as the observant boy learns that his people have misjudged the species. But even as the two each take flight in their own way, they find that they must fight the destructive ignorance plaguing their world.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="frozen.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">frozen</h5>
        <p class="card-text">Fearless optimist Anna teams up with rugged mountain man Kristoff and his loyal reindeer Sven and sets off on an epic journey to find her sister Elsa, whose icy powers have trapped the kingdom of Arendelle in eternal winter. Encountering Everest-like conditions, mystical trolls and a hilarious snowman named Olaf, Anna and Kristoff battle the elements in a race to save the kingdom. From the outside Elsa looks poised, regal and reserved, but in reality she lives in fear as she wrestles with a mighty secret: she was born with the power to create ice and snow. It's a beautiful ability, but also extremely dangerous. Haunted by the moment her magic nearly killed her younger sister Anna, Elsa has isolated herself, spending every waking minute trying to suppress her growing powers.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="film toy story.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">toy story</h5>
        <p class="card-text">A little boy named Andy loves to be in his room, playing with his toys, especially his doll named "Woody". But, what do the toys do when Andy is not with them, they come to life. Woody believes that his life (as a toy) is good. However, he must worry about Andy's family moving, and what Woody does not know is about Andy's birthday party. Woody does not realize that Andy's mother gave him an action figure known as Buzz Lightyear, who does not believe that he is a toy, and quickly becomes Andy's new favorite toy. Woody, who is now consumed with jealousy, tries to get rid of Buzz.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="zootopia.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">zootopia</h5>
        <p class="card-text">Zootopia is a 2016 American computer-animated buddy cop action comedy film produced by Walt Disney Animation Studios and released by Walt Disney Pictures.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="moana.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Moana</h5>
        <p class="card-text"> Film Moana menceritakan seorang gadis berusia 16 tahun yang punya rasa ingin tahu tinggi dan tertarik untuk menjelajahi lautan.
</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>