<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="imumur/x-icon" href="img/nbc.png" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- font awsome -->
  <link rel="stylesheet" href="css/fontawesome.css" />
  <link rel="stylesheet" href="css/brands.css" />
  <link rel="stylesheet" href="css/solid.css" />

  <link rel="stylesheet" href="css/gaya.css">

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">

  <title>Naive Bayes</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/nbc.png" alt="" width=50 height=50>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Naive Bayes
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_simulasi.php">Data Latih</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" style='margin-top:90px'>
    <div class="row">
      <div class="col-12 mt-5">
        <h2 class="tebal text-center">Naive Bayes</h2>
        <p class="desc mt-4">Naïve Bayes Classifier merupakan sebuah metoda klasifikasi yang berakar pada teorema Bayes.
          Metode pengklasifikasian dengan menggunakan metode probabilitas dan statistik yg dikemukakan oleh ilmuwan Inggris Thomas Bayes,
          yaitu memprediksi peluang di masa depan berdasarkan pengalaman di masa sebelumnya sehingga dikenal sebagai Teorema Bayes.
          Ciri utama dr Naïve Bayes Classifier ini adalah asumsi yang sangat kuat (naïf) akan independensi dari masing-masing kondisi / kejadian.
          Menurut Olson Delen (2008) menjelaskan Naïve Bayes untuk setiap kelas keputusan, menghitung probabilitas dg syarat bahwa kelas keputusan adalah benar,
          mengingat vektor informasi obyek. Algoritma ini mengasumsikan bahwa atribut obyek adalah independen.
          Probabilitas yang terlibat dalam memproduksi perkiraan akhir dihitung sebagai jumlah frekuensi dari " master " tabel keputusan.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mt-4">
        <h3 class="tebal text-center">Simulasi Probabilitas Seorang Wanita Menderita Diabetes</h3>
      </div>
      <div class="col-3"></div>
      <div class="col-6">
        <form method="POST" class="mt-3">

          <div class="form-group">
            <label for="hamil">Jumlah Kehamilan :</label>
            <select name="hamil" id="hamil" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih jumlah kehamilan anda--</option>
              <option value="Kehamilan Rendah">Kehamilan Rendah (0-5 kali)</option>
              <option value="Kehamilan Sedang">Kehamilan Sedang (6-10 kali)</option>
              <option value="Kehamilan Tinggi">Kehamilan Tinggi (11-15 kali)</option>
              <option value="Kehamilan Sangat Tinggi">Kehamilan Sangat Tinggi (>15 kali)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="glukosa">Kadar Glukosa :</label>
            <select name="glukosa" id="glukosa" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih kadar glukosa anda--</option>
              <option value="Glukosa Rendah">Glukosa Rendah (< 70)</option> <option value="Glukosa Normal">Glukosa Normal (70-108)</option>
              <option value="Prediabetes">Prediabetes (109-125)</option>
              <option value="Diabetes">Diabetes (>125)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="tekanan">Tekanan Darah (mm Hg) :</label>
            <select name="tekanan" id="tekanan" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih tekanan darah anda--</option>
              <option value="Hipotensi">Hipotensi (< 60)</option> <option value="Normal">Normal (60-79)</option>
              <option value="Prahipertensi">Prahipertensi (80-89)</option>
              <option value="Hipertensi tingkat 1">Hipertensi tingkat 1 (90-99)</option>
              <option value="Hipertensi tingkat 2">Hipertensi tingkat 2 (100-119)</option>
              <option value="Hipertensi krisis">Hipertensi krisis (>120)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="tebal">Tebal Kulit (mm):</label>
            <select name="tebal" id="tebal" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih ketebalan kulit anda--</option>
              <option value="Tipis">Tipis (< 24)</option> <option value="Normal">Normal (24-36)</option>
              <option value="Tebal">Tebal (37-49)</option>
              <option value="Sangat Tebal">Sangat Tebal (>49)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="insulin">Insulin (mu U/ml):</label>
            <select name="insulin" id="insulin" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih kadar insulin anda--</option>
              <option value="Insulin Sedikit">Insulin Sedikit (0-85)</option>
              <option value="Insulin Sedang">Insulin Sedang (86-169)</option>
              <option value="Insulin Cukup Tinggi">Insulin Cukup Tinggi (170-254)</option>
              <option value="Insulin Tinggi">Insulin Tinggi (255-338)</option>
              <option value="Insulin Sangat Tinggi">Insulin Sangat Tinggi (>339)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="BMI">BMI (kg/m^2):</label>
            <select name="BMI" id="BMI" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih BMI anda--</option>
              <option value="Kurus">Kurus (< 18,5)</option> <option value="Normal">Normal (18,5-22,9)</option>
              <option value="Gendut">Gendut (23-24,9)</option>
              <option value="Obesitas Tipe 1">Obesitas Tipe 1 (25-29,9)</option>
              <option value="Obesitas Tipe 2">Obesitas Tipe 2 (>30)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="riwayat">Riwayat Diabetes Keluarga :</label>
            <select name="riwayat" id="riwayat" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih riwayat diabetes keluarga anda--</option>
              <option value="Nihil">Nihil (0,08-0,31)</option>
              <option value="Kurang">Kurang (0,32-0,55)</option>
              <option value="Sedang">Sedang (0,56-0,78)</option>
              <option value="Cukup Tinggi">Cukup Tinggi (0,79-1,01)</option>
              <option value="Tinggi">Tinggi (1,02-1,25)</option>
              <option value="Sangat Tinggi">Sangat Tinggi (1,26-1,48)</option>
              <option value="Pasti">Pasti (1,49-1,72)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="umur">Umur (tahun):</label>
            <select name="umur" id="umur" class="form-control selBox" required="required">
              <option value="" disabled selected>-- pilih umur anda--</option>
              <option value="Remaja">Remaja (21-25)</option>
              <option value="Dewasa">Dewasa (26-45)</option>
              <option value="Lansia">Lansia (46-65)</option>
              <option value="Manula">Manula (>65)</option>
            </select>
          </div>

          <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary col-12 mt-3" id="dor" onclick="return simulasi()" />
          </div>

        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-12 mt-5 mb-5">
        <div id="hasilSIM" style="margin-bottom:30px;">

        </div>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <footer class="pumur-footer font-small abu1">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Grid row-->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-5">

          <div class="text-center">
            Naive Bayes Diabetes
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 abu2">© <?php echo date('Y'); ?> Copyright Bainur Bagus Abu Denny
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- validasi -->
  <script>
    $(document).ready(function() {
      $('.toggle').click(function() {
        $('ul').toggleClass('active');
      });
    });
  </script>

  <script>
    function simulasi() {
      var hamil = $("#hamil").val();
      var glukosa = $("#glukosa").val();
      var tekanan = $("#tekanan").val();
      var tebal = $("#tebal").val();
      var insulin = $("#insulin").val();
      var BMI = $("#BMI").val();
      var riwayat = $("#riwayat").val();
      var umur = $("#umur").val();

      //validasi
      var ha = document.getElementById("hamil");
      var gl = document.getElementById("glukosa");
      var te = document.getElementById("tekanan");
      var tb = document.getElementById("tebal");
      var ins = document.getElementById("insulin");
      var bm = document.getElementById("BMI");
      var ri = document.getElementById("riwayat");
      var um = document.getElementById("umur");

      if (ha.selectedIndex == 0) {
        alert("Jumlah kehamilan Tidak Boleh Kosong");
        return false;
      }

      if (gl.selectedIndex == 0) {
        alert("Tingkat glukosa Tidak Boleh Kosong");
        return false;
      }

      if (te.selectedIndex == 0) {
        alert("Tekanan darah Tidak Boleh Kosong");
        return false;
      }

      if (tb.selectedIndex == 0) {
        alert("Ketebalan kulit Tidak Boleh Kosong");
        return false;
      }

      if (ins.selectedIndex == 0) {
        alert("Tingkat insulin Tidak Boleh Kosong");
        return false;
      }

      if (bm.selectedIndex == 0) {
        alert("BMI Tidak Boleh Kosong");
        return false;
      }

      if (ri.selectedIndex == 0) {
        alert("Riwayat kedekatan diabetes Tidak Boleh Kosong");
        return false;
      }

      if (um.selectedIndex == 0) {
        alert("Umur Tidak Boleh Kosong");
        return false;
      }

      //batas validasi

      $.ajax({
        url: 'simulasi.php',
        type: 'POST',
        dataType: 'html',
        data: {
          hamil: hamil,
          glukosa: glukosa,
          tekanan: tekanan,
          tebal: tebal,
          insulin: insulin,
          BMI: BMI,
          riwayat: riwayat,
          umur: umur
        },
        success: function(data) {
          document.getElementById("hasilSIM").innerHTML = data;
        },
      });

      return false;

    }
  </script>

  <script>
    $(document).ready(function() {
      $('#dor').click(function() {
        $('html, body').animate({
          scrollTop: $("#hasilSIM").offset().top
        }, 500);
      });
    });
  </script>
</body>

</html>