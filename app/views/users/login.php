<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="form-layout">
            <?php flash('register_success'); ?>
            <h2>Login</h2>
            <p>Please fill in your credentials to login</p>
            <form method="post" action="<?=URLROOT;?>/users/login">
            
            <!-- Email -->
                <div class="form-group">
                <label for="email">Email: <sup>*</sup></label>
                <input type="email" name="email" id="" class="form-control form-control-lg 
                <?php echo (!empty($data['email_err']))? 'is-invalid' : '' ;?>" value="<?= $data['email'];?>">
                <span class="invalid-feedback"><?=$data['email_err'];?></span>
                </div>
            
            <!-- Password -->
                <div class="form-group">
                <label for="password">Password: <sup>*</sup></label>
                <input type="password" name="password" id="" class="form-control form-control-lg 
                <?php echo (!empty($data['password_err']))? 'is-invalid' : '' ;?>" value="<?= $data['password'];?>">
                <span class="invalid-feedback"><?=$data['password_err'];?></span>
                </div>

                <div class="form-buttons">

                        <input type="submit" value="Login" class="btn light-blue-bg">


                        <a href="<?= URLROOT;?>/users/register" class="btn">Don't have an Account?  Register</a>

                </div>

            </form>

            
            </div>
        </div>
    </div>




<?php require APPROOT . '/views/inc/footer.php'; ?>