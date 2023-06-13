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
        alert("Data berhasil ditambahkan!")
        // Buat codingan add table disini
           
    }

})