@extends('layouts.master')

@section('content')

<section class="breadcumb-area bg-img jarallax af" style="background-image: url(../images/breadcumb/1.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcumb">
                    <h2>Blog Categories</h2>
                    <ul class="list-inline">
                        <li><a href="/">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><a href="/artists">Artists</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Breadcumb area end here-->
<!--Blog area start here-->
<section class="blog-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 pd-r45">

                @foreach ($artists as $artist )
                    
                <div class="blog mr-b60">
                    <figure><img src="cover/{{ $artist->cover }}" alt=""/></figure>
                    <div class="content">
                        <div class="date"><span><strong>10</strong><em> may</em></span></div>
                        <div class="con mr-b30">
                            <a href="#"><h4> {{ $artist->stage_name }}</h4></a>
                            <p>he has too much lugezigezi but loves Allah despite everything.</p>
                            <a href="#" class="btn6">Read More</a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidbear">
                    <div class="widget search-sid">
                        <form>
                            <input type="search" placeholder="Search Text">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget categories">
                        <h3>Blog Categories</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>Mosque(02)</a></li>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>Encouragement (14)</a></li>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>Events (04)</a></li>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>Inspiration (15)</a></li>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>News (45)</a></li>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>Contact (12)</a></li>
                        </ul>
                    </div>
                    <div class="widget post">
                        <h3>Archives</h3>
                        <div class="post-list">
                            <div class="thimb">
                                <a href="#"><img src="images/blog/sm-3.jpg" alt=""/></a>
                            </div>
                            <div class="con">
                                <a href="#"><h6>Mosque of our life & our salvation</h6></a>
                                <span>12 May 2017</span>
                            </div>
                        </div>
                        <div class="post-list">
                            <div class="thimb">
                                <a href="#"><img src="images/blog/sm-4.jpg" alt=""/></a>
                            </div>
                            <div class="con">
                                <a href="#"><h6>Mosque of our life & our salvation</h6></a>
                                <span>12 May 2017</span>
                            </div>
                        </div>
                        <div class="post-list">
                            <div class="thimb">
                                <a href="#"><img src="images/blog/sm-5.jpg" alt=""/></a>
                            </div>
                            <div class="con">
                                <a href="#"><h6>Mosque of our life & our salvation</h6></a>
                                <span>12 May 2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="widget categories">
                        <h3>Archives</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>April 2017</a></li>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>May 2017</a></li>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>June 2017</a></li>
                            <li><a href="#"><i class="fa fa-hand-o-right"></i>July 2017</a></li>
                        </ul>
                    </div>
                    <div class="widget tags">
                        <h3>Tags Cloud</h3>
                        <ul class="list-inline">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Corporate</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Customer</a></li>
                            <li><a href="#">Money</a></li>
                            <li><a href="#">Webstrot</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Html</a></li>
                        </ul>
                    </div>
                    <div class="widget instagram">
                        <h3>Tags Cloud</h3>
                        <ul class="list-inline">
                            <li><img src="images/instagram/1.jpg" alt=""/></li>
                            <li><img src="images/instagram/2.jpg" alt=""/></li>
                            <li><img src="images/instagram/3.jpg" alt=""/></li>
                            <li><img src="images/instagram/4.jpg" alt=""/></li>
                            <li><img src="images/instagram/5.jpg" alt=""/></li>
                            <li><img src="images/instagram/6.jpg" alt=""/></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog area end here-->
<!--Subscribe area start here-->
<section class="subscribe-area section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="subs-form">
                    <form>
                        <h2><span><img src="images/icon/msg.png" alt=""/></span><span class="con pd-t5">Sign up for Newsletter</span></h2>
                        <fieldset>
                            <input type="email" placeholder="Email Address...">
                            <span><i class="fa fa-envelope"></i></span>
                        </fieldset>
                        
                        <button type="submit" class="btn3"><span>Submit</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>            
</section>
<!--Subscribe area end here-->