<!DOCTYPE html>
<html lang="en">
<?php
    if(isset($_POST['submit'])){
        require_once 'dbkoneksi.php';

        $user = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $user->execute([
            $_POST['email'], $_POST['password']
        ]);

        $count = $user->rowCount(); //untuk memastikan apakah user tersedia atau tidak

        if($count > 0) {
            session_start();
            $_SESSION['user'] = $user->fetch();
            echo "<script>window.location='index1.php'</script>";
        } else {//jika gagal login
            echo "<script>window.location='login.php'</script>";
        }
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-size: 14px;
        }

        body {
            background-color: #eee;
            margin-top: 50px;
            font-family: Verdana;
        }

        div.card {
            justify-content: center;
            margin: auto;
            width: 400px;
            height: 190px;
            background-color: white;
            border-radius: 2px;
            box-shadow: 0px 3px 3px silver;
            padding: 25px;

            h1 {
                margin: 0 0 20px 0;
                font-weight: normal;
                color: #03a9f4;
                font-size: 30px;
            }

            label {
                float: left;
                padding: 10px 10px 14px 0;
                width: 175px;
                margin-top: 10px;
                clear: left;
            }

            input {
                float: right;
                border: 2px solid silver;
                padding: 8px 0;
                border-width: 0 0 2px 0;
                width: 200px;
                margin-top: 15px;
                transition: border-color .3s;

                &:focus,
                &:hover {
                    border-color: #03a9f4;
                    outline: 0;
                }

                &.warning {
                    border-color: #ff9800;
                }

                &.error {
                    border-color: #f44336;
                }

                &.valid {
                    border-color: #4caf50;
                }

                &[type=submit] {
                    border: 0;
                    background-color: white;
                    color: #03a9f4;
                    text-transform: uppercase;
                    width: auto;
                    cursor: pointer;
                }
            }
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Login</h1>
        <form action="login.php" method="POST">
        <?php if (isset($error)): ?> <!-- Tampilkan pesan kesalahan jika ada -->
                    <p><?php echo $error; ?></p>
                <?php endif; ?>

            <label>E-mail address</label>
            <input type="email" name="email" data-validate="required email" placeholder="user@example.com" />
            <label>Password</label>
            <input type="password" data-validate="required" name="password" />
            <input type="submit" name="submit" value="Login" />
        </form>
    </div>
</body>
<script>
    /**
  * Uses my experimental, modular and far from ready JavaScript framework :)
  */

    //select the modules to use
    I.use('core');
    I.use('validation');
    I.use('events');
    I.use('selectors');

    //wait for all the modules to be loaded
    I.go(function () {
        I.bind('change keyup blur focus').to('input', function (e) {
            if (I.am.valid(e)) {
                e.srcElement.className = 'valid';
            } else if (e.type === 'blur') {
                e.srcElement.className = 'error';
            } else if (I.am.empty(e.srcElement.value)) {
                e.srcElement.className = 'warning';
            } else {
                e.srcElement.className = '';
            }
        });

        I.bind('click').to('input[type="submit"]', function (e) {
            var inputs = I.select('input');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].focus();
            }
            if (I.select('input.error').length) {
                e.preventDefault();
            }
            //always nu-uh submit on codepen ;)
            e.preventDefault();
        });
    });
</script>

</html>