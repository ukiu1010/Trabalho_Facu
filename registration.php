<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registro de usuario | PHP</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <div>
        <?php

        ?>
    </div>

    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Preencha o formulário com os valores corretos.</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>Nome</b></label>
                        <input class="form-control" id="firstname" type="text" name="firstname" required>

                        <label for="lastname"><b>Sobrenome</b></label>
                        <input class="form-control" id="lastname" type="text" name="lastname" required>

                        <label for="email"><b>Email</b></label>
                        <input class="form-control" id="email" type="email" name="email" required>

                        <label for="phonenumber"><b>telefone</b></label>
                        <input class="form-control" id="phonenumber" type="text" name="phonenumber" required>

                        <label for="password"><b>Senha</b></label>
                        <input class="form-control" id="password" type="password" name="password" required>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
        $(function() {
            $('#register').click(function(e) {

                var valid = this.form.checkValidity();

                if (valid) {

                    var firstname = $('#firstname').val();
                    var lastname = $('#lastname').val();
                    var email = $('#email').val();
                    var phonenumber = $('#phonenumber').val();
                    var password = $('#password').val();

                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        url: 'process.php',
                        data: {
                            firstname: firstname,
                            lastname: lastname,
                            email: email,
                            phonenumber: phonenumber,
                            password: password
                        },
                        success: function(data) {
                            Swal.fire({
                                'icon': 'success',
                                'title': 'Successful',
                                'text': data,
                                'type': 'success'
                            })
                        },
                        error: function(data) {
                            Swal.fire({
                                'ico': 'error',
                                'title': 'Errors',
                                'text': 'There were errors while saving the data.',
                                'type': 'error'
                            })
                        }
                    });


                } else {

                }

            });

        });
    </script>
</body>

</html>