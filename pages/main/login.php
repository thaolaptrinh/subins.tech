<div class="page-section">

    <div class="container">
        <div class="login-container fadeInRight duration-1-5s">

            <div class="section-login">
                <div class="img">
                    <img src="../../images/Left.png" alt="">
                </div>

                <div class="form-login">

                    <h3 class="heading-form">Đăng nhập hệ thống</h3>
                    <p class="text">Nếu bạn chưa có tài khoản?
                        <a href="index.php?page=login/signup" class="btn btn-signup">Đăng ký ngay!</a>
                    </p>

                    <form action="./admin/config/signin.php" method="POST">
                        <div class="form-group">
                            <label for="username">Tài khoản</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="username" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="********" required>
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="checkbox" id="checkbox"> Remember me
                        </div>



                        <button type="submit" name="login" class="btn">Đăng nhập</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>