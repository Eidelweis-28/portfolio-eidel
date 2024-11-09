<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css.css"> <!-- Menghubungkan style.css -->

  <style>
    /* Background and Font Styling */
    body {
      background: linear-gradient(to bottom, #ffc6e5, #ffb3dc);
      color: #d75a7f;
      font-family: 'Comic Sans MS', cursive, sans-serif;
      padding-top: 20px; /* Memberi jarak untuk konten di bawah navbar */

    }
    .navbar-custom {
      background-color: #ff9ecf;
      color: #fff;
      padding: 15px;
      text-align: center;
      position: fixed; /* Membuat navbar tetap di atas */
      top: 0; /* Menempatkan di bagian atas */
      left: 0; /* Menempatkan di sisi kiri */
      right: 0; /* Menempatkan di sisi kanan */
      z-index: 1000; /* Memastikan navbar di atas konten lain */
      animation: fadeInDown 0.5s; /* Menambahkan animasi masuk */
    }

  
    
    
    .navbar-custom {
      background-color: #ff9ecf;
      color: #fff;
      padding: 15px;
      text-align: center;
      position: relative; /* Memungkinkan animasi posisi */
    }
    
    .navbar-custom {
      background-color: #ff9ecf;
      color: #fff;
      padding: 15px;
      text-align: center;
      position: relative; /* Memungkinkan animasi posisi */
    }
    
    .navbar-custom img {
      position: relative; /* Posisi relatif untuk animasi */
      animation: superCuteAnimation 1.5s infinite; /* Animasi CSS */
    }

    @keyframes superCuteAnimation {
      0% {
        transform: translateY(0) scale(1); /* Posisi awal */
      }
      25% {
        transform: translateY(-15px) scale(1.1) rotate(5deg); /* Melompat dengan sedikit pembesaran dan rotasi */
      }
      50% {
        transform: translateY(0) scale(1); /* Kembali ke posisi normal */
      }
      75% {
        transform: translateY(-5px) scale(1.1) rotate(-5deg); /* Melompat sedikit dengan pembesaran dan rotasi berlawanan */
      }
      100% {
        transform: translateY(0) scale(1); /* Kembali ke posisi awal */
      }
    }

    

    /* Navbar Styling */
    .navbar-custom {
      background-color: #ff9ecf;
      color: #fff;
      padding: 15px;
      text-align: center;
    }
    .navbar-custom h1, .navbar-custom p {
      color: #fff;
    }

    @keyframes fadeInDown {
      from {
        transform: translateY(-20px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

     /* Gaya untuk judul */
     .navbar-custom h1 {
      font-size: 3rem; /* Ukuran font lebih besar */
      color: #fff; /* Warna teks putih */
      animation: bounce 2s infinite; /* Animasi teks */
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0); /* Posisi awal */
      }
      40% {
        transform: translateY(-15px); /* Melompat ke atas */
      }
      60% {
        transform: translateY(-7px); /* Melompat sedikit */
      }
    }
    /* About Section */
    .about {
      background-color: #ffe6f2;
      padding: 30px;
      border-radius: 10px;
      border: 2px solid #ffb3dc;
    }

    /* Portfolio Thumbnails */
    .portfolio img.img-thumbnail {
      border: 3px solid #ffb3dc;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease-in-out;
    }

    .portfolio img.img-thumbnail:hover {
      transform: scale(1.05);
    }

    /* Contact Section */
    .contact {
      background-color: #ffe6f2;
      padding: 30px;
      border-radius: 10px;
    }

    /* Buttons */
    .btn-pink {
      background-color: #ff99c8;
      border-color: #ff99c8;
      color: white;
    }

    .btn-pink:hover {
      background-color: #ff80b5;
      border-color: #ff80b5;
    }

    /* Table Styling */
    table#example {
      background-color: #fff0f8;
      color: #d75a7f;
      border: 1px solid #ffb3dc;
    }

    table#example thead {
      background-color: #ff9ecf;
      color: #ffffff;
    }

    table#example tbody tr:nth-child(odd) {
      background-color: #ffe6f2;
    }

    /* Footer */
    footer {
      background-color: #ff9ecf;
      color: #ffffff;
      padding: 15px;
      text-align: center;
    }

    /* Decorations */
    .cute-icon {
      font-size: 1.5em;
      color: #ff99c8;
    }

  </style>
