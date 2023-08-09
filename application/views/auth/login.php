<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #2980b9, #f44336); /* Blue to red gradient */
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #auth-left {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            height: 400px;
            margin: 0 auto;
            text-align: center;
        }

        .auth-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #000; /* Change the color to black */
        }

        .form-control-icon {
            position: absolute;
            top: 50%;
            left: 20px;
            color: #aaa;
            transform: translateY(-50%);
        }

        .btn-primary {
            background-color: #5f27cd;
            border-color: #5f27cd;
            transition: background-color 0.3s ease;
            width: 100%;
            padding: 14px;
            font-size: 18px;
            border-radius: 10px;
            margin-top: 30px;
            color: #fff;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #4d1a9c;
            border-color: #4d1a9c;
        }

        .btn-primary:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(95, 39, 205, 0.5);
        }

        .btn-primary:active {
            background-color: #4d1a9c;
            border-color: #4d1a9c;
            box-shadow: none;
        }

        .login-form-bottom-text {
            font-size: 14px;
            color: #888;
            text-align: center;
        }

        .login-form-bottom-text a {
            color: #5f27cd;
            text-decoration: none;
            font-weight: bold;
        }

        /* Style untuk logo dan ikon */
        .logo {
            max-width: 120px;
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
        }

        .form-control-icon {
            position: absolute;
            top: 50%;
            left: 20px;
            color: #aaa;
            transform: translateY(-50%);
        }

        /* Style untuk ikon tombol */
        .btn-primary .button__icon {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div id="auth">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div id="auth-left">
                <h1 class="auth-title">Selamat Datang!</h1>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                    <div class="form-group position-relative mb-4">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        <input type="text" class="form-control form-control-lg rounded-pill pl-5" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group position-relative mb-4">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <input type="password" class="form-control form-control-lg rounded-pill pl-5" id="password" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">
                        Masuk
                        <i class="bi bi-chevron-right button__icon"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
