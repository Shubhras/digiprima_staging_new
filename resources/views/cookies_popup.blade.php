<style>
/* .cookiealert {  
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        margin: 0 !important;
        z-index: 999;
        opacity: 0;
        visibility: hidden;
        border-radius: 0;
        transform: translateY(100%);
        transition: all 500ms ease-out;
        color: #ecf0f1;
        background:#24262a;
        }

        .cookiealert.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0%);
        transition-delay: 1000ms;
        }

        .cookiealert a {
        text-decoration: underline
        }

        .cookiealert .acceptcookies {
        margin-left: 10px;
        vertical-align: baseline;
        } */
#cookie-law-info-bar {
    position: fixed;
    bottom: 16px !important;
    padding: 0;
    margin: 0;
    left: 16px;
    right: auto;
    font-size: 15px;
    font-family: Montserrat, sans-serif !important;
    text-align: left;
    box-shadow: 0 5px 10px 0 rgb(0 0 0 / 30%);
}
@media (min-width:500px) {
    #cookie-law-info-bar{
    max-width: 480px!important;
    }
}

#cookie-law-info-bar {
    box-sizing: border-box;
    width: 100%;
    z-index: 99;
}

#cookie-law-info-bar span {
    padding: 28px;
    display: block;
}

#cookie-law-info-bar .cookie_icon {
    display: flex;
    align-items: center;
    width: 100%;
    margin-bottom: 5px;
    font-size: 20px;
    line-height: 24px;
    font-weight: 700;
    color: #1d252c;
}

#cookie-law-info-bar .cookie_icon img {
    margin-right: 5px;
    width: 50px;
    height: auto;
}

#cookie-law-info-bar p {
    margin: 0 0 8px;
}

#cookie-law-info-bar p a {
    color: #2b2d73 !important;
    font-weight: 900;
}

#cookie-law-info-bar .cookie_action_close_header.cli_action_button,
#cookie-law-info-bar .cookie_action_close_header_reject.cli_action_button,
#cookie-law-info-bar .medium.cli_settings_button {
    font-family: Montserrat, sans-serif;
    display: inline-block;
    background-color: transparent;
    background: linear-gradient(90deg, #aeb8f3, #369bf5, #5358f5) !important;
    border: 0;
    border-radius: 0;
    margin: 5px 5px 0 0;
    color: #fff !important;
    cursor: pointer;
    font-size: 12px;
    line-height: 18px;
    font-weight: 600;
    padding: 13px 16px 11px;
    vertical-align: middle;
    letter-spacing: .11px;
    text-decoration: none;
    text-transform: uppercase;
    text-align: center;
    -webkit-appearance: none;
    outline: 0;
    position: relative;
    -webkit-transform-style: preserve-3d;
    -webkit-writing-mode: horizontal-tb;
    -ms-writing-mode: horizontal-tb;
    writing-mode: horizontal-tb;
    text-orientation: mixed;
    transition: all 0.5s ease-in-out;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}

#cookie-law-info-bar .cookie_action_close_header.cli_action_button span,
#cookie-law-info-bar .cookie_action_close_header_reject.cli_action_button span,
#cookie-law-info-bar .medium.cli_settings_button span {
    padding: 0;
}

#cookie-law-info-bar .cookie_action_close_header_reject.cli_action_button,
#cookie-law-info-bar .medium.cli_settings_button {
    color: #1d252c !important;
    margin-left: 11px;
}

#cookie-law-info-bar .medium.cli_settings_button span {
    padding: 0;
}

.cli-plugin-button,
.cli-plugin-button:visited {
    display: inline-block;
    padding: 9px 12px;
    color: #fff;
    text-decoration: none;
    position: relative;
    cursor: pointer;
    margin-left: 5px;
    text-decoration: none;
}

#cookie-law-info-bar span {
    vertical-align: middle;
}

#cookie-law-info-bar .medium.cli_settings_button:hover {
    color: #fff !important;
}

#cookie-law-info-bar .medium.cli_settings_button:hover:after {
    width: 100%;
}

#cookie-law-info-bar .medium.cli_settings_button:after {
    width: 0;
    content: "";
    display: block;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.5s ease-in-out;
    z-index: 1;
    background: linear-gradient(90deg, #aeb8f3, #369bf5, #5358f5) !important;
}