</head>

<body>
  <!-- Navbar -->
  <div class="navbar-custom">
    <img src="icon.jpeg" alt="fotoku" class="rounded-circle" width="100">
    <h1>Eidelweis</h1>
    <p>Selebgram | Influencer | Marketer</p>
  </div>

  <!-- About Section -->
<section class="about" id="about">
  <div class="container">
      <h2 class="text-center">About</h2>
      <hr>
      <div class="row">
          <div class="col-md-6">
              <h3>Deskripsi Umum</h3>
              <p>Eidelweis adalah seorang selebgram dan influencer terkemuka yang dikenal dengan gaya hidupnya yang stylish dan penuh warna. Ia memiliki kemampuan unik untuk menggabungkan berbagai elemen dalam fashion, kecantikan, dan gaya hidup sehari-hari, sehingga menarik perhatian banyak orang. Dengan pengikut yang setia dan luas di berbagai platform media sosial, Eidelweis tidak hanya sekadar berbagi gambar, tetapi juga menceritakan kisah di balik setiap postingan.</p>
              <p>Sebagai seorang kreator konten, Eidelweis menyajikan berbagai topik mulai dari tips kecantikan, inspirasi outfit, hingga panduan gaya hidup sehat. Ia sering mengadakan sesi tanya jawab dan berinteraksi dengan pengikutnya melalui komentar dan live streaming, menjadikannya sosok yang sangat dekat dengan audiensnya.</p>
              <p>Melalui konten-konten yang kreatif dan menarik, Eidelweis menginspirasi banyak orang untuk mengeksplorasi kepribadian mereka sendiri dan mengekspresikan diri dengan cara yang positif. Ia juga menjadi role model bagi banyak orang yang ingin mengejar karier di dunia influencer dan pemasaran digital.</p>
          </div>
          <div class="col-md-6">
              <h3>Keahlian dan Komitmen</h3>
              <p>Sebagai seorang marketer handal, ia memanfaatkan keahliannya untuk membangun merek dan menciptakan kampanye yang efektif, menjadikannya sosok yang diperhitungkan dalam dunia digital. Dengan kombinasi antara kreativitas dan strategi pemasaran yang cerdas, Eidelweis tidak hanya berbagi kecintaannya terhadap fashion, kecantikan, dan gaya hidup, tetapi juga mengedukasi pengikutnya tentang pentingnya branding dan pemasaran di era digital.</p>
              <p>Melalui perjalanan kariernya yang terus berkembang, Eidelweis berkomitmen untuk terus berinovasi dan memberikan inspirasi, baik sebagai influencer maupun sebagai marketer yang sukses.</p>
          </div>
      </div>
  </div>
</section>




 <!-- Portfolio Section -->
<section class="portfolio" id="portfolio">
  <div class="container text-center">
      <h2>Portfolio</h2>
      <hr>
      <div class="row">
          <div class="col-md-4"><img src="6.jpeg" alt="" class="img-thumbnail"></div>
          <div class="col-md-4"><img src="2.jpeg" alt="" class="img-thumbnail"></div>
          <div class="col-md-4"><img src="3.jpeg" alt="" class="img-thumbnail"></div>
          <div class="col-md-4"><img src="4.jpeg" alt="" class="img-thumbnail"></div> <!-- New Image -->
          <div class="col-md-4"><img src="5.jpeg" alt="" class="img-thumbnail"></div> <!-- New Image -->
          <div class="col-md-4"><img src="pp - Copy.jpeg" alt="" class="img-thumbnail"></div> <!-- New Image -->
      </div>
  </div>
