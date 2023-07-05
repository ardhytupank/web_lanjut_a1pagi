<?php
require "../functions.php";

$id_prodi = $_POST["id_prodi"];
?>

<div class="col-sm-10">
  <label>Nama Prodi</label>
  <input type="text" class="form-control" id="nama_prodi" placeholder="Input nama prodi" value="<?= prodi_satu($id_prodi, "nama_prodi"); ?>">
  <p id="lihat_nama_prodi" class="peringatan"></p>
</div>
<div class="col-sm-2">
  <button class="btn btn-success mt-4" id="simpan_edit_prodi" id_prodi="<?= $id_prodi; ?>">Edit</button>
</div>

<script>
  $("#simpan_edit_prodi").click(function() {
    var nama_prodi = $("#nama_prodi").val()
    var id_prodi = $(this).attr("id_prodi")
    $.ajax({
      type: "POST",
      url: "controller/edit_prodi.php",
      data: "nama_prodi=" + nama_prodi + "&id_prodi=" + id_prodi,
      success: function(data) {
        console.log(data)
      }
    })
  })
</script>