<div class="page-section">

    <div class="container">
        <div class="login-container fadeInLeft duration-1-5s">

            <div class="section-login">
                <div class="login-body">
                    <a href="#">
                        Subins.tech
                    </a>

                    <p>Là hệ thống dịch vụ mạng xã hội instagram với tương tác một cách an toàn.
                        Hệ thống hoạt động một cách có tổ chức, giúp tăng tương tác, tăng hiệu quả bán hàng, truyền thông.
                    </p>
                    <p>#subins , #tangsub,  #tuongtacins, #tangtheodoimienphi, #tanglikemienphi, #tanglike, #tangtheodoi, #tangcmt, #instagram</p>
                </div>

                <div class="form-login">

                    <h3 class="heading-form">Đăng ký tài khoản</h3>
                    <p class="text">Nếu bạn đã có tài khoản?
                        <a href="index.php?page=login" class="btn btn-login">Đăng nhập ngay!</a>
                    </p>

                    <form action="./admin/config/signup.php" method="POST">


                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="email" required>
                        </div>


                        <div class="form-group">
                            <label for="username">Tài khoản</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="username" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Mật khẩu</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="********" required>
                        </div>

                        <div class="form-group">
                            <label for="repassword">Nhập lại mật khẩu</label>
                            <input class="form-control" type="password" name="repassword" id="repassword" placeholder="********" required>
                        </div>

                        <div class="form-group">
                            <input type="text" value="1A5VA" class="captcha" disabled>
                            <span>
                                <input type="text" class="input-captcha" required>
                            </span>
                        </div>



                        <button type="submit" name="signup" class="btn">Đăng ký</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>