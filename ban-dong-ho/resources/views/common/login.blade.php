<!-- Trigger the modal with a button -->
<link href="{{ asset('/css/register.css') }}" rel="stylesheet" type="text/css" />
<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tài khoản</h4>
            </div>
            <div class="modal-body">
                <div class="hero">
                    <div class="form-box">
                        <div class="button-box">
                            <div id="btn2"></div>
                            <button type="button" class="toggle-btn" onclick="login()"><span
                                    style="position: absolute">Đăng nhập</span><span>Đăng nhập</span> </button>
                            <button type="button" class="toggle-btn" onclick="register()"
                                style="width: 126px;"><span style="position: absolute">Đăng ký</span><span>Đăng
                                    ký</span> </button>
                        </div>

                        <form id="login" action="" class="input-group">
                            <input type="text" class="input-field" placeholder="Tên đăng nhập" required>

                            <input type="text" class="input-field" placeholder="Nhập mật khẩu" required>
                            <input type="checkbox" class="check-box" style="height: unset"><span
                                class="spann">Lưu mật khẩu</span>
                            <button type="submit" class="submit-btn">Đăng nhập</button>
                        </form>
                        <form id="register" action="" class="input-group">
                            <input type="text" class="input-field" placeholder="Tên đăng nhập" required>
                            <input type="email" class="input-field" placeholder="Mail" required>
                            <input type="text" class="input-field" placeholder="Nhập mật khẩu" required>
                            <span class="spann"><input type="checkbox" class="check-box"
                                    style="height: unset">Tôi đồng ý điều khoản và dịch vụ</span>
                            <button type="submit" class="submit-btn">Đăng kí</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script>
    $(".openModal").click(function() {
        $("#loginModal").modal("show")
    })
</script>
<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn2");

    function register() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "130px";
    }

    function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }
</script>
