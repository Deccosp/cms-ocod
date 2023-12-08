
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/depan/')?>assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="<?= base_url('assets/depan/')?>css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Login Pages</h4></a>

                            <?= $this->session->flashdata('massage');?>
    
                                <form action="<?= base_url('admin/auth');?>" method="post" class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
                                        <?= form_error('username','<small class="text-danger pl-5">','</small>');?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
                                        <?= form_error('password','<small class="text-danger pl-5">','</small>');?>
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                                <!-- <p class="mt-5 login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= base_url('assets/depan/')?>plugins/common/common.min.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/custom.min.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/settings.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/gleek.js"></script>
    <script src="<?= base_url('assets/depan/')?>js/styleSwitcher.js"></script>
</body>
</html>





