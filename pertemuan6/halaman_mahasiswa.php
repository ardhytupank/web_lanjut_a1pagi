<div class="row">
            <div class="col-sm-8">
                <p id="alert_berhasil"></p>
                <h4>Daftar Mahasiswa</h4>
                <table class="table" id="tabel_mahasiswa">
                    <tr>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Nilai</th>
                        <th>Program Studi</th>
                    </tr>
                    <tr>
                        <td>9090123</td>
                        <td>Jokowi</td>
                        <td>58</td>
                        <td>Teknik Informasi</td>
                    </tr>
                    <tr>
                        <td>9090124</td>
                        <td>Puan</td>
                        <td>38</td>
                        <td>Sistem Informasi</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-4">
                <h4>Tambah Data Mahasiswa</h4>
                <div class="form-group">
                    <label>NPM</label>
                    <input type="number" class="form-control" id="npm">
                    <p id="tampil_npm" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" id="mahasiswa" class="form-control">
                    <p id="tampil_nama_mahasiswa" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Nilai</label>
                    <input type="number" id="nilai" class="form-control">
                    <p id="tampil_nilai" class="peringatan"></p>
                </div>
                <div class="form-group">
                    <label>Program Studi</label>
                    <select class="form-control" id="program_studi">
                        <option value="" selected>Pilih Program Studi</option>
                        <option>Sistem Informasi</option>
                        <option>Teknik Informasi</option>
                        <option>Sains Data</option>
                    </select>
                    <p id="tampil_program_studi" class="peringatan"></p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <button class="btn btn-danger">Batal</button>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group" style="text-align: right;">
                            <button class="btn btn-info" id="simpan">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script>
    $("#simpan").click(function(){
    var npm = $("#npm").val()
    if (npm == "") {
        $("#tampil_npm").text("NPM masih kosong!")
    }else{
        $("#tampil_npm").text("")
    }

    var nama_mahasiswa = $("#mahasiswa").val()
    if (nama_mahasiswa == "") {
        $("#tampil_nama_mahasiswa").text("Nama mahasiswa masih kosong!")
    }else{
        $("#tampil_nama_mahasiswa").text("")
    }

    var nilai = $("#nilai").val()
    if (nilai == "") {
        $("#tampil_nilai").text("Nilai tidak kosong!")
    }else{
        $("#tampil_nilai").text("")
    }

    var prodi = $("#program_studi").val()
    if (prodi == "") {
        $("#tampil_program_studi").text("Prodi belum dipilih!")
    }else{
        $("#tampil_program_studi").text("")
    }

    if (npm != "" && nama_mahasiswa != "" && nilai != "" && prodi != "") {
        // alert("Data berhasil ditambahkan!")
        console.log("Ok")
        $("#alert_berhasil").html(`
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Add Successfully!</strong> Data berhasil ditambahkan.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        `)
        // Buat codingan add table disini
        var tabel_mahasiswa = document.getElementById("tabel_mahasiswa")
        var baris = tabel_mahasiswa.insertRow(1)
        var kolom_npm = baris.insertCell(0)
        var kolom_nama_mahasiswa = baris.insertCell(1)
        var kolom_nilai = baris.insertCell(2)
        var kolom_prodi = baris.insertCell(3)

        kolom_npm.innerHTML = npm
        kolom_nama_mahasiswa.innerHTML = nama_mahasiswa
        kolom_nilai.innerHTML = nilai
        kolom_prodi.innerHTML = prodi

        $("#npm").val("")
        $("#mahasiswa").val("")
        $("#nilai").val("")
           
    }

})
</script>