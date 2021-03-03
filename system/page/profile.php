<?php

if(!isset($_SESSION['login'])){
    echo "<script>location.href = '/?page=auth'</script>";
}

?>
<div class="container mt-3">

    <div class="col-sm-6 m-auto">
<?php
if(isset($_POST['name'])){
    if(isset($_POST['password'])){
        $class->db("UPDATE","UPDATE `users` SET `name`=?,`email`=?,`password`=? WHERE uid = ?",array($_POST['name'],$_POST['email'],md5($_POST['password']),$_SESSION['login']));
    }else{
        $class->db("UPDATE","UPDATE `users` SET `name`=?,`email`=? WHERE uid = ?",array($_POST['name'],$_POST['email'],$_SESSION['login']));
    }
?>
        <div class="alert alert-primary">
        <b><i class="fas fa-spider"></i>ระบบ!</b> บันทึกเรียบร้อย
        </div>
<?php
}
?>
        <div class="card">
            <div class="card-body">
            <h3><i class="fas fa-user"></i> Profile (ข้อมูลส่วนตัว)</h3>
            <hr>
            <form action="/?page=profile" method="post">
            
            <h4>Name : </h4>
            <input type="text" name="name" class="form-control" value="<?php echo $class->me($_SESSION['login'])['name']; ?>" required><br>
            <h4>Email : </h4>
            <input type="email" name="email" class="form-control" value="<?php echo $class->me($_SESSION['login'])['email']; ?>" required><br>
            <h4>Password : </h4>
            <input type="password" name="password" class="form-control" placeholder="รหัสผ่านใหม่">
            <br>
            <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-save"></i> Save Profile</button>


            </form><br>
            <button class="btn btn-block btn-secondary"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </div>
        </div>
    </div>

</div>