@extends('layouts.master')
@section('breadcrumb')
<div class="bread-crumbs-wrapper">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('homepage') }}" title="" itemprop="url">Beranda</a></li>
            <li class="breadcrumb-item active">Akun Saya</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<section>
    <div class="block less-spacing gray-bg top-padd30">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="sec-box">
                        <div class="dashboard-tabs-wrapper">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
                                        <div class="profile-sidebar-inner brd-rd5">
                                            <div class="user-info red-bg">
                                                <img class="brd-rd50" src="{{ Auth::user()->photo ? 'storage/'.Auth::user()->photo : 'https://via.placeholder.com/75?text=Belum Ada Foto' }}" alt="user-avatar.jpg" itemprop="image">
                                                <div class="user-info-inner">
                                                    <h5 itemprop="headline"><a href="#" title="" itemprop="url">{{ Auth::user()->name }}</a></h5>
                                                    <span><a href="#" title="" itemprop="url">{{ Auth::user()->email }}</a></span>
                                                    <a class="brd-rd3 sign-out-btn yellow-bg" href="#" title="" itemprop="url"><i class="fa fa-sign-out"></i> Keluar</a>
                                                </div>
                                            </div>
                                            @include('pages.profile.own.menu.index')
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 col-lg-8">
                                    <div class="tab-content">
                                        @include('pages.profile.own.tabs.dashboard')
                                        <div class="tab-pane fade" id="my-bookings">
                                            <div class="tabs-wrp brd-rd5">
                                                <h4 itemprop="headline">MY BOOKINGS</h4>
                                                <div class="select-wrap-inner">
                                                    <div class="select-wrp2">
                                                        <select>
                                                            <option>Select Booking Status</option>
                                                            <option>Select Booking Status</option>
                                                            <option>Select Booking Status</option>
                                                        </select>
                                                    </div>
                                                    <div class="select-wrp2">
                                                        <select>
                                                            <option>Select Date Range</option>
                                                            <option>Select Date Range</option>
                                                            <option>Select Date Range</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="booking-table">
                                                    <table>
                                                        <thead>
                                                            <tr><th>RESTAURANT NAME</th><th>DATE</th><th>STATUS</th></tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><h5 itemprop="headline"><a href="#" title="" itemprop="url">Jet's Kitchen ( #8589 )</a></h5></td>
                                                                <td>Aug 17,2017</td>
                                                                <td><span class="brd-rd3 processing">PROCESSING</span> <a class="detail-link brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><h5 itemprop="headline"><a href="#" title="" itemprop="url">Jet's Kitchen ( #8589 )</a></h5></td>
                                                                <td>Aug 17,2017</td>
                                                                <td><span class="brd-rd3 processing">PROCESSING</span> <a class="detail-link brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><h5 itemprop="headline"><a href="#" title="" itemprop="url">Jet's Kitchen ( #8589 )</a></h5></td>
                                                                <td>Aug 17,2017</td>
                                                                <td><span class="brd-rd3 completed">COMPLETED</span> <a class="detail-link brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><h5 itemprop="headline"><a href="#" title="" itemprop="url">Jet's Kitchen ( #8589 )</a></h5></td>
                                                                <td>Aug 17,2017</td>
                                                                <td><span class="brd-rd3 processing">PROCESSING</span> <a class="detail-link brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td><h5 itemprop="headline"><a href="#" title="" itemprop="url">Jet's Kitchen ( #8589 )</a></h5></td>
                                                                <td>Aug 17,2017</td>
                                                                <td><span class="brd-rd3 completed">COMPLETED</span> <a class="detail-link brd-rd50" href="#" title="" itemprop="url"><i class="fa fa-chain"></i></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="my-reviews">
                                            <div class="tabs-wrp brd-rd5">
                                                <h4 itemprop="headline">MY REVIEWS</h4>
                                                <div class="select-wrap-inner">
                                                    <div class="select-wrp2">
                                                        <select>
                                                            <option>Newest Reviews</option>
                                                            <option>Newest Reviews</option>
                                                            <option>Newest Reviews</option>
                                                        </select>
                                                    </div>
                                                    <div class="select-wrp2">
                                                        <select>
                                                            <option>Select Date Range</option>
                                                            <option>Select Date Range</option>
                                                            <option>Select Date Range</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="review-list">
                                                    <div class="review-box brd-rd5">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">RESTAURANT DEMO</a></h4>
                                                        <div class="ratings">
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star off"></i>
                                                            <i class="fa fa-star off"></i>
                                                        </div>
                                                        <p itemprop="description">FoodBakery order today. So great to be able to order food and not have to talk to anyone.</p>
                                                        <div class="review-info">
                                                            <img class="brd-rd50" src="assets/images/resource/reviewr-img1.jpg" alt="reviewr-img1.jpg" itemprop="image">
                                                            <div class="review-info-inner">
                                                                <h5 itemprop="headline">QLARK JAKSON</h5>
                                                                <i class="red-clr">2 months Ago</i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-box brd-rd5">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">RESTAURANT DEMO</a></h4>
                                                        <div class="ratings">
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star off"></i>
                                                        </div>
                                                        <p itemprop="description">FoodBakery order today. So great to be able to order food and not have to talk to anyone.</p>
                                                        <div class="review-info">
                                                            <img class="brd-rd50" src="assets/images/resource/reviewr-img2.jpg" alt="reviewr-img2.jpg" itemprop="image">
                                                            <div class="review-info-inner">
                                                                <h5 itemprop="headline">QLARK JAKSON</h5>
                                                                <i class="red-clr">2 months Ago</i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review-box brd-rd5">
                                                        <h4 itemprop="headline"><a href="#" title="" itemprop="url">RESTAURANT DEMO</a></h4>
                                                        <div class="ratings">
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star on"></i>
                                                            <i class="fa fa-star on"></i>
                                                        </div>
                                                        <p itemprop="description">FoodBakery order today. So great to be able to order food and not have to talk to anyone.</p>
                                                        <div class="review-info">
                                                            <img class="brd-rd50" src="assets/images/resource/reviewr-img3.jpg" alt="reviewr-img3.jpg" itemprop="image">
                                                            <div class="review-info-inner">
                                                                <h5 itemprop="headline">QLARK JAKSON</h5>
                                                                <i class="red-clr">2 months Ago</i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- Review List -->
                                            </div>
                                        </div>
                                        @include('pages.profile.own.tabs.update_profile')
                                        <div class="tab-pane fade" id="shortlists">
                                            <div class="tabs-wrp brd-rd5">
                                                <h4 itemprop="headline">SHORTLISTS</h4>
                                                <div class="restaurants-list">
                                                    <div class="featured-restaurant-box style3 brd-rd5">
                                                        <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img src="assets/images/resource/restaurant-logo1-1.png" alt="restaurant-logo1-1.png" itemprop="image"></a></div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="#" title="" itemprop="url">Domino's Pizza</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                            </ul>
                                                        </div>
                                                        <div class="view-menu-liks">
                                                            <a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>
                                                        </div>
                                                    </div>
                                                    <div class="featured-restaurant-box style3 brd-rd5">
                                                        <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img src="assets/images/resource/restaurant-logo1-2.png" alt="restaurant-logo1-2.png" itemprop="image"></a></div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="#" title="" itemprop="url">Pizza Hut</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $40</li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                            </ul>
                                                        </div>
                                                        <div class="view-menu-liks">
                                                            <a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>
                                                        </div>
                                                    </div>
                                                    <div class="featured-restaurant-box style3 brd-rd5">
                                                        <div class="featured-restaurant-thumb"><a href="#" title="" itemprop="url"><img src="assets/images/resource/restaurant-logo1-3.png" alt="restaurant-logo1-3.png" itemprop="image"></a></div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="#" title="" itemprop="url">Burger King</a></h4>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $100</li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                            </ul>
                                                        </div>
                                                        <div class="view-menu-liks">
                                                            <a class="brd-rd3" href="#" title="" itemprop="url">View Menu</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pagination-wrapper text-center style2">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREV</a></li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                                                        <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a></li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a></li>
                                                        <li class="page-item">........</li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a></li>
                                                        <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                                                    </ul>
                                                </div><!-- Pagination Wrapper -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="statement">
                                            <div class="tabs-wrp brd-rd5">
                                                <h4 itemprop="headline">STATEMENTS</h4>
                                                <div class="select-wrap-inner">
                                                    <div class="select-wrp2"></div>
                                                    <div class="select-wrp2">
                                                        <select>
                                                            <option>Select Date Range</option>
                                                            <option>Select Date Range</option>
                                                            <option>Select Date Range</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="statement-table">
                                                    <table>
                                                        <thead>
                                                            <tr><th>TRANSACTION ID</th><th>ORDER ID</th><th>DATE</th><th>DETAIL</th><th>AMOUNT</th></tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr><td>#30737723</td><td>8720</td><td>Aug 17,2017</td><td>Order - Misumisu Thai</td><td><span class="red-clr">$35.97</span></td></tr>
                                                            <tr><td>#30737723</td><td>8720</td><td>Aug 17,2017</td><td>Order - Jet's Kitchen</td><td><span class="red-clr">$35.97</span></td></tr>
                                                            <tr><td>#30737723</td><td>8720</td><td>Aug 17,2017</td><td>Order - Misumisu Thai</td><td><span class="red-clr">$35.97</span></td></tr>
                                                            <tr><td>#30737723</td><td>8720</td><td>Aug 17,2017</td><td>Order - Misumisu Thai</td><td><span class="red-clr">$35.97</span></td></tr>
                                                            <tr><td>#30737723</td><td>8720</td><td>Aug 17,2017</td><td>Order - Misumisu Thai</td><td><span class="red-clr">$35.97</span></td></tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- Statement Table -->
                                                <div class="pagination-wrapper text-center style2">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item prev"><a class="page-link brd-rd2" href="#" itemprop="url">PREV</a></li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a></li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a></li>
                                                        <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a></li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a></li>
                                                        <li class="page-item">........</li>
                                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">18</a></li>
                                                        <li class="page-item next"><a class="page-link brd-rd2" href="#" itemprop="url">NEXT</a></li>
                                                    </ul>
                                                </div><!-- Pagination Wrapper -->
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-settings">
                                            <div class="tabs-wrp account-settings brd-rd5">
                                                <h4 itemprop="headline">ACCOUNT SETTINGS</h4>
                                                <div class="account-settings-inner">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-lg-4">
                                                            <div class="profile-info text-center">
                                                                <div class="profile-thumb brd-rd50">
                                                                    <img id="profile-display" src="assets/images/resource/profile-img1.jpg" alt="profile-img1.jpg" itemprop="image">
                                                                </div>
                                                                <a class="red-clr change-password" href="#" title="" itemprop="url">Change Password</a>
                                                                <div class="profile-img-upload-btn">
                                                                    <label class="fileContainer brd-rd5 yellow-bg">
                                                                        UPLOAD PICTURE
                                                                        <input id="profile-upload" type="file"/>
                                                                    </label>
                                                                </div>
                                                                <p itemprop="description">Upload a profile picture or choose one of the following</p>
                                                                <div class="default-img-lst">
                                                                    <img class="brd-rd50" src="assets/images/resource/profile-thumb1.jpg" alt="profile-thumb1.jpg" itemprop="image">
                                                                    <img class="brd-rd50" src="assets/images/resource/profile-thumb2.jpg" alt="profile-thumb2.jpg" itemprop="image">
                                                                    <img class="brd-rd50" src="assets/images/resource/profile-thumb3.jpg" alt="profile-thumb3.jpg" itemprop="image">
                                                                    <img class="brd-rd50" src="assets/images/resource/profile-thumb4.jpg" alt="profile-thumb4.jpg" itemprop="image">
                                                                    <img class="brd-rd50" src="assets/images/resource/profile-thumb5.jpg" alt="profile-thumb5.jpg" itemprop="image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 col-sm-8 col-lg-8">
                                                            <div class="profile-info-form-wrap">
                                                                <form class="profile-info-form">
                                                                    <div class="row mrg20">
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <label>Complete Name <sup>*</sup></label>
                                                                            <input class="brd-rd3" type="text" placeholder="Enter Your Name">
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <label>Email Address <sup>*</sup></label>
                                                                            <input class="brd-rd3" type="email" placeholder="Enter Your Email Address">
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <label>Phone No <sup>*</sup></label>
                                                                            <input class="brd-rd3" type="text" placeholder="Enter Your Phone No">
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <label>Country <sup>*</sup></label>
                                                                            <div class="select-wrp">
                                                                                <select>
                                                                                    <option>Pakistan</option>
                                                                                    <option>India</option>
                                                                                    <option>USA</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>State <sup>*</sup></label>
                                                                            <input class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>City <sup>*</sup></label>
                                                                            <div class="select-wrp">
                                                                                <select>
                                                                                    <option>Karachi</option>
                                                                                    <option>Multan</option>
                                                                                    <option>Lahore</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>Latitude <sup>*</sup></label>
                                                                            <input class="brd-rd3" type="text">
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <label>Longitude <sup>*</sup></label>
                                                                            <input class="brd-rd3" type="text">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                            <div class="loc-map2">
                                                                <div class="loc-map brd-rd3" id="loc-map"></div>
                                                                
                                                                <div class="loc-srch">
                                                                    <input class="brd-rd3" type="text" placeholder="Type Your Address">
                                                                    <button class="brd-rd3 red-bg" type="submit">Search Now</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Section Box -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

