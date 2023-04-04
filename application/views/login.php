<div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url(); ?>/assetsv2/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <?php if(!empty(validation_errors())): ?>
                            <div class="alert alert-dismissible alert-primary">
                            <!--  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>-->
                                <strong><?php echo validation_errors(); ?></strong>
                                
                            </div>
                            <?php endif; ?>

                            <?php if(!empty($errors)): ?>
                                <div class="alert alert-dismissible alert-primary">
                                <strong><?php echo $errors['error_message']; ?></strong>
                                
                                </div>
                            
                            <?php endif; ?>
                        <div class="login-form">
                            <?php echo form_open('login'); ?>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <!-- <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                </div> -->
                                <!-- <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button> -->
                                <input type="submit" class="au-btn au-btn--block au-btn--green m-b-20" value="sign in" name="login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