</section>


  <!-- Contact Section -->
  <section class="contact" id="contact">
    <div class="container">
      <h2 class="text-center">Contact</h2>
      <hr>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button class="btn btn-pink">Send</button>
    </div>
  </section>

  <!-- Influencer Table -->
  <section class="jumbotron text-center">
    <h2>Top Indonesian Influencers</h2>
    <table id="example" class="display">
      <thead>
        <tr>
          <th>Nama Asli</th>
          <th>Nama Selebgram</th>
          <th>Followers</th>
          <th>Username TikTok</th>
          <th>Username Instagram</th>
          <th>Channel YouTube</th>
        </tr>
      </thead>
      <tbody>
        <tbody>
          <tr>
            <td>Midori Eidelweis Putri Rinjani</td>
            <td>Eidelweis</td>
            <td>100M+</td>
            <td>@Eidelweis</td>
            <td>@Eidelweisloafs</td>
            <td>Eidelweis_Official</td>
        </tr>
          <tr>
              <td>Raffi Ahmad</td>
              <td>Raffi Ahmad</td>
              <td>60M+</td>
              <td>@raffinagita1717</td>
              <td>@raffinagita1717</td>
              <td>RANS Entertainment</td>
          </tr>
          <tr>
              <td>Ria Ricis</td>
              <td>Ria Ricis</td>
              <td>30M+</td>
              <td>@riaricis</td>
              <td>@riaricis1795</td>
              <td>Ricis Official</td>
          </tr>
          <tr>
              <td>Nagita Slavina</td>
              <td>Nagita Slavina</td>
              <td>30M+</td>
              <td>@nagitaslavina</td>
              <td>@nagitaslavina</td>
              <td>RANS Entertainment</td>
          </tr>
          <tr>
              <td>Gisella Anastasia</td>
              <td>Gisel</td>
              <td>30M+</td>
              <td>@gisel_la</td>
              <td>@gisel_la</td>
              <td>Gisella Anastasia</td>
          </tr>
          <tr>
              <td>Prilly Latuconsina</td>
              <td>Prilly Latuconsina</td>
              <td>10M+</td>
              <td>@prillylatuconsina</td>
              <td>@prillylatuconsina</td>
              <td>Prilly Latuconsina</td>
          </tr>
          <tr>
              <td>Awkarin</td>
              <td>Aurora</td>
              <td>7M+</td>
              <td>@awkarin</td>
              <td>@awkarin</td>
              <td>Aurora Official</td>
          </tr>
          <tr>
              <td>Felicya Angelista</td>
              <td>Felicya Angelista</td>
              <td>7M+</td>
              <td>@felicyangelista</td>
              <td>@felicyangelista</td>
              <td>Felicya Angelista</td>
          </tr>
          <tr>
              <td>Rizky Billar</td>
              <td>Rizky Billar</td>
              <td>9M+</td>
              <td>@rizkybillar</td>
              <td>@rizkybillar</td>
              <td>Rizky Billar</td>
          </tr>
          <tr>
              <td>Jessica Iskandar</td>
              <td>Jedar</td>
              <td>8M+</td>
              <td>@jessicaiskandar</td>
              <td>@jessicaiskandar</td>
              <td>Jedar Official</td>
          </tr>
          <tr>
              <td>Rachel Vennya</td>
              <td>Rachel Vennya</td>
              <td>4M+</td>
              <td>@rachelvennya</td>
              <td>@rachelvennya</td>
              <td>Rachel Vennya</td>
          </tr>
          <tr>
              <td>Paula Verhoeven</td>
              <td>Paula Verhoeven</td>
              <td>4M+</td>
              <td>@paulaverhoeven</td>
              <td>@paulaverhoeven</td>
              <td>Paula Verhoeven</td>
          </tr>
          <tr>
              <td>Dinda Hauw</td>
              <td>Dinda Hauw</td>
              <td>5M+</td>
              <td>@dindahauw</td>
              <td>@dindahauw</td>
              <td>Dinda Hauw</td>
          </tr>
          <tr>
              <td>Rudy Salim</td>
              <td>Rudy Salim</td>
              <td>3M+</td>
              <td>@rudysalim</td>
              <td>@rudysalim</td>
              <td>Rudy Salim</td>
          </tr>
          <tr>
              <td>Ayla Dimitri</td>
              <td>Ayla Dimitri</td>
              <td>3M+</td>
              <td>@ayladimitri</td>
              <td>@ayladimitri</td>
              <td>Ayla Dimitri</td>
          </tr>
          <tr>
              <td>Chika Jessica</td>
              <td>Chika Jessica</td>
              <td>2M+</td>
              <td>@chikajessica</td>
              <td>@chikajessica</td>
              <td>Chika Jessica</td>
          </tr>
          <tr>
              <td>Teuku Riefky</td>
              <td>Teuku Riefky</td>
              <td>2M+</td>
              <td>@teukuriefky</td>
              <td>@teukuriefky</td>
              <td>Teuku Riefky</td>
          </tr>
          <tr>
              <td>Gita Savitri</td>
              <td>Gita Savitri</td>
              <td>1M+</td>
              <td>@gitasavitri</td>
              <td>@gitasavitri</td>
              <td>Gita Savitri</td>
          </tr>
          <tr>
              <td>Putri Tanjung</td>
              <td>Putri Tanjung</td>
              <td>1M+</td>
              <td>@putritanjung</td>
              <td>@putritanjung</td>
              <td>Putri Tanjung</td>
          </tr>
          <tr>
              <td>Alika Islamadina</td>
              <td>Alika Islamadina</td>
              <td>1M+</td>
              <td>@alikaislamadina</td>
              <td>@alikaislamadina</td>
              <td>Alika Islamadina</td>
          </tr>
      </tbody>
    </table>
  </section>

   <!-- Modal -->
   <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aboutModalLabel">Tentang Eidelweis</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3>Deskripsi Umum</h3>
          <p>Eidelweis adalah seorang selebgram dan influencer terkemuka yang dikenal dengan gaya hidupnya yang stylish dan penuh warna. Ia memiliki kemampuan unik untuk menggabungkan berbagai elemen dalam fashion, kecantikan, dan gaya hidup sehari-hari, sehingga menarik perhatian banyak orang. Dengan pengikut yang setia dan luas di berbagai platform media sosial, Eidelweis tidak hanya sekadar berbagi gambar, tetapi juga menceritakan kisah di balik setiap postingan.</p>
          <p>Sebagai seorang kreator konten, Eidelweis menyajikan berbagai topik mulai dari tips kecantikan, inspirasi outfit, hingga panduan gaya hidup sehat. Ia sering mengadakan sesi tanya jawab dan berinteraksi dengan pengikutnya melalui komentar dan live streaming, menjadikannya sosok yang sangat dekat dengan audiensnya.</p>
          <h3>Keahlian dan Komitmen</h3>
          <p>Sebagai seorang marketer handal, ia memanfaatkan keahliannya untuk membangun merek dan menciptakan kampanye yang efektif, menjadikannya sosok yang diperhitungkan dalam dunia digital. Dengan kombinasi antara kreativitas dan strategi pemasaran yang cerdas, Eidelweis tidak hanya berbagi kecintaannya terhadap fashion, kecantikan, dan gaya hidup, tetapi juga mengedukasi pengikutnya tentang pentingnya branding dan pemasaran di era digital.</p>
          <p>Melalui perjalanan kariernya yang terus berkembang, Eidelweis berkomitmen untuk terus berinovasi dan memberikan inspirasi, baik sebagai influencer maupun sebagai marketer yang sukses.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <i class="bi bi-heart-fill cute-icon"></i>
    <p>&copy; 2024 | built by Eidelweis</p>
  </footer>

  <!-- JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

  <script>
    $(document).ready(function () {
      $("#example").DataTable({
        paging: true,
        searching: true,
        ordering: true,
        pageLength: 5,
        lengthMenu: [5, 10, 20],
        columnDefs: [{
          targets: 2,
          render: function (data, type, row) {
            if (type === 'sort') return parseInt(data.replace('M+', '')) * 1000000;
            return data;
          }
        }],
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
      });
    });
  </script>
</body>

</html>
