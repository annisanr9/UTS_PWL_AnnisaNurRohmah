<?php
  require_once "Models/Pegawai.php";
  $pegawai = new Pegawai();
  $data = $_REQUEST["id"];
  $details = $pegawai->detail($data);

?>

Nip    : <?= $details["nip"]; ?> </br>
Nama   : <?= $details["nama"]; ?> </br>
E-Mail : <?= $details["email"]; ?> </br>
Agama  : <?= $details["agama"]; ?> </br>
Divisi : <?= $details["divisi"]; ?> </br>
Foto : <?= $details["foto"]; ?> </br>

</br></br>

<a href="index.php?hal=dataPegawai"  class="btn btn-secondary">Kembali</a>