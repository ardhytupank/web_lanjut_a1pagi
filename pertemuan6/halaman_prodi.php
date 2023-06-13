<?php
require "functions.php";
?>
<div class="row">
    <div class="col-sm-6">
    <div class="row">
        <div class="col-sm-3">Halaman Satu</div>
        <div class="col-sm-3">Halaman Dua</div>
        <div class="col-sm-3">Halaman Tiga</div>
        <div class="col-sm-3">Halaman Empat</div>
    </div>
    </div>
</div>

<h2>Halaman Program Studi!</h2>
<div class="row">
    <div class="col-sm-5">
        <input type="text" class="form-control" placeholder="Input nama Program Studi">
    </div>
    <div class="col-sm-2">
        <button class="btn btn-info">Add</button>
    </div>
</div>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Jurusan</th>
            <th>Fakultas</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Sistem Informasi</td>
            <td>Ilmu Komputer dan Teknologi Informasi</td>
            <td>
                <button class="btn btn-primary">Detail</button>
            </td>
        </tr>
    </tbody>
</table>

<?php

?>