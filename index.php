<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikas Perhitungan Diskon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Charis+SIL:ital,wght@0,400;0,700;1,400;1,700&display=swap');
    body {
        background-color:#A59D84;
        font-family: "Charis SIL", serif;
        font-weight: 700;
        font-style: normal;
    }
</style>

<body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="text-center"><marquee>APLIKASI PERHITUNGAN DISKON</marquee></h2>
            <form method="post" class="border rounded bg-light p-2">
                <label class="form-label">Harga Barang(Rp)</label>
                <input type="number" name="harga" class="form-control" min="0" step="0,01" placeholder="masukan harga barang..." autocomplete="off" 
                 onkeypress="return event.charCode >=48 && event.charCode <= 57">
                <label class="form-label">Diskon(%)</label>
                <input type="text" name="diskon" class="form-control" maxlength="3" min="0" step="0,01" placeholder="masukan diskon..." autocomplete="off" 
                 onkeypress="return event.charCode >=48 && event.charCode <= 57">

                <button type="submit" class="btn btn-secondary w-100 mt-2" name="hitung">Hitung</button>
                <button  class="btn btn-secondary w-100 mt-2" name="hapus">Hapus</button>
            </form>

            <?php 
             if (isset($_POST['hitung'])) {
                $harga = $_POST['harga'];
                $diskon = $_POST['diskon'];

                if ($harga < 0) {
                    echo "<script>alert('harga tidak boleh negatif')</script>";
                }elseif ($diskon < 0 || $diskon > 100) {
                    echo"<script>aler('diskon harus diantara 1-100')</script>";
                }else {
                    $nilai_diskon = $harga * ($diskon/100);
                    $total_harga = $harga - $nilai_diskon;?>
                    <div class="border rounded bg-light p-2 mt-2" name="hapus">
                        <p>harga : Rp.<b><?php echo number_format($harga,2,',','.')?></b></p>
                        <p>harga diskon :Rp. <b><?php echo number_format($nilai_diskon,2,',','.')?></b></p>
                        <p>total harga setelah diskon : Rp.<b><?php echo number_format($total_harga,2,',','.')?></b></p>
                    
                    <?php
                }
            }
            ?>
        </div>
      </div>
      </div>
      </div>
      <p class="text-center">&copy; UKK | RAFLI SETIAWAN | XII</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        function reset(){
            var reset = document.getElementsByName('hapus');
            hapus.remove();

            
        }
    </script>

</body>
</html>