<!-- Js scripts -->
    <!-- move top -->
    <!-- <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button> -->
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        // window.onscroll = function () {
        //     scrollFunction()
        // };

        // function scrollFunction() {
        //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        //         document.getElementById("movetop").style.display = "block";
        //     } else {
        //         document.getElementById("movetop").style.display = "none";
        //     }
        // }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
        <span class="close" style="display: none;">&times;</span>
        <h2><a href="javascript:void(0);"><i class="fa fa-gear"></i>&nbsp;&nbsp;Settings</a></h2>
        <br>
        <h2><a href="javascript:void(0);"><svg width="20" height="20" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13.15 7.49998C13.15 4.66458 10.9402 1.84998 7.50002 1.84998C4.72167 1.84998 3.34849 3.9064 2.76335 5H4.5C4.77614 5 5 5.22386 5 5.5C5 5.77614 4.77614 6 4.5 6H1.5C1.22386 6 1 5.77614 1 5.5V2.5C1 2.22386 1.22386 2 1.5 2C1.77614 2 2 2.22386 2 2.5V4.31318C2.70453 3.07126 4.33406 0.849976 7.50002 0.849976C11.5628 0.849976 14.15 4.18537 14.15 7.49998C14.15 10.8146 11.5628 14.15 7.50002 14.15C5.55618 14.15 3.93778 13.3808 2.78548 12.2084C2.16852 11.5806 1.68668 10.839 1.35816 10.0407C1.25306 9.78536 1.37488 9.49315 1.63024 9.38806C1.8856 9.28296 2.17781 9.40478 2.2829 9.66014C2.56374 10.3425 2.97495 10.9745 3.4987 11.5074C4.47052 12.4963 5.83496 13.15 7.50002 13.15C10.9402 13.15 13.15 10.3354 13.15 7.49998ZM7.5 4.00001C7.77614 4.00001 8 4.22387 8 4.50001V7.29291L9.85355 9.14646C10.0488 9.34172 10.0488 9.65831 9.85355 9.85357C9.65829 10.0488 9.34171 10.0488 9.14645 9.85357L7.14645 7.85357C7.05268 7.7598 7 7.63262 7 7.50001V4.50001C7 4.22387 7.22386 4.00001 7.5 4.00001Z" fill="currentColor" /> </svg>&nbsp;&nbsp;Archive</a></h2>
        <br>
        <h2><a href="javascript:void(0);"><i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Saved</a></h2>
        <br>
        <h2><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Logout</a></h2>
        </div>

    </div>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/loader.css'); ?>">
    <div id="custom-loader" class="overlay">
        <div class="">
            <div id="loader" >
                <label class="loader-message">Please wait...</label>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>

    <!-- common jquery plugin -->
    <script src="<?php echo base_url('assets/assets/js/jquery.min.js'); ?>"></script>
    <!-- //common jquery plugin -->

    <!-- theme switch js (light and dark)-->
    <script src="<?php echo base_url('assets/assets/js/theme-change.js'); ?>"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- libhtbox -->
    <script src="<?php echo base_url('assets/assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
    <!-- libhtbox -->

    <!-- counter for stats -->
    <script src="<?php echo base_url('assets/assets/js/counter.js'); ?>"></script>
    <!-- //counter for stats -->

    <!-- testimonial script -->
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        $(document).ready(function () {

            $('.client-single').on('click', function (event) {
                event.preventDefault();

                var active = $(this).hasClass('active');

                var parent = $(this).parents('.testi-wrap');

                if (!active) {
                    var activeBlock = parent.find('.client-single.active');

                    var currentPos = $(this).attr('data-position');

                    var newPos = activeBlock.attr('data-position');

                    activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(
                        currentPos);
                    activeBlock.attr('data-position', currentPos);

                    $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(
                        newPos);
                    $(this).attr('data-position', newPos);

                }
            });

        }(jQuery));
    </script>
    <!-- //testimonial script -->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!--bootstrap-->
    <script src="<?php echo base_url('assets/assets/js/bootstrap.min.js'); ?>"></script>
    <!-- //bootstrap-->
    <!-- //Js scripts -->