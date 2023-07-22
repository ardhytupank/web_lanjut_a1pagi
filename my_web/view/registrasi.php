<h1>Halaman Registrasi</h1>

<div class="row">
    <div class="col-sm-6">
        <label for="">Username</label>
        <input type="text" id="username" class="form-control">
    </div>
    <div class="col-sm-6">
        <label for="">Email</label>
        <input type="email" id="email" class="form-control">
    </div>
    <div class="col-sm-6">
        <label for="">Password</label>
        <input type="password" id="pw1" class="form-control">
    </div>
    <div class="col-sm-6">
        <label for="">Confirm Password</label>
        <input type="password" id="pw2" class="form-control">
    </div>
    <div class="col-sm-10">
        <label for="">Gambar User</label>
        <input type="file" id="gambar" class="form-control">
    </div>
    <div class="col-sm-2 mt-4">
        <button class="btn btn-primary" id="registrasi">Registrasi</button>
    </div>
</div>

<script>
    $("#registrasi").click(function(){
        var username = $("#username").val()
        var email = $("#email").val()
        var pw1 = $("#pw1").val()
        var pw2 = $("#pw2").val()

        const gambar = $("#gambar").prop('files')[0]

        let formData = new FormData()

        formData.append("gambar",gambar)
        formData.append("username",username)
        formData.append("email",email)
        formData.append("pw1",pw1)
        formData.append("pw2",pw2)

        $.ajax({
            type: "POST",
            url: "controller/simpan_registrasi.php",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data){
                console.log(data)
            }
        })

    })
</script>