#cookie-law-info-bar .medium.cli_settings_button:before {
    background: #fff;
    width: calc(100% - 4px);
    height: calc(100% - 4px);
    left: 2px;
    top: 2px;
    z-index: 1;
    content: "";
    position: absolute;
}

.cli-plugin-button:hover {
    background-color: #111;
    color: #fff;
    text-decoration: none;
}

#cookie-law-info-bar .medium.cli_settings_button {
    color: #1d252c !important;
    margin-left: 11px;
}

#cookie-law-info-bar .cookie_action_close_header.cli_action_button:hover {
    color: #1d252c !important;
}

#cookie-law-info-bar .cookie_action_close_header.cli_action_button:after {
    width: 0%;
    content: "";
    display: block;
    height: calc(100% - 4px);
    background: 0 0;
    position: absolute;
    top: 2px;
    left: 2px;
    transition: all 0.5s ease-in-out;
    z-index: -1;
}

#cookie-law-info-bar .cookie_action_close_header.cli_action_button:hover:after {
    width: calc(100% - 4px);
    background: #fff;
}

#cookie-law-info-bar .medium.cli_settings_button:before {
    background: #fff;
    width: calc(100% - 4px);
    height: calc(100% - 4px);
    left: 2px;
    top: 2px;
    z-index: 1;
    content: "";
    position: absolute;
}

#cookie-law-info-bar .medium.cli_settings_button span {
    position: relative;
    z-index: 2;
}

.cli-modal.cli-blowup {
    z-index: 99;
    transform: scale(1);
}

.cli-modal-open .cli-modal {
    overflow-x: hidden;
    overflow-y: auto;
}

element.style {
    opacity: 1;
}

.cli-modal.cli-blowup {
    z-index: 99;
    transform: scale(1);
}

.cli-modal-open .cli-modal {
    overflow-x: hidden;
    overflow-y: auto;
}

.cli-modal.cli-show {
    display: block;
}

.cli-modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 99;
    transform: scale(0);
    overflow: hidden;
    outline: 0;
}

.cli-modal.cli-blowup .cli-modal-dialog {
    animation: blowUpModal 0.5s cubic-bezier(.165, .84, .44, 1) forwards;
}

.cli-modal.cli-show .cli-modal-dialog {
    -webkit-transform: translate(0, 0);
    transform: translate(0, 0);
}

@media (min-width: 992px) {
    .cli-modal .cli-modal-dialog {
        max-width: 645px;
    }
}

@media (min-width: 576px) {
    .cli-modal .cli-modal-dialog {
        max-width: 500px;
        margin: 1.75rem auto;
        min-height: calc(100% - (1.75rem * 2));
    }
}

.cli-modal .cli-modal-dialog {
    position: relative;
    width: auto;
    margin: 0.5rem;
    pointer-events: none;
    font-family: inherit;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    min-height: calc(100% - (0.5rem * 2));
}

.cli-modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border-radius: 0.2rem;
    box-sizing: border-box;
    outline: 0;
}

.cli-modal .cli-modal-close {
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1;
    -webkit-appearance: none;
    width: 40px;
    height: 40px;
    padding: 0;
    border-radius: 50%;
    padding: 10px;
    background: transparent;
    border: none;
    min-width: 40px;
}

.cli-modal-close svg {
    fill: #000;
}

.cli-container-fluid {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

.cli-tab-container .cli-row {
    max-height: 500px;
    overflow-y: auto;
}

.cli-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.cli-col-12 {
    width: 100%;
}

.cli-px-0 {
    padding-left: 0;
    padding-right: 0;
}

.cli-align-items-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
}

.cookie-privacy-title {
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    margin: 10px 0;
}


#cliSettingsPopup .cli-tab-section-container {
    padding-top: 12px;
}

.cli-tab-section {
    margin-top: 5px;
}

.cli-tab-header {
    border-radius: 5px;
    padding: 12px 15px;
    cursor: pointer;
    transition: background-color 0.2s ease-out 0.3s, color 0.2s ease-out 0s;
    background-color: #f2f2f2;
}

.cli-tab-header {
    display: flex;
    justify-content: space-between;
}

.cli-modal a {
    text-decoration: none;
}

.wt-cli-necessary-checkbox {
    display: none !important;
}

span.cli-necessary-caption {
    color: #000;
    font-size: 12px;
    margin-top: 7px;
}

.cli-tab-section .cli-tab-content {
    padding: 10px 20px 5px 20px;
}


