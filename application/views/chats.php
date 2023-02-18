<link rel="stylesheet" href="assets/assets/css/chats.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<style>
    #meetting,#incoming-call-div{
        height: calc(100vh - 56px);
        margin-left: -15px;
        margin-right: -15px;
    }
    .btn-end-call{
        position: absolute;
        bottom: 150px;
        right: 30vw;
        border-radius: 6px;
        background: #232323bd;
        color: #fff;
        height: 36px;
        width: 58px;
        opacity: 0.6;
    }
    .btn-end-call:hover{
        color: #fff;
        background: #e93136;
        opacity: 1;
    }
    @media only screen and (max-width: 900px)
    {    
        .btn-end-call {
            position: absolute;
            bottom: 15%!important;
            right: 45%!important;
            transform: translate(-0%, -0%);
        }
    }

    #incoming-call-div.flex {
    display: flex;
    }

    @media (min-width: 40em) {
    #incoming-call-div.sm-flex {
        display: flex;
    }
    }
    @media (min-width: 52em) {
    #incoming-call-div.md-flex {
        display: flex;
    }
    }
    @media (min-width: 64em) {
    #incoming-call-div.lg-flex {
        display: flex;
    }
    }
    #incoming-call-div.flex-column {
    flex-direction: column;
    }

    #incoming-call-div.flex-wrap {
    flex-wrap: wrap;
    }

    #incoming-call-div.items-start {
    align-items: flex-start;
    }

    #incoming-call-div.items-end {
    align-items: flex-end;
    }

    #incoming-call-div.items-center {
    align-items: center;
    }

    #incoming-call-div.items-baseline {
    align-items: baseline;
    }

    #incoming-call-div.items-stretch {
    align-items: stretch;
    }

    #incoming-call-div.self-start {
    align-self: flex-start;
    }

    #incoming-call-div.self-end {
    align-self: flex-end;
    }

    #incoming-call-div.self-center {
    align-self: center;
    }

    #incoming-call-div.self-baseline {
    align-self: baseline;
    }

    #incoming-call-div.self-stretch {
    align-self: stretch;
    }

    #incoming-call-div.justify-start {
    justify-content: flex-start;
    }

    #incoming-call-div.justify-end {
    justify-content: flex-end;
    }

    #incoming-call-div.justify-center {
    justify-content: center;
    }

    #incoming-call-div.justify-between {
    justify-content: space-between;
    }

    #incoming-call-div.justify-around {
    justify-content: space-around;
    }

    #incoming-call-div.content-start {
    align-content: flex-start;
    }

    #incoming-call-div.content-end {
    align-content: flex-end;
    }

    #incoming-call-div.content-center {
    align-content: center;
    }

    #incoming-call-div.content-between {
    align-content: space-between;
    }

    #incoming-call-div.content-around {
    align-content: space-around;
    }

    #incoming-call-div.content-stretch {
    align-content: stretch;
    }

    /* 1#incoming-call-div. Fix for Chrome 44 bug#incoming-call-div. https://code#incoming-call-div.google#incoming-call-div.com/p/chromium/issues/detail?id=506893 */
    #incoming-call-div.flex-auto {
    flex: 1 1 auto;
    min-width: 0;
    /* 1 */
    min-height: 0;
    /* 1 */
    }

    #incoming-call-div.flex-none {
    flex: none;
    }

    #incoming-call-div.order-0 {
    order: 0;
    }

    #incoming-call-div.order-1 {
    order: 1;
    }

    #incoming-call-div.order-2 {
    order: 2;
    }

    #incoming-call-div.order-3 {
    order: 3;
    }

    #incoming-call-div.order-last {
    order: 99999;
    }

    /* Basscss Margin */
    #incoming-call-div.m0 {
    margin: 0;
    }

    #incoming-call-div.mt0 {
    margin-top: 0;
    }

    #incoming-call-div.mr0 {
    margin-right: 0;
    }

    #incoming-call-div.mb0 {
    margin-bottom: 0;
    }

    #incoming-call-div.ml0 {
    margin-left: 0;
    }

    #incoming-call-div.mx0 {
    margin-left: 0;
    margin-right: 0;
    }

    #incoming-call-div.my0 {
    margin-top: 0;
    margin-bottom: 0;
    }

    #incoming-call-div.m1 {
    margin: 0.5rem;
    }

    #incoming-call-div.mt1 {
    margin-top: 0.5rem;
    }

    #incoming-call-div .mr1 {
    margin-right: 0.5rem;
    }

    #incoming-call-div .mb1 {
    margin-bottom: 0.5rem;
    }

    #incoming-call-div .ml1 {
    margin-left: 0.5rem;
    }

    #incoming-call-div .mx1 {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
    }

    #incoming-call-div .my1 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    }

    #incoming-call-div .m2 {
    margin: 1rem;
    }

    #incoming-call-div .mt2 {
    margin-top: 1rem;
    }

    #incoming-call-div .mr2 {
    margin-right: 1rem;
    }

    #incoming-call-div .mb2 {
    margin-bottom: 1rem;
    }

    #incoming-call-div .ml2 {
    margin-left: 1rem;
    }

    #incoming-call-div .mx2 {
    margin-left: 1rem;
    margin-right: 1rem;
    }

    #incoming-call-div .my2 {
    margin-top: 1rem;
    margin-bottom: 1rem;
    }

    #incoming-call-div .m3 {
    margin: 2rem;
    }

    #incoming-call-div .mt3 {
    margin-top: 2rem;
    }

    #incoming-call-div .mr3 {
    margin-right: 2rem;
    }

    #incoming-call-div .mb3 {
    margin-bottom: 2rem;
    }

    #incoming-call-div .ml3 {
    margin-left: 2rem;
    }

    #incoming-call-div .mx3 {
    margin-left: 2rem;
    margin-right: 2rem;
    }

    #incoming-call-div .my3 {
    margin-top: 2rem;
    margin-bottom: 2rem;
    }

    #incoming-call-div .m4 {
    margin: 4rem;
    }

    #incoming-call-div .mt4 {
    margin-top: 4rem;
    }

    #incoming-call-div .mr4 {
    margin-right: 4rem;
    }

    #incoming-call-div .mb4 {
    margin-bottom: 4rem;
    }

    #incoming-call-div .ml4 {
    margin-left: 4rem;
    }

    #incoming-call-div .mx4 {
    margin-left: 4rem;
    margin-right: 4rem;
    }

    #incoming-call-div .my4 {
    margin-top: 4rem;
    margin-bottom: 4rem;
    }

    #incoming-call-div .mxn1 {
    margin-left: -0.5rem;
    margin-right: -0.5rem;
    }

    #incoming-call-div .mxn2 {
    margin-left: -1rem;
    margin-right: -1rem;
    }

    #incoming-call-div .mxn3 {
    margin-left: -2rem;
    margin-right: -2rem;
    }

    #incoming-call-div .mxn4 {
    margin-left: -4rem;
    margin-right: -4rem;
    }

    #incoming-call-div .ml-auto {
    margin-left: auto;
    }

    #incoming-call-div .mr-auto {
    margin-right: auto;
    }

    #incoming-call-div .mx-auto {
    margin-left: auto;
    margin-right: auto;
    }

    #incoming-call-div .bkw-xlarge-heading {
    font-size: 7rem;
    margin: 0 0 0.5em;
    font-weight: 300;
    letter-spacing: -0.04em;
    line-height: 7rem;
    }

    #incoming-call-div .bkw-thin-large-heading {
    font-size: 3.5rem;
    font-weight: 300;
    margin: 0 0 1em;
    letter-spacing: -0.02em;
    line-height: 3.5rem;
    }

    #incoming-call-div h1 {
    font-size: 3rem;
    font-weight: 300;
    margin: 0 0 1em;
    line-height: 3rem;
    }

    #incoming-call-div h2 {
    font-size: 2.25rem;
    font-weight: 400;
    margin: 0 0 1em;
    line-height: 3rem;
    }

    #incoming-call-div h3 {
    font-size: 1.5rem;
    font-weight: 400;
    margin: 0 0 1em;
    line-height: 2rem;
    }

    #incoming-call-div h4 {
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0 0 1em;
    letter-spacing: 0.04em;
    line-height: 2rem;
    }

    #incoming-call-div .subheading {
    font-size: 1.125rem;
    margin: 0 0 1em;
    letter-spacing: 0.04em;
    line-height: 1.5rem;
    }

    #incoming-call-div .caption {
    font-size: 0.875rem;
    margin: 0 0 1em;
    line-height: 1.125rem;
    }

    #incoming-call-div p {
    margin: 0 0 1em;
    }

    #incoming-call-div .danger {
    background-color: #f65959;
    }

    #incoming-call-div .success {
    background-color: #99d154;
    }

    #incoming-call-div [class^=btn-].danger:hover {
    background-color: shade(#f65959, 12%);
    }

    #incoming-call-div [class^=btn-].success:hover {
    background-color: shade(#99d154, 12%);
    }

    #incoming-call-div .caller-info {
    min-height: 360px;
    }
    #incoming-call-div .caller-info .avatar-caller {
    width: 240px;
    height: 240px;
    }
    #incoming-call-div .caller-info .avatar-caller img {
    position: absolute;
    z-index: 2;
    width: inherit;
    height: inherit;
    }

    #incoming-call-div .call-buttons {
    width: 400px;
    margin-top: 5rem;
    }
    #incoming-call-div .call-buttons .btn-floating-label .btn-floating.btn-jumbo {
    width: 7rem;
    height: 7rem;
    }
    #incoming-call-div .call-buttons .btn-floating-label .btn-floating.btn-jumbo i {
    font-size: 3rem;
    line-height: 7rem;
    }
    #incoming-call-div .call-buttons .btn-floating-label h4 {
    font-weight: 300;
    margin-top: 0.5rem;
    text-align: center;
    }

    #incoming-call-div #reject i {
    transform: rotate(135deg);
    }

    @-webkit-keyframes pulse-animation {
    0% {
        opacity: 1;
        transform: scale(1);
    }
    20% {
        opacity: 1;
        transform: scale(1);
    }
    80% {
        opacity: 0;
    }
    100% {
        opacity: 0;
        transform: scale(1.5);
    }
    }

    @keyframes pulse-animation {
    0% {
        opacity: 1;
        transform: scale(1);
    }
    20% {
        opacity: 1;
        transform: scale(1);
    }
    80% {
        opacity: 0;
    }
    100% {
        opacity: 0;
        transform: scale(1.5);
    }
    }
    #incoming-call-div .ripple-wave {
    position: absolute;
    border-radius: 50%;
    z-index: 1;
    height: 240px;
    width: 240px;
    }
    #incoming-call-div .ripple-wave::before, .ripple-wave::after {
    content: "";
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: white;
    will-change: transform, opacity;
    }
    #incoming-call-div .ripple-wave::after {
    -webkit-animation: pulse-animation 2s cubic-bezier(0.24, 0, 0.38, 1) infinite;
            animation: pulse-animation 2s cubic-bezier(0.24, 0, 0.38, 1) infinite;
    transition: opacity 0.4s, transform 0.4s;
    }
    #incoming-call-div .ripple-wave .ripple-wave-2 {
    position: absolute;
    height: inherit;
    width: inherit;
    }
    #incoming-call-div .ripple-wave .ripple-wave-2::before {
    content: "";
    display: block;
    height: inherit;
    width: inherit;
    border-radius: 50%;
    background-color: white;
    -webkit-animation: pulse-animation 2s cubic-bezier(0.24, 0, 0.38, 1) infinite;
            animation: pulse-animation 2s cubic-bezier(0.24, 0, 0.38, 1) infinite;
    -webkit-animation-delay: 0.24s;
            animation-delay: 0.24s;
    }
