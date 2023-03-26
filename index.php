<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>FILM</title>

</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";

            $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=422ac7ee&s="' .$judul.'"';

           //Akses API dengan CURL

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];

            foreach ($data['Search'] as $movie) {

                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 

  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h3>MOVIES</h3>

    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>

    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>

<div class="container_new" style=background-image:url('bgg.jpg');>
<div class="container">
<div class="row mt-3 text-center text-">
  <div class="col">
<h1>FILM ACTION</h1>
<div class="spinner-border text-primary" role="status">
  <span class="sr-only"></span>
</div>
</div>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="gambar1.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Top Gun: Maverick</h5>
        <p class="card-text">Mengisahkan 30 tahun setelah kejadian di film Top Gun (1986), Pete "Maverick" Mitchell (Tom Cruise) kembali dipanggil atas perintah Ice Man.
Sebagai pilot pesawat jet tempur, Maverick dipercaya untuk melatih para awak agar bisa menggunakan pesawat jet tempur lagi.

Di sisi lain, Bradley "Rooster" Bradshaw, anak mendiang Goose (Maverick Lt. Nick Breadshaw) menyalahkan Maverick atas kematian ayahnya.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar2.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Bullet Train</h5>
        <p class="card-text">Ceritanya, di dalam sebuah kereta berkecepatan tinggi dari Tokyo ke Morioka, ada lima orang pembunuh bayaran.

Yaitu Ladybug , Kimura , Prince , Tangerine , dan Lemon.

Meski mereka tidak saling kenal, ternyata tugas yang masing-masing mereka dapatkan, saling berhubungan.

Setelah menyadari rahasia berbahaya yang tengah mereka emban, mereka pun harus melawan satu sama lain untuk bertahan hidup.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar3.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Operation Fortune: Ruse de guerre</h5>
        <p class="card-text">Operation Fortune: Ruse de guerre menceritakan, agen rahasia Orson Fortune (Jason Statham) tengah bekerja sama dengan agen CIA Aubrey Plaza (Sarah Fidel).

Mereka sepakat merekrut bintang Hollywood, Danny Francesco (Josh Hartnett) untuk ditugaskan dalam misi penyamaran.

Dengan tujuan untuk menghentikan seorang miliarder yang menjual senjata mematikan dan membahayakan dunia.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar4.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">The Pirates: The Last Royal Treasure</h5>
        <p class="card-text">Mengisahkan sekelompok bajak laut yang tengah mencari harta karun keluarga Goryeo.

Sayangnya, tak ada yang tahu pasti di mana letak harta karun tersebut tersembunyi.

Hae-Geum (Cahe Soo-bin) dan Han-Goong (Sehun EXO) akan bergabung sebagai kru bajak laut bersama Hae-Rang (Han Hyoo-Joo), Mak-yi (Lee Kwang-Soo), Han-Goong (Oh Se-Hun), dan So-Nyeo (Chae So-Bi).</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar5.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">Uncharted</h5>
        <p class="card-text">Uncharted Mengisahkan tentang pemburuan harta karun.

Dimana, Nathan Drake (Tom Holland) melakukan pemburuan harta karun pertamanya bersama Victor Sullivan (Mark Wahlberg).

Mereka berjuang menemukan barang antik yang tersembunyi, melawan musuh jahat, dan berusaha menyelamatkan diri dari jebakan mematikan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gambar6.jpg" class="card-img-top" height="350px">
      <div class="card-body">
        <h5 class="card-title">The Gray Man</h5>
        <p class="card-text">Berkisah tentang Court Gentry alias Sierra Six (Ryan Gosling), mantan agen CIA yang kini dipekerjakan menjadi pembunuh bayaran.

Ia pun ditugaskan menjalankan misi gelap untuk membongkar rahasia dari sebuah agensi besar.

Sayangnya, situasi berbalik dan Six berubah menjadi sasaran yang diburu di berbagai penjuru dunia oleh Lloyd Hansen (Chris Evans), rekanan CIA.

Bersama agen Dani Miranda (Ana de Armas), mereka pun terlibat perkelahian sengit yang mematikan.</p>
      </div>
    </div>
  </div>
      </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
