// Fungsi NAVBAR
$(".halaman").click(function(){
    var id_halaman = $(this).attr("id")
    if (id_halaman == "halaman_mahasiswa") {
        $("#halaman_body").load("halaman_mahasiswa.php")
    }else if (id_halaman == "halaman_beranda") {
        $("#halaman_body").load("halaman_beranda.php")
    }else if(id_halaman == "halaman_prodi"){
        $("#halaman_body").load("halaman_prodi.php")
    }
})

$("#halaman_body").load("halaman_beranda.php")