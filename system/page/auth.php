<?php

if(isset($_SESSION['login'])){
    echo "<script>location.href = '/?page=home'</script>";
}

?>
<div class="container">
<?php

if(isset($_POST['name'])){
// REGISTER

// EMAIL CHECK
    $mailc = $class->db("SELECT","SELECT * FROM users WHERE email = ?",array($_POST['email']));
    if($mailc){
    ?>
    <div class="alert alert-warning mt-3">
    <b><i class="fas fa-spider"></i> ระบบ!</b> อีเมลล์นี้ถูกใช้งานแล้วกรุณาลองใหม่อีกครั้ง
    </div>
    <?php
    }else{
        $reg = $class->db("INSERT","INSERT INTO `users`(`uid`, `name`, `email`, `password`) VALUES (NULL,?,?,?)",array($_POST['name'],$_POST['email'],md5($_POST['password'])));
        ?>
    <div class="alert alert-success mt-3">
    <b><i class="fas fa-spider"></i> ระบบ!</b> สมัครสมาชิกชเรียบร้อยเข้าสู่ระบบได้เลย
    </div>
        <?php
    }
}elseif(isset($_POST['login'])){
// LOGIN
    $loginc = $class->db("SELECT","SELECT * FROM users WHERE email = ? AND password = ?",array($_POST['email'],md5($_POST['password'])));
    if($loginc){
        $_SESSION['login'] = $loginc['uid'];
        header("location: /?page=home");
    }else{
    ?>
    <div class="alert alert-danger mt-3">
    <b><i class="fas fa-spider"></i> ระบบ!</b> อีเมล หรือ รหัสผ่านไม่ถูกต้องกรุณาลองใหม่
    </div>
    <?php
    }


}
?>
    <div class="row">

        <div class="col-sm-6 mt-3">
            <div class="card">
                <div class="card-body">
                <center>
                <h3><i class="fas fa-key"></i> เข้าสู่ระบบ</h3>
                <hr>
                </center>
                <form action="/?page=auth" method="post" name="login">
                    <input type="hidden" name="login">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="อีเมลล์" required>
                    <br>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
                    <br>
                    <button type="submit" class="btn btn-block btn-primary">เข้าสู่ระบบ</button>
                </form>
                </div>
            </div>
        </div>

        <div class="col-sm-6 mt-3">
            <div class="card">
                <div class="card-body">
                <center>
                <h3><i class="fas fa-user-plus"></i> สมัครสมาชิก</h3>
                <hr>
                </center>
                <form action="/?page=auth" method="post" name="reg">
                    <label for="name">Full name</label>
                    <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" required>
                    <br>

                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="อีเมลล์" required>
                    <br>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
                    <br>
                    <button type="submit" class="btn btn-block btn-secondary">สมัครสมาชิก</button>

                </form>
                </div>
            </div>
        </div>

    </div>
</div>