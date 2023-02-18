
<link href="<?php echo base_url('assets/assets/notification/css/custom.css'); ?>" rel="stylesheet" type="text/css"/>
<section class="w3l-blog-single py-5" id="search">
    <div class="container py-md-5">
        <div id="ig_app" class="row">

            <section id="ig_activity" class="col-12 p-3">
                <div class="row">
                    <div class="col-2 align-self-center">
                        <span id="in_all_caught">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                    <div class="col-10 align-self-center">
                        <span class="ia_user">Search results ....</span>
                    </div>
                </div>
                <?php  
                    for ($i=0; $i < count($userdata); $i++) { 
                ?>
                <div class="row">
                    <a href="<?php echo base_url('showprofile/'.$userdata[$i]->usercode) ?>" class="col-2 align-self-center">
                        <img class="ia_user_img" src="<?php echo base_url($userdata[$i]->sProfilePhotoUrl); ?>" alt="">
                    </a>
                    <a href="<?php echo base_url('showprofile/'.$userdata[$i]->usercode) ?>" class="col-10 align-self-center">
                        <span class="ia_user"><?php echo $userdata[$i]->name; ?></span><br><?php echo $userdata[$i]->name; ?>
                    </a>
                </div>
                <?php
                    }
                ?>

            </section>

        </div>

    </div>
</section>