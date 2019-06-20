<?php

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="leave-comment mr0"><!--leave comment-->
                    
                    <h3 class="text-uppercase">Login</h3>
                    <br>
                    <form class="form-horizontal contact-form" role="form" method="post" action="">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="email" name="email"
                                       placeholder="Email"
                                value="<?= (!empty($_POST["email"])) ? $_POST["email"] : "" ?>">
                                <?php
                                if(!empty($errors["email"])){
                                    ?>
                                    <p class="alert alert-danger" role="alert"><?=$errors["email"]?> </p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="password">
                                <?php
                                if(!empty($errors["password"])){
                                    ?>
                                    <p class="alert alert-danger" role="alert"><?=$errors["password"]?> </p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn send-btn">Login</button>

                    </form>
                </div><!--end leave comment-->
            </div>
