<?php
require "functions.php";
?>

<h2>Halaman Program Studi!</h2>

<p id="notif"></p>

<div class="row">
    <div class="col-sm-10">
        <label>Nama Prodi</label>
        <input type="text" class="form-control" id="nama_prodi" placeholder="Input nama prodi">
        <p id="lihat_nama_prodi" class="peringatan"></p>
    </div>
    <div class="col-sm-2">
        <button class="btn btn-info mt-4" id="simpan_prodi">Simpan</button>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-sm table-dark">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama Prodi</th>
                <th>Updated</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach (prodi() as $p) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $p["id"]; ?></td>
                    <td><?= $p["nama_prodi"]; ?></td>
                    <td><?= $p["edit"]; ?></td>
                    <td>
                        <button class="btn btn-success btn-sm">
                            Edit
                        </button>
                        <button class="btn btn-sm btn-danger hapus-prodi" id_prodi="<?= $p["id"]; ?>">Hapus</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(".hapus-prodi").click(function() {
        var id_prodi = $(this).attr("id_prodi")
        $.ajax({
            type: "POST",
            url: "controller/hapus_prodi.php",
            data: "id_prodi=" + id_prodi,
            success: function(data) {
                if (data == "gagal") {
                    $("#notif").html(`
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> Data Gagal Dihapus!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        `)
                } else if (data == "berhasil") {
                    $("#halaman_body").load("halaman_prodi.php")
                    alert("Data berhasil dihapus!")
                }
            }
        })
    })

    $("#simpan_prodi").click(function() {
        var nama_prodi = $("#nama_prodi").val()
        if (nama_prodi == "") {
            $("#lihat_nama_prodi").text("Nama Prodi Masih kosong!")
        } else {
            $.ajax({
                type: "POST",
                url: "controller/simpan_prodi.php",
                data: "nama_prodi=" + nama_prodi,
                success: function(data) {
                    if (data == "gagal") {
                        $("#notif").html(`
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> Data sudah ada sebelumnya.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        `)
                    } else if (data == "berhasil") {
                        $("#halaman_body").load("halaman_prodi.php")
                        alert("Data berhasil ditambahkan")
                    }
                }
            })

            $("#lihat_nama_prodi").text("")
        }
    })
</script>