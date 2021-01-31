<html>
<head>
  <title>Formulir siswa</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<div class="jumbotron text-center">
  <h1>Data Siswa</h1><p></p>
   <a href="form_simpan.php" class="btn btn-info" role="button">Tambah Data</a>
  <a href="login.php" class="btn btn-info" role="button">Login</a></center><br></br>
</div>
<body><center>
  <table border="1" width="100%">
  <tr>
    <th>No</th>
    <th>Foto</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Email</th>
    <th>Asal Sekolah</th>
    <th>Warga Negara</th>
    <th>Nama IBU</th>
    <th>Nama Ayah</th>
    <th>Penghasilan Orang Tua</th>
    <th>Nomer HP</th>
    <th>Alamat</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM siswa");
  $sql->execute(); // Eksekusi querynya
  $no = 1;
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no++;
    echo "<td><img 
    src='images/".$data['foto']."'
     width='50' height='50'></td>";
    echo "<td>".$data['nis']."</td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['jenis_kelamin']."</td>";
    echo "<td>".$data['email']."</td>";
    echo "<td>".$data['asal_smp']."</td>";
    echo "<td>".$data['wn']."</td>";
    echo "<td>".$data['nm_ibu']."</td>";
    echo "<td>".$data['nm_ayah']."</td>";
    echo "<td>".$data['Penghasilan_ortu']."</td>";
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "</tr>";
  }
  ?>
  </table></center>
  <p></p><p><a href="grafik.php" class="btn btn-info" role="button">Grafik</a></p>
  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: <?php echo json_encode($nama); ?>,
        datasets: [{
          label: 'Grafik Jenis kelamin',
          data: <?php echo json_encode($jenis_kelamin); ?>,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255,99,132,1)',
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versi</b> <b>Formulir</b> <b>Pendaftaran</b> 
        </div>
        <strong>Copyright &copy; 2021 <a href="#">A R P</a>.</strong> Keep the spirit aliv.
      </footer>
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>