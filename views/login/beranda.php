<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <div class="alert ">
                <span style="font-family:Monotype Corsiva; font-size: 25px;   
                color:#030303;">
                    <marquee direction="left" scrollamount="10" height="45px" width="100%"></marquee>
                </span>
            </div>
        </div>
    </div>
    <div class="row" style="display:flex; justify-content:center;">
        <div class="col-sm-4 col-xs-12 text-center">
            <!--Jika terjadi login error tampilkan pesan ini-->
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
            <?php } ?>

            <?php if (isset($_SESSION['username'])) { ?>
                <div class="alert alert-info">
                    <strong>Welcome <?= $_SESSION['nama'] ?></strong>
                </div>
            <?php
            } else { ?>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Masuk Ke Sistem</h3>
                    </div>
                    <div class="panel-body">
                        <!-- proses login, memngirim inputan ke proses_login.php -->
                        <form class="form-horizontal" action="controller/proses_login.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="user" class="form-control input-sm" placeholder="Username" required="" autocomplete="off" />
                                </div>

                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" name="pwd" class="form-control input-sm" placeholder="Password" required="" autocomplete="off" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="login" value="login" class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span>
                                        Login Sistem
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
        </div>
    <?php } ?>
    </div>
</div>