.cli-fade {
    transition: opacity .15s linear;
}

.cli-tab-container p,
.cli-privacy-content-text {
    font-size: 14px;
    line-height: 1.5;
    margin-top: 0;
    padding: 0;
    color: #000;
}

.cli-tab-section {
    margin-top: 5px;
}

a.cli-nav-link {
    position: relative;
    display: flex;
    align-items: center;
    font-size: 14px;
    color: #000 !important;
    text-transform: capitalize;
    font-weight: bold;
}

.cli-switch {
    display: inline-block;
    position: relative;
    min-height: 1px;
    padding-left: 38px;
    font-size: 14px;
}


.cli-user-preference-checkbox{
    outline: 0;
    border: 0;
    background-color: #f4f4f4;
    box-shadow: none;
    border-radius: 5px;
    color: #54565b;
    font-size: 18px;
    line-height: 22px;
    font-weight: 400;
    padding: 15px 18px 13px;
    vertical-align: middle;
    -webkit-appearance: none;
    font-family: Montserrat, sans-serif;
}
.cli-switch input:checked+.cli-slider {
    background-color: #28a745;
}

.cli-switch .cli-slider {
    border-radius: 34px;
    font-size: 0;
}

.cli-switch .cli-slider {
    background-color: #e3e1e8;
    height: 20px;
    width: 38px;
    bottom: 0;
    cursor: pointer;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: .4s;
}

.wt-cli-sr-only {
    display: none;
    font-size: 16px;
}

.cli-switch .cli-slider:before {
    background-color: #fff;
    bottom: 2px;
    content: "";
    height: 15px;
    left: 3px;
    position: absolute;
    transition: .4s;
    width: 15px;
}

.cli-switch input:checked+.cli-slider:before {
    transform: translateX(18px);
}

.cli-switch .cli-slider:before {
    border-radius: 50%;
}

.cli-switch input:checked+.cli-slider:after {
    content: attr(data-cli-enable);
}
.cli-switch .cli-slider:after {
    content: attr(data-cli-disable);
    position: absolute;
    right: 50px;
    color: #000;
    font-size: 12px;
    text-align: right;
    min-width: 60px;
}
.cookiealert{
       display: none;
        }
        .modal-dialog {
 max-width: 600px!important;
}
.modal-content {
    background: #fff;
}
.p_font_size{
    font-size:15px!important;
}
@media (min-width:320px) and (max-width:425px) {
    #cookie-law-info-bar span {
    padding: 10px!important;
}
#cookie-law-info-bar{
    left:3px!important;
}
#cookie-law-info-bar .cookie_icon img {
    width: 40px!important;
    height: auto;
}
.p_font_size{
    font-size:12px!important;
}
#cookie-law-info-bar .cookie_icon{
    font-size:16px!important;
}
#cookie-law-info-bar{
    font-size:12px!important;
}
#cookie-law-info-bar .cookie_action_close_header.cli_action_button, #cookie-law-info-bar .cookie_action_close_header_reject.cli_action_button, #cookie-law-info-bar .medium.cli_settings_button{
    font-size: 10px!important;
    padding: 5px 10px 5px!important;
}
}
@media (min-width:300px) and (max-width:350px) {
    

#cookie-law-info-bar .cookie_action_close_header.cli_action_button, #cookie-law-info-bar .cookie_action_close_header_reject.cli_action_button, #cookie-law-info-bar .medium.cli_settings_button{
    margin: 5px 0px 0 0!important;
}
#cookie-law-info-bar{
    width:314px!important;
}
@media (min-width:351px) and (max-width:380px) {
    .cookiealert {
    max-width:368px!important;
}
}
@media (min-width:381px) and (max-width: 430px) {
    #cookie-law-info-bar{
    width:418px!important;
}
}

}
</style>

<!-- START Bootstrap-Cookie-Alert -->
<!-- <div class="alert text-center cookiealert" role="alert">
     <b>&#x1F36A;</b> We use cookie to improve your experience on our site. By using our site you consent cookies. <a href="<?php $wo['config']['site_url']; ?>/cookies_policy" target="_blank" style="color:#337ab7">Learn more</a>
    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        I agree
    </button>
