
    <!-- footer -->
    <!-- <footer class="w3l-footer-29-main">
        <div class="footer-29-w3l py-5">
            <div class="container pt-md-5 pt-4">
                <div class="w3l-footer-text-style">
                    <div class="footer-list-cont d-flex align-items-center justify-content-between mb-5">
                        <h6 class="foot-sub-title">Contact Us</h6>
                        <div class="main-social-footer-29">
                            <a href="#facebook" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#twitter" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#instagram" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#linkedin" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row footer-top-29 pt-lg-5 pt-sm-4">
                    <div class="col-lg-3 col-sm-6">
                        <div class="address-grid">
                            <h5>10001 Alleghany st, 5th Avenue, 235 Terry, <br> London.</h5>
                            <h5 class="mt-sm-5 mt-4">Everyday: <span> 7 AM - 8 PM</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="address-grid">
                            <h5>Phone</h5>
                            <h5 class="phone-number-text mt-2"><a href="tel:+1(21) 112 7368">+1(21) 112 7368</a></h5>
                        </div>
                        <div class="address-grid mt-sm-5 mt-4">
                            <h5>E-mail</h5>
                            <h5 class="email-cont-text mt-1"> <a href="mailto:photogenic@mail.com"
                                    class="mail">photogenic@mail.com</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu pl-lg-0 mt-lg-0 mt-sm-5 mt-4">
                        <div class="address-grid">
                            <h5 class="mb-4 pb-lg-2">Support Links</h5>
                            <ul>
                                <li><a href="#privacy">Privacy Policy</a></li>
                                <li><a href="#terms"> Terms of Service</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="#support"> Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="address-grid col-lg-4 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 w3l-footer-16-main">
                        <h5>Subscribe Here</h5>
                        <form action="#" class="subscribe d-flex mt-4 pt-lg-2 mb-4" method="post">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>
                </div>
                
                <div class="w3l-copyright text-center mt-lg-5 mt-sm-4 pt-md-4 pt-3">
                    <p class="copy-footer-29">© <?php //echo date('Y'); ?> PIXES. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer> -->
    <footer class="w3l-footer-29-main">
        <div class="container">
            <div class="footer-29-w3l py-1 navbar navbar-expand-lg stroke">
                <a href="<?php echo base_url(); ?>">
                    <div class="mode-container1">
                        <i class="fas fa-home"></i>
                    </div>
                </a>
                <a href="<?php echo base_url('search'); ?>">
                    <div class="mode-container1">
                        <i class="fas fa-search"></i>
                    </div>
                </a>
                <a href="<?php echo base_url('reels'); ?>">
                    <div class="mode-container1">
                        <i class='fa-solid fa-clapperboard'></i>
                    </div>
                </a>
                <a href="<?php echo base_url('notification'); ?>">
                    <div class="mode-container1">
                        <i class="fas fa-heart"></i>
                    </div>
                </a>
                <a href="showprofile/<?php echo session_usercode; ?>">
                    <div class="mode-container1">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </a>
            </div>
        </div>
    </footer>
    <!-- //footer -->
</body>

</html>