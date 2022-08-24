<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "pendaftaran_kp";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$Tempat_KP       = "";
$Alamat_Kp       = "";
$Tanggal_mulai   = "";
$Tanggal_selesai = "";
$Proposal        ="";

if(isset($_POST['submit'])){
    $Tempat_KP        = $_POST['Tempat_KP'];
    $Alamat_Kp        = $_POST['Alamat_KP'];
    $Tanggal_mulai    = $_POST['Tanggal_mulai'];
    $Tanggal_selesai  = $_POST['Tanggal_selesai'];
    $Proposal         = $_POST['Proposal'];

    if($Tempat_KP  && $Alamat_Kp && $Tanggal_mulai && $Tanggal_selesai && $Proposal){
        $sql1 = "insert into pendaftaran_kp(Tempat_KP,Alamat_KP,Tanggal_mulai,Tanggal_selesai,Proposal) values ('$Tempat_KP', '$Alamat_KP', '$Tanggal_mulai', '$Tanggal_selesai', '$Proposal',)";
        $sql1 = mysqli_query($koneksi,$sql1)
        if($q1){
            $sukses     = "Berhasil memasukkan data baru";
        }else{
            $error      = "Gagal memasukkan data";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
            Create / Edit Data
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="NIM" class="col-sm-2 col-form-label">Tempat_kp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tempat_KP" name="Tempat_KP" value="<?php echo $Tempat_KP ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="janda" class="col-sm-2 col-form-label">Alamat_kp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Alamat_KP" nama="Alamat_KP" value="<?php echo $Alamat_Kp ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="blabla" class="col-sm-2 col-form-label">Tanggal_mulai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tanggal_mulai" nama="Tanggal_mulai" value="<?php echo $Tanggal_mulai ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Namamu" class="col-sm-2 col-form-label">Tanggal_selesai</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Tanggal_selesai" nama="Tanggal_selesai" value="<?php echo $Tanggal_selesai ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Nama" class="col-sm-2 col-form-label">Proposal</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Proposal" nama="Proposal" value="<?php echo $Proposal ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan data" class="btn btn-success"/>
                    </div>
                </form>
            </div>
        </div>

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