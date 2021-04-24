<div class="col-9">
<?php
  require_once "Models/Pegawai.php";
  $pegawai = new Pegawai();
  $all = $pegawai->alldata();
?>

<h3>Data Pegawai    <a href="index.php?hal=formPegawai"  class="btn btn-outline-secondary">Tambah</a></h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nip</th>
      <th scope="col">Nama</th>
      <th scope="col">Divisi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody >
  <?php
  $no = 1;
  foreach ($all as $all) {
  ?>
    <tr>
      <td><?=$no;?></td>
      <td><?=$all["nip"];?></td>
      <td><?=$all["nama"];?></td>
      <td><?=$all["divisi"];?></td>
      <td>
       <form method="POST" action="controller/pegawaiController.php">
          <a href="index.php?hal=detailPegawai&id=<?= $all["id"]; ?>" class="btn btn-secondary">Detail</a>
          <?php
          $role = isset($member['role']) ? $member['role'] : null;
          if (isset($member)) {
          ?>
           <a href="index.php?hal=formEditPegawai&id=<?= $all["id"]; ?>" class="btn btn-secondary disabled">Ubah</a>
          <?php
            if($role != 'staff') {
          ?>
           <button class="btn btn-danger" name="proses" value="hapus" onclick="return confirm('Data yang dipilih akan dihapus?')">Hapus</button>
           <input type="hidden" name="ids" value="<?= $all['id'];?>">
          <?php
            }
          }
          ?>
        </form>
      </td>
    </tr>
  <?php
  $no++; }
  ?>
  </tbody>
</table>
</div>