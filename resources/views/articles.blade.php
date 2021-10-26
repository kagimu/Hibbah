@extends('layouts.master')

@section('content')
<!--Header area end here-->
<!--Breadcumb area start here-->
<section class="breadcumb-area bg-img jarallax af" style="background-image: url(../images/breadcumb/1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcumb">
                    <h2>@Articles</h2>
                    <ul class="list-inline">
                        <li><a href="/">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><a href="/articles">Articles</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcumb area end here-->
<!--Causes area start here-->
<section class="causes-area-list section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-heading-two">
                    <h2>ARTICLES!</h2>
                    <p>Denean sollicitudin. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean itudin. This is Photoshop's sion  of Lorem Ipsum. Proin gravida nibh vel velit.</p>
                </div>
            </div>
        </div>
        <div class="row mr-b60">
            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                <div class="catagoris">
                    <select>
                        <option>Categories</option>
                        <option>Poor</option>
                        <option>education</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-5 col-md-3 col-sm-12 col-xs-12">
                <div class="grid-list">
                    <ul class="list-inline">
                        <li><span>View as :</span></li>
                        <li><a href="causes-grid.html"><i class="fa fa-th-large"></i></a></li>
                        <li class="active"><a href="causes-list.html"><i class="fa fa-th-list"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="search-cuse">
                    <form>
                        <input type="search" placeholder="Search Text">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($articles as $article)

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="causes-list mr-b60">
                    <figure><img src="{{asset('images')}}/{{$article->profileimage}}g" alt=""/></figure>
                    <div class="content">
                        <span class="date"><i class="fa fa-calendar-o"></i>>{{ $article->date }}{{ $article->month }} 2020</span>
                        <h4><a href="#">{{ $article->title }}</a></h4>
                        <p>{{ $article->Content }}<a href="#">read more</a></p>
                        <div class="donate">
                            <div class="dnl">
                                <span>$</span>
                                <strong>42</strong>
                                <span>k</span>
                                Done of &nbsp
                            </div>
                            <div class="dnr">
                                <span>$</span>
                                <strong>50</strong>
                                <span>k</span>
                                Needed
                            </div>
                        </div>
                        <a href="#" class="btn4"><span>donate</span></a>
                    </div>
                </div>
            </div>

    
            @endforeach

            

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pagination">
                    <ul class="list-inline">
                        <li><a href="#" class="btn4"><span>Prev</span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">32</a></li>
                        <li><a href="#" class="btn4"><span>Next</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Causes area end here-->

<!--Banner area start here-->
<section class="banner-area-two section2 bg-img jarallax af">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-heading-one">
                    <h2>Prayer Timings</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="prayer-list text-center mr-b30">
                    <h4>Dawn Prayer</h4>
                    <strong>Fajr</strong>
                    <button>4:01 am</button>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="prayer-list text-center mr-b30">
                    <h4>Sunrise Time</h4>
                    <strong>Zohar</strong>
                    <button>1:30 AM</button>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="prayer-list text-center mr-b30">
                    <h4>Afternoon</h4>
                    <strong>Asar</strong>
                    <button>5:30 PM</button>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="prayer-list text-center mr-b30">
                    <h4>Sunset Prayer</h4>
                    <strong>Magrib</strong>
                    <button>7:15 PM</button>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="prayer-list text-center mr-b30">
                    <h4>Evening Prayer</h4>
                    <strong>Isha</strong>
                    <button>9:00 PM</button>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                <div class="prayer-list text-center mr-b30">
                    <h4>Sunrise Time</h4>
                    <strong>Kudba</strong>
                    <button>2:00 PM</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner area end here-->

<!--Brand area start here-->
<section class="brand-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-heading-three">
                    <h2>Thank you our Sponsors</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="brand-slider">
                    <div class="brand">
                        <div class="brand-list">
                            <a href="#"><img src="images/brand/1.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="brand-list">
                            <a href="#"><img src="images/brand/2.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="brand-list">
                            <a href="#"><img src="images/brand/3.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="brand-list">
                            <a href="#"><img src="images/brand/4.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="brand-list">
                            <a href="#"><img src="images/brand/5.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="brand-list">
                            <a href="#"><img src="images/brand/1.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="brand">
                        <div class="brand-list">
                            <a href="#"><img src="images/brand/2.png" alt=""/></a>
                        </div>
                    </div>
                </div>
                    
            </div>
                
        </div>
    </div>
</section>
<!--Brand area end here-->

<!--Subscribe area start here-->
<!--Subscribe area end here-->