</div> -->
<div id="cookie-law-info-bar" class="cookiealert"
    style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: inherit; bottom: 0px; position: fixed; opacity: 1;">
    <span>
        <div class="cookie_icon"><img src="<?php echo $wo['config']['theme_url']; ?>/Wowonder-new/themes/trucker-hangout/img/about_us/icon.png"
                alt="Cookies" 
                data-ll-status="loaded" class="entered lazyloaded">Cookie Policy</div>
        <p class="p_font_size">This website uses cookies to optimize your experience. For additional information regarding how we use
            cookies, read our <a href="<?php $wo['config']['site_url']; ?>/cookies_policy" target="_blank"
                rel="noopener">Cookie Policy</a>. You may also manage your cookie settings on our website.</p><a
            role="button" tabindex="0" data-cli_action="accept" id="cookie_action_close_header"
            class=" acceptcookies cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button"
            style="display: inline-block; color: rgb(0, 0, 0); background-color: rgb(0, 0, 0);"><span>ACCEPT ALL
                COOKIES</span></a><a type="button" tabindex="0" data-toggle="modal" data-target="#exampleModalCenter"
            class="medium cli-plugin-button cli-plugin-main-button cli_settings_button"
            style="color: rgb(0, 0, 0); background-color: rgb(0, 0, 0);"><span>LET ME CHOOSE</span></a>
    </span></div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close " style="margin: 10px 20px;position:relative;z-index:999999" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="cookie-privacy-title">Privacy Overview</div>
                <div class="cli-privacy-content">
                    <div class="cli-privacy-content-text">This website uses cookies to improve your experience while you
                        navigate through the website. Out of these cookies, the cookies that are categorized as
                        necessary are stored on your browser as they are essential for the working of basic
                        functionalities...
                        <a class="cli-nav-link " data-toggle="collapse" href="#collapseExample3" styel="color:#333;"
                            aria-expanded="false" aria-controls="collapseExample3">
                            Readmore... </a>
                        <div class="collapse" id="collapseExample3">
                            <a href="<?php $wo['config']['site_url']; ?>/cookies_policy">Cookies Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;<a
                                href="<?php $wo['config']['site_url']; ?>/privacy_policy">Privacy Policy</a>
                        </div>
                    </div>

                    <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                        <div class="cli-tab-section">
                            <div class="cli-tab-header">
                                <a class="cli-nav-link " data-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    Necessary </a>

                                <span class="cli-necessary-caption">Always Enabled</span>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    Necessary cookies are absolutely essential for the website to function properly.
                                    This category only includes cookies that ensures basic functionalities and security
                                    features of the website. These cookies do not store any personal information.
                                </div>
                            </div>
                        </div>
                        <div class="cli-tab-section">
                            <div class="cli-tab-header">
                                <a class="cli-nav-link " role="button" data-toggle="collapse"
                                    data-target="#collapseExample1" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Non-necessary
                                </a>
                                <div class="cli-switch">
                                    <input type="checkbox"  id="wt-cli-checkbox-non-necessary"
                                        class="cli-user-preference-checkbox" data-id="checkbox-non-necessary"
                                        checked="checked">
                                    <label for="wt-cli-checkbox-non-necessary" style="margin:0;" class="cli-slider"
                                        data-cli-disable="Disabled" data-cli-enable="Enable"><span
                                            class="wt-cli-sr-only">Non-necessary</span></label>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample1">
                                <div class="card card-body">
                                    Any cookies that may not be particularly necessary for the website to function and
                                    is used specifically to collect user personal data via analytics, ads, other
                                    embedded contents are termed as non-necessary cookies. It is mandatory to procure
                                    user consent prior to running these cookies on your website.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
            (function() {
                "use strict";
                var cookieAlert = document.querySelector(".cookiealert");
                var acceptCookies = document.querySelector(".acceptcookies");
                if (!cookieAlert) {
                    return;
                }
                cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)
                cookieAlert.style.display="none";
                setTimeout(() => {
                    '<?php if(empty($_COOKIE['access'])){ ?>'
                cookieAlert.style.display="block";
                '<?php } ?>'
  
                }, 500);
                
                acceptCookies.addEventListener("click", function() {
                    $(document).ready(function() {
                        // start ajax code
                        $.ajax({
                            url: Wo_Ajax_Requests_File() + '?f=cookies',
                            success: function(result) {
                                console.log(result);
                                document.querySelector(".cookiealert").style.display="none";
                            }
                        });
                    });

                });
            })();
            </script>
