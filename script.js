$(document).ready(function() {
    function moveImage() {
      $(".navbar-custom img").animate({left: '+=10px'}, 500) // Bergerak ke kanan
        .animate({left: '-=10px'}, 500, moveImage); // Kembali ke kiri
    }
    moveImage(); // Panggil fungsi
  });
  