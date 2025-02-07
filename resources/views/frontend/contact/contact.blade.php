@extends('frontend.layouts.master')

@section('content')
    <section>
        <div class="gap black-layer opc8 inner-banner">
            <div class="fixed-bg set-imagebloc"
                style="background-image: url(../frontend/uploads/2023/11/tq-feat-img2-2.jpg);"></div>
            <div class="container">
                <div class="pg-tp-wrp text-center" style = "padding-top:50px">
                    <div class="pg-tp-inr">
                        <h1 itemprop="headline">Contact us</h1>
                        <ol class="breadcrumb brd-rd30">
                            <li class="breadcrumb-item"><a href="../index.html">Home</a> </li>
                            <li class="breadcrumb-item active">Contact us</li>
                        </ol>
                    </div>
                </div><!-- Page Top Wrap -->
            </div>
        </div>
    </section>

    <!-- Page Content Starts -->
    <div id ="main" class ="page-content">
        <div class = "container">
            <div class = "row">
                <div id="post-115" class="post-115 page type-page status-publish hentry">
                    <div data-elementor-type="wp-page" data-elementor-id="115" class="elementor elementor-115">
                        <section
                            class="elementor-section elementor-top-section elementor-element elementor-element-17675fd elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                            data-id="17675fd" data-element_type="section"
                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                            <div class="elementor-container elementor-column-gap-no">
                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cbc0503"
                                    data-id="cbc0503" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-286a6d2 elementor-widget elementor-widget-info_contact"
                                            data-id="286a6d2" data-element_type="widget"
                                            data-widget_type="info_contact.default">
                                            <div class="elementor-widget-container">

                                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJLR9MdrZ1OC9mHVOqCiyvPEp4kp4NysA"></script>
                                                <script>
                                                    jQuery(document).ready(function($) {
                                                        'use strict';

                                                        var marker;

                                                        function initMap() {
                                                            var map = new google.maps.Map(document.getElementById('cnt-mp'), {
                                                                zoom: 13,
                                                                center: {
                                                                    lat: 48.85661,
                                                                    lng: 2.35222
                                                                }
                                                            });

                                                            marker = new google.maps.Marker({
                                                                map: map,
                                                                draggable: true,
                                                                animation: google.maps.Animation.DROP,
                                                                position: {
                                                                    lat: 48.85661,
                                                                    lng: 2.35222
                                                                }
                                                            });
                                                            marker.addListener('click', toggleBounce);
                                                        }

                                                        function toggleBounce() {
                                                            if (marker.getAnimation() !== null) {
                                                                marker.setAnimation(null);
                                                            } else {
                                                                marker.setAnimation(google.maps.Animation.BOUNCE);
                                                            }
                                                        }

                                                        google.maps.event.addDomListener(window, 'load', initMap);

                                                    });
                                                </script>


                                                <section class = "contact-sec">
                                                    <div class="gap">
                                                        <div class="container">
                                                            <div class="sec-tl text-center"><span class="theme-clr">Have any
                                                                    Questions...!</span>
                                                                <h2 itemprop="headline">Get In Touch</h2><img
                                                                    decoding="async"
                                                                    src="../frontend/themes/taqwa/assets/images/prayer-head-shp.png"
                                                                    alt="heading-image">
                                                            </div>
                                                            <div class ="row cnt-frm cnt-mp ">
                                                                <div class="col-md-6 col-sm-12 col-lg-6">
                                                                    <div class="mrg10">
                                                                        <p>
                                                                        <div class="wpcf7 no-js" id="wpcf7-f2027-p115-o1"
                                                                            lang="en-US" dir="ltr"
                                                                            data-wpcf7-id="2027">
                                                                            <div class="screen-reader-response">
                                                                                <p role="status" aria-live="polite"
                                                                                    aria-atomic="true"></p>
                                                                                <ul></ul>
                                                                            </div>
                                                                            <form
                                                                                action="https://nauthemes.com/demo/muezzin/contact-us/#wpcf7-f2027-p115-o1"
                                                                                method="post" class="wpcf7-form init"
                                                                                aria-label="Contact form"
                                                                                novalidate="novalidate" data-status="init">
                                                                                <div style="display: none;">
                                                                                    <input type="hidden" name="_wpcf7"
                                                                                        value="2027" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_version"
                                                                                        value="6.0.3" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_locale"
                                                                                        value="en_US" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_unit_tag"
                                                                                        value="wpcf7-f2027-p115-o1" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_container_post"
                                                                                        value="115" />
                                                                                    <input type="hidden"
                                                                                        name="_wpcf7_posted_data_hash"
                                                                                        value="" />
                                                                                </div>
                                                                                <div class="row mrg10">
                                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                data-name="text-471"><input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required brd-rd5"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Your Name"
                                                                                                    value=""
                                                                                                    type="text"
                                                                                                    name="text-471" /></span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                data-name="text-427"><input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required brd-rd5"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Last Name"
                                                                                                    value=""
                                                                                                    type="text"
                                                                                                    name="text-427" /></span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 col-sm-6 col-lg-6">
                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                data-name="email-177"><input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email brd-rd5"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Your Email"
                                                                                                    value=""
                                                                                                    type="email"
                                                                                                    name="email-177" /></span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-6 col-sm-6 col-lg-6">
                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                data-name="text-487"><input
                                                                                                    size="40"
                                                                                                    maxlength="400"
                                                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required brd-rd5"
                                                                                                    aria-required="true"
                                                                                                    aria-invalid="false"
                                                                                                    placeholder="Add Subject"
                                                                                                    value=""
                                                                                                    type="text"
                                                                                                    name="text-487" /></span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-12 col-sm-12 col-lg-12">
                                                                                        <p><span class="wpcf7-form-control-wrap"
                                                                                                data-name="textarea-678">
                                                                                                <textarea cols="40" rows="10" maxlength="2000"
                                                                                                    class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required brd-rd5" aria-required="true"
                                                                                                    aria-invalid="false" placeholder="Your Message/Question Goes Here..." name="textarea-678"></textarea>
                                                                                            </span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-md-12 col-sm-12 col-lg-12">
                                                                                        <p><input
                                                                                                class="wpcf7-form-control wpcf7-submit has-spinner tq-theme-btn tq-bg-theme rounded-pill"
                                                                                                type="submit"
                                                                                                value="Send Now" />
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <p style="display: none !important;"
                                                                                    class="akismet-fields-container"
                                                                                    data-prefix="_wpcf7_ak_"><label>&#916;
                                                                                        <textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea>
                                                                                    </label><input type="hidden"
                                                                                        id="ak_js_1" name="_wpcf7_ak_js"
                                                                                        value="209" />
                                                                                    <script>
                                                                                        document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());
                                                                                    </script>
                                                                                </p>
                                                                                <div class="wpcf7-response-output"
                                                                                    aria-hidden="true"></div>
                                                                            </form>
                                                                        </div>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col-sm-12 col-lg-5">
                                                                    <div class="cnt-img brd-rd5"><img decoding="async"
                                                                            src="../frontend/uploads/2023/12/Untitled-1.png"
                                                                            alt="Image" itemprop="image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="cnt-inf-wrp">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                                                        <div class="sec-tl">
                                                                            <span class="theme-clr">Contact Details</span>
                                                                            <h2 itemprop="headline">Get Information</h2>
                                                                        </div>
                                                                        <ul class="cnt-inf-lst">
                                                                            <li>
                                                                                <i class="fas fa-envelope theme-clr "></i>
                                                                                <strong>Email</strong><span>help@example.com</span><span>support@example.com</span>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fas fa-phone theme-clr "></i>
                                                                                <strong>Phone</strong><span>001 2565 2565
                                                                                    25</span><span>001 2565 2565 26</span>
                                                                            </li>
                                                                            <li>
                                                                                <i
                                                                                    class="fas fa-map-marker-alt theme-clr "></i>
                                                                                <strong>Address</strong><span>19-J David
                                                                                    Road H Block,</span><span>Orlando,
                                                                                    USA</span>
                                                                            </li>
                                                                            <li>
                                                                                <i class="fas fa-fax theme-clr "></i>
                                                                                <strong>Fax</strong><span>0044 55 25 26
                                                                                    23</span><span>0044 55 25 26 25</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-12 brd-rd5"
                                                                        id="cnt-mp"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div><!-- #post-## -->
            </div>
        </div>
    </div>
@endsection
