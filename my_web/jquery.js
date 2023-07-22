// Fungsi NAVBAR
$(".halaman").click(function(){
    var id_halaman = $(this).attr("id")
    if (id_halaman == "halaman_mahasiswa") {
        $("#halaman_body").load("halaman_mahasiswa.php")
    }else if (id_halaman == "halaman_beranda") {
        $("#halaman_body").load("halaman_beranda.php")
    }else if(id_halaman == "halaman_prodi"){
        $("#halaman_body").load("halaman_prodi.php")
    }else if (id_halaman == "login") {
        $("#halaman_body").load("view/login.php")
    }else if (id_halaman == "registrasi") {
        $("#halaman_body").load("view/registrasi.php")
    }else if (id_halaman == "profile") {
        $("#halaman_body").load("view/profile.php")
    }
})

$("#halaman_body").load("halaman_beranda.php")