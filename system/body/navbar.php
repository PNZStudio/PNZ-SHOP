    <nav class="navbar navbar-dark sticky-top navbar-expand-sm py-0 bg-primary">
    <div class="container-fluid">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php if(isset($_SESSION['login'])){ ?>
                        <a href="/?page=logout" class="nav-link active">ออกจากระบบ</a>
                    <?php }else{ ?>
                        <a href="/?page=auth" class="nav-link active">เข้าสู่ระบบ | สมัครสมาชิก</a>
                    <?php } ?>
                </li>
            </ul>
    </div>
    </nav>

    <nav class="navbar navbar-light sticky-top navbar-expand-lg bg-white">
    <div class="container-fluid">
        <a href="/?page=home" class="navbar-brand"><i class="fas fa-spider"></i> PNZ SHOP</a>
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/?page=cart" class="nav-link">
                <i class="fas fa-shopping-bag"></i> ตระกร้าสินค้า <span class="badge badge-danger">3</span>
                </a>
            </li>
        </ul>
    </div>
    </nav>