</style>
<section class="w3l-blog-single py-5">
    <div class="container py-md-5 py-4">
        <div class="home-page__content messages-page" id="main-chat-window">
            <div class="container-fluid h-100">
                <div class="row px-0 h-100">
                <!-- start message list section  -->
                <div class="col-12 col-md-4 col-lg-5 col-xl-3 px-0 messages-page__list-scroll">

                    <!-- <div class="messages-page__header mb-0 px-4 pt-3 pb-3">
                    <span class="messages-page__title">Chats</span>
                    </div> -->
                    <div class="messages-page__search mb-0 px-3 pb-1">
                    <div class="custom-form__search-wrapper">
                        <input type="text" class="form-control custom-form" id="search" placeholder="Rechercher un message, un utilisateur…" autocomplete="off">
                        <button type="submit" class="custom-form__search-submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--search" viewBox="0 0 46.6 46.6">
                            <path d="M46.1,43.2l-9-8.9a20.9,20.9,0,1,0-2.8,2.8l8.9,9a1.9,1.9,0,0,0,1.4.5,2,2,0,0,0,1.5-.5A2.3,2.3,0,0,0,46.1,43.2ZM4,21a17,17,0,1,1,33.9,0A17.1,17.1,0,0,1,33,32.9h-.1A17,17,0,0,1,4,21Z" fill="#f68b3c" />
                        </svg>
                        </button>
                    </div>
                    </div>

                    <ul class="messages-page__list pb-3 px-1 px-md-3">
                        <?php
                            for ($i=0; $i < count($chat_users); $i++) { 
                        ?>
                            <!-- <li class="messaging-member messaging-member--online messaging-member--active"> -->
                            <li class="messaging-member messaging-member--online">
                                <a href="chats#<?php echo $chat_users[$i]->chatcode; ?>" class="messaging-member__wrapper">
                                    <div class="messaging-member__avatar">
                                        <img src="<?php echo base_url($chat_users[$i]->sProfilePhotoUrl); ?>" alt="<?php echo $chat_users[$i]->name; ?>" loading="lazy">
                                        <!-- <div class="user-status"></div> -->
                                    </div>

                                    <span class="messaging-member__name"><?php echo $chat_users[$i]->name; ?></span>
                                    <span class="messaging-member__message">Test Message !</span>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
                        <!-- <li class="messaging-member messaging-member--new messaging-member--online">
                            <div class="messaging-member__wrapper">
                                <div class="messaging-member__avatar">
                                    <img src="https://randomuser.me/api/portraits/thumb/men/74.jpg" alt="Bessie Cooper" loading="lazy">
                                    <div class="user-status"></div>
                                </div>

                                <span class="messaging-member__name">Bessie Cooper</span>
                                <span class="messaging-member__message">Yes, I need your help with the project, it need it done by tomorrow 😫</span>
                            </div>
                        </li> -->
                    </ul>
                </div>
                <!-- end message list section  -->
                <!-- start content section  -->
                <div class="chat col-12 col-md-9 col-lg-8 col-xl-9 px-0 pl-md-1">
                    <div class="chat__container">
                    <div class="chat__wrapper py-2 pt-mb-2 pb-md-3">
                        <div class="chat__messaging messaging-member--online pb-2 pb-md-2 pl-2 pl-md-4 pr-2">
                        <a href="chats#" class="chat__previous d-flex d-md-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--previous" viewBox="0 0 45.5 30.4">
                            <path d="M43.5,13.1H7l9.7-9.6A2.1,2.1,0,1,0,13.8.6L.9,13.5h0L.3,14v.6c0,.1-.1.1-.1.2v.4a2,2,0,0,0,.6,1.5l.3.3L13.8,29.8a2.1,2.1,0,1,0,2.9-2.9L7,17.2H43.5a2,2,0,0,0,2-2A2.1,2.1,0,0,0,43.5,13.1Z" fill="#f68b3c" />
                            </svg>
                        </a>
                        <!-- <div class="chat__notification d-flex d-md-none chat__notification--new">
                            <span>1</span>
                        </div> -->
                        <div class="chat__infos pl-2 pl-md-0 chat__details" id="chat-header">
                            <div class="chat-member__wrapper" data-online="true">
                            <div class="chat-member__avatar">
                                <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg" alt="Jenny Smith" loading="lazy">
                                <div class="user-status user-status--large"></div>
                            </div>
                            <div class="chat-member__details">
                                <span class="chat-member__name">Jenny Smith</span>
                                <span class="chat-member__status">Online</span>
                            </div>
                            </div>
                        </div>
                        <div class="chat__actions mr-2 ">
                            <ul class="m-0">
                            <li id="make-call">
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 48 48">
                                <path d="M38.4,48c-2.1,0-5.1-.8-9.5-3.2a62.9,62.9,0,0,1-14.6-11A61.7,61.7,0,0,1,3.2,19C-.9,11.8-.3,8.5.7,6.4A9.7,9.7,0,0,1,4.8,2,21.1,21.1,0,0,1,7.8.4h.3c1.8-.7,3-.3,4.9,1.5h.1a40.1,40.1,0,0,1,5.4,8.2c1.3,2.6,1.6,4.3-.2,6.9l-.5.6c-.8,1-.8,1.2-.8,1.6s1.9,3.4,5.2,6.7S28,30.8,28.8,31s.6,0,1.6-.8l.7-.4c2.5-1.9,4.2-1.6,6.8-.3A40.6,40.6,0,0,1,46.1,35h.1c1.8,1.9,2.2,3.1,1.5,4.9v.2h0a21.1,21.1,0,0,1-1.6,3,10,10,0,0,1-4.3,4.1A7.7,7.7,0,0,1,38.4,48ZM9.5,4.1H9.2L6.9,5.4H6.8A6.3,6.3,0,0,0,4.3,8.1c-.3.7-1.2,2.6,2.4,9A58.9,58.9,0,0,0,17.1,30.9,58.2,58.2,0,0,0,30.9,41.3c6.4,3.6,8.4,2.7,9.1,2.4a6.7,6.7,0,0,0,2.5-2.5.1.1,0,0,0,.1-.1c.5-.8.9-1.6,1.3-2.4v-.2l-.5-.6a35.4,35.4,0,0,0-7.3-4.8c-1.7-.8-1.8-.8-2.7-.1l-.6.4A5.3,5.3,0,0,1,28,34.9c-2.9-.6-7.4-4.9-8.7-6.2s-5.6-5.8-6.2-8.7.6-3.6,1.5-4.8l.4-.6c.7-.9.8-1-.1-2.7a35.4,35.4,0,0,0-4.8-7.3Z" fill="#f68b3c" />
                                </svg>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 46.8 47.4">
                                <path d="M35.8,47.4H11a11,11,0,0,1-11-11V11.6A11,11,0,0,1,11,.6h8.8a2,2,0,1,1,0,4H11a7,7,0,0,0-7,7V36.4a7,7,0,0,0,7,7H35.8a7,7,0,0,0,7-7v-9a2,2,0,1,1,4,0v9A11,11,0,0,1,35.8,47.4Z" fill="#f68b3c" />
                                <path d="M36.6,20.4A10.2,10.2,0,1,1,46.8,10.2,10.2,10.2,0,0,1,36.6,20.4ZM36.6,4a6.2,6.2,0,1,0,6.2,6.2A6.2,6.2,0,0,0,36.6,4Z" fill="#f68b3c" />
                                </svg>
                            </li>
                            <li class="chat__details d-flex d-xl-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 42.2 11.1">
                                <g>
                                    <circle cx="5.6" cy="5.6" r="5.6" fill="#d87232" />
                                    <circle cx="21.1" cy="5.6" r="5.6" fill="#d87232" />
                                    <circle cx="36.6" cy="5.6" r="5.6" fill="#d87232" />
                                </g>
                                </svg>
                            </li>
                            </ul>

                        </div>
                        </div>
                        <div class="chat__content pt-4 px-3">
                        <ul class="chat__list-messages" id="message-box">
                            <li ondblclick="dobleclick_to_reply(this)">
                                <div class="msg_container" data-id="1" data-msg="ahdsfkjasdfj">
                                    <div class="chat__bubble chat__bubble--you">
                                        <span class="reply-msg">asfasfasdfsadf</span><br>
                                        Hey, I bought something yesterdat but haven't gotten any confirmation. Do you know I if the order went through?
                                    </div>
                                    <i class="fa fa-ellipsis-v thumb" aria-hidden="true"></i>
                                </div>
                            </li>
                            <li ondblclick="dobleclick_to_reply(this)">
                                <div class="chat__bubble chat__bubble--me" data-id="2" data-msg="asefaerwrwerwerwerwer">
                                    <span class="reply-msg">asfasfasdfsadf</span><br>
                                    Hi! I just checked, your order went through and is on it's way home. Enjoy your new computer! 😃
                                </div>
                            </li>
                        </ul>
                        </div>
                        <div class="chat__send-container px-2 px-md-3 pt-1 pt-md-3">
                        <div class="custom-form__send-wrapper">
                            <div class="reply-div d-none" id="reply-div">
                                <span class="reply-container">
                                    <i class="fa fa-close" onclick="hide_send_reply()"></i>
                                </span>     
                            </div>
                            <input type="hidden" id="reply-id" value="0" />
                            <input type="text" class="form-control custom-form" id="message" placeholder="type a message …" autocomplete="off">
                            <div class="custom-form__send-img">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-img" viewBox="0 0 45.7 45.7">
                                <path d="M6.6,45.7A6.7,6.7,0,0,1,0,39.1V6.6A6.7,6.7,0,0,1,6.6,0H39.1a6.7,6.7,0,0,1,6.6,6.6V39.1h0a6.7,6.7,0,0,1-6.6,6.6ZM39,4H6.6A2.6,2.6,0,0,0,4,6.6V39.1a2.6,2.6,0,0,0,2.6,2.6H39.1a2.6,2.6,0,0,0,2.6-2.6V6.6A2.7,2.7,0,0,0,39,4Zm4.7,35.1Zm-4.6-.4H6.6a2.1,2.1,0,0,1-1.8-1.1,2,2,0,0,1,.3-2.1l8.1-10.4a1.8,1.8,0,0,1,1.5-.8,2.4,2.4,0,0,1,1.6.7l4.2,5.1,6.6-8.5a1.8,1.8,0,0,1,1.6-.8,1.8,1.8,0,0,1,1.5.8L40.7,35.5a2,2,0,0,1,.1,2.1A1.8,1.8,0,0,1,39.1,38.7Zm-17.2-4H35.1l-6.5-8.6-6.5,8.4C22,34.6,22,34.7,21.9,34.7Zm-11.2,0H19l-4.2-5.1Z" fill="#f68b3c" />
                            </svg>
                            </div>
                            <div class="custom-form__send-emoji">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send-emoji" viewBox="0 0 46.2 46.2">
                                <path d="M23.1,0A23.1,23.1,0,1,0,46.2,23.1,23.1,23.1,0,0,0,23.1,0Zm0,41.6A18.5,18.5,0,1,1,41.6,23.1,18.5,18.5,0,0,1,23.1,41.6Zm8.1-20.8a3.5,3.5,0,0,0,3.5-3.5,3.5,3.5,0,0,0-7,0,3.5,3.5,0,0,0,3.5,3.5ZM15,20.8a3.5,3.5,0,0,0,3.5-3.5A3.5,3.5,0,0,0,15,13.9a3.4,3.4,0,0,0-3.4,3.4A3.5,3.5,0,0,0,15,20.8Zm8.1,15a12.6,12.6,0,0,0,10.5-5.5,1.7,1.7,0,0,0-1.3-2.6H14a1.7,1.7,0,0,0-1.4,2.6A12.9,12.9,0,0,0,23.1,35.8Z" fill="#f68b3c" />
                            </svg>
                            </div>
                            <button type="button" id="btnsubmit" class="custom-form__send-submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--send" viewBox="0 0 45.6 45.6">
                                <g>
                                <path d="M20.7,26.7a1.4,1.4,0,0,1-1.2-.6,1.6,1.6,0,0,1,0-2.4L42.6.5a1.8,1.8,0,0,1,2.5,0,1.8,1.8,0,0,1,0,2.5L21.9,26.1A1.6,1.6,0,0,1,20.7,26.7Z" fill="#d87232" />
                                <path d="M29.1,45.6a1.8,1.8,0,0,1-1.6-1L19.4,26.2,1,18.1a1.9,1.9,0,0,1-1-1.7,1.8,1.8,0,0,1,1.2-1.6L43.3.1a1.7,1.7,0,0,1,1.8.4,1.7,1.7,0,0,1,.4,1.8L30.8,44.4a1.8,1.8,0,0,1-1.6,1.2ZM6.5,16.7l14.9,6.6a2,2,0,0,1,.9.9l6.6,14.9L41,4.6Z" fill="#d87232" />
                                </g>
                            </svg>
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- end content section  -->
                <!-- start infos section  -->
                <div class="col-12 col-md-5 col-lg-4 col-xl-3 px-4 px-sm-5 px-lg-4 user-profile" id="user-profile">
                    <!-- <div class="user-profile__close d-flex d-xl-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" viewBox="0 0 38.8 38.9">
                            <g>
                            <path d="M2,38.9a1.9,1.9,0,0,1-1.4-.5,2.1,2.1,0,0,1,0-2.9L35.4.6a1.9,1.9,0,0,1,2.8,0,1.9,1.9,0,0,1,0,2.8L3.4,38.4A1.9,1.9,0,0,1,2,38.9Z" fill="#d87232" />
                            <path d="M36.8,38.9a1.9,1.9,0,0,1-1.4-.5L.6,3.4A1.9,1.9,0,0,1,.6.6,1.9,1.9,0,0,1,3.4.6L38.2,35.5a2.1,2.1,0,0,1,0,2.9A1.9,1.9,0,0,1,36.8,38.9Z" fill="#d87232" />
                            </g>
                        </svg>
                        </div>
                        <div class="user-profile__wrapper">
                        <div class="user-profile__avatar">
                            <img src="https://randomuser.me/api/portraits/women/56.jpg" alt="Jenny Smith" loading="lazy">
                        </div>
                        <div class="user-profile__details mt-1">
                            <span class="user-profile__name">Jenny Smith</span>
                            <span class="user-profile__phone">(025) 015-234-567</span>
                            <span class="user-profile__location">New York, United States</span>
                        </div>
                        <div class="user-profile__description">
                            <p>Fly me to the moon 🌙 If you feel like your life is a routine, step back and take a deep breath.</p>
                        </div>
                        <div class="user-profile__learning mt-4">
                            <span class="user-profile__label">Social Medias</span>
                            <ul class="user-profile__tags user-profile__tags--primary mt-2">
                            <li><a href="https://www.instagram.com/tiantsoa_sh/" target="_blank">Instagram</a></li>
                            <li><a href="https://www.linkedin.com/in/tiantsoa-rabemananjara-254655152/" target="_blank">Linkedin</a></li>
                            <li><a href="https://codepen.io/tiantsoa" target="_blank">Codepen</a></li>
                            </ul>
                        </div>
                        <div class="user-profile__hobbies">
                            <span class="user-profile__label">Activities</span>
                            <ul class="user-profile__tags user-profile__tags--secondary mt-2">
                            <li>Biking</li>
                            <li>Cooking</li>
                            <li>Traveling</li>
                            <li>Grahic design</li>
                            </ul>
                        </div>
                    </div> -->
                </div>
                <!-- end infos section  -->
                </div>
            </div>
        </div>
        <div id="Meeting-main-div" class="d-none">
            <div id="meetting" class="align-items-center"></div>
            <section class="section" id="leave">
                <button type="button" class="btn btn-end-call btn-block"><i class="fa fa-phone" aria-hidden="true"></i></button>
            </section>
        </div>
        <div id="incoming-call-div" class="d-none">
            <div class="flex flex-column items-center justify-center wrapper-caller-info" style="min-height: 100%;">
                <section class="caller-info flex flex-column items-center flex-auto justify-center">
                    <div class="circle avatar-caller mb4">
                        <div class="ripple-wave">
                            <div class="ripple-wave-2"></div>
                        </div>
                        <img class="circle" src="https://i.imgur.com/fjvoClG.png?2" alt="">
                    </div>
                    <h1 class="mb2">Dr. Charlotte Watkins M.D.</h1>
                    <h3>Head Neurologist, Reston Hospital</h3>
                </section>
                <section class="call-buttons flex justify-between">
                    <div class="btn-floating-label">
                        <a class="btn-floating btn-jumbo waves-effect waves-light danger" id="reject"><i class="fa fa-call">phone</i></a>
                        <h4 for="reject">Reject Call</h4>
                    </div>
                    <div class="btn-floating-label">
                        <a class="btn-floating btn-jumbo waves-effect waves-light success" id="accept"><i class="fa fa-call">phone</i></a>
                        <h4 for="reject">Accept Call</h4>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>