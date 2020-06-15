<?php

session_start();

if (isset($_SESSION['userlogin'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Site pessoal</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2b2fb53803.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="img/logo.png" class="brand_logo" alt="Programing Knowledge logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form>
                        <div class="input-group mb-3">
                            <div class="input-group-apprend">
                                <span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
                            </div>
                            <input type="text" name="username" id="username" class="form_control input_user" required>
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-apprend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form_control input_pass" required>
                        </div>
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="button" name="button" id="login" class="btn login_btn">Login</button>
                </div>
                </form>
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        Não Tem uma Conta? <a href="registration.php" class="m1-2">Cadastre-se</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#login').click(function(e) {
                var valid = this.form.checkValidity();
                if (valid) {
                    var username = $('#username').val();
                    var password = $('#password').val();
                }
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'jslogin.php',
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(data) {
                        alert(data);
                        if ($.trim(data) === "1") {
                            setTimeout(' window.location.href = "index.php"', 1000);
                        }
                    },
                    error: function(data) {
                        alert('There were erros while doing the operation.');
                    }
                });
            });
        });
    </script>
</body>

</html>