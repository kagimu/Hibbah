@extends('layouts.master')

@section('content')
 <!--Breadcumb area start here-->
 <section class="breadcumb-area bg-img jarallax af"style="background-image: url(../images/breadcumb/1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcumb">
                    <h2>Contact us</h2>
                    <ul class="list-inline">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcumb area end here-->
<!--Contact area start here-->
<section class="contact-area pd-t80 pd-b100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="map-area">
                    <a href="#" class="go-map">Go to Map</a>
                    <div id="map" class="map-full" style="width:100%; height:585px;"></div>
                </div>
            </div>
        </div>
        <div class="row mr-b50">
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                <div class="contact-info">
                    <span><i class="fa fa-map-marker"></i></span>
                    <p>Sector # 48, 123 Street,<br>
                    Colony, INDIA</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                <div class="contact-info">
                    <span><i class="fa fa-phone"></i></span>
                    <p>+8100 376 6284,</p>
                    <p>+8100 255 6858 </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12">
                <div class="contact-info">
                    <span><i class="fa fa-envelope"></i></span>
                    <p>Mosque@example.com</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-heading-two">
                    <h2>GEt in touch</h2>
                    <p>Denean sollicitudin. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean itudin. This is Photoshop's sion  of Lorem Ipsum. Proin gravida nibh vel velit.</p>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-area">
                    <form>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-4 col-xs-12 feld">
                                    <input name="full_name" class="require" type="text" placeholder="Full Name *">
                                    <span><i class="fa fa-user"></i></span>
                                </div>
                                <div class="col-sm-4 col-xs-12 feld">
                                    <input  name="email" class="require" type="email" placeholder="Email *" data-valid="email" data-error="Email should be valid." />
                                    <span><i class="fa fa-envelope"></i></span>
                                </div>
                                <div class="col-sm-4 col-xs-12 feld">
                                    <input name="subject" class="require" type="text" placeholder="Subject">
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="feld">
                                <textarea name="message" class="require" placeholder="Message"></textarea>
                                <span class="msg"><i class="fa fa-pencil-square-o"></i></span>
                            </div>
                        </fieldset>
                        <div class="btn-area text-center">
                            <div class="response"></div>
                            <input type="hidden" name="form_type" value="contact" />
                            <button type="button" class="submitForm">Submit</button>
                         
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>