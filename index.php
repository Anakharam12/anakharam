<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "pendaftaran_kp";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$Tempat_kp          = "";
$Alamat_kp          = "";
$Tanggal_mulai      = "";
$Tanggal_selesai    = "";
$Proposal           = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto { width:800px }
        .card { margin-top: 10px;}
    </style>
</head>

<body>
    <div class="mx-auto">
        <!--untuk memasukkan data-->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="Tempat_kp" class="col-sm-2 col-form-label">Tempat_kp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tempat_kp" name="Tempat_kp" value="<?php echo $Tempat_kp ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Alamat_kp" class="col-sm-2 col-form-label">Alamat_kp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tempat_kp" name="Tempat_kp" value="<?php echo $Alamat_kp ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Tanggal_mulai" class="col-sm-2 col-form-label">Tanggal_mulai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tanggal_mulai" name="Tanggal_mulai" value="<?php echo $Tanggal_mulai ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Tanggal_selesai" class="col-sm-2 col-form-label">Tanggal_selesai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tanggal_selesai" name="Tanggal_selesai" value="<?php echo $Tanggal_selesai ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Proposal" class="col-sm-2 col-form-label">Proposal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Proposal" name="Proposal" value="<?php echo $Proposal ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="simpan data" class="btn btn-primary/>
                    </div>
                </form>
            </div>
        </div>
        <!--untuk mengeluarkan data-->
        <div class="card">
            <div class="card-header text-white bg-primary">
                Data Mahasiswa
            </div>
            <div class="card-body">

            </div>
        </div>
    </div>
</body>

</html>