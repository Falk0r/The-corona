@extends('admin.layouts.app')

<div class="page-container">

    <!-- Sidebar menu area start -->
    <div class="sidebar-menu do-not-print">
        <div class="sidebar-header">
            <div class="logo">
                <a href="index.php"><img src="../uploads/logo_admin.png" alt="logo"></a>
            </div>
        </div>
        <div class="main-menu">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 640px;"><div class="menu-inner" style="overflow: hidden; width: auto; height: 640px;">
                <nav>
                    <ul class="metismenu" id="menu">
                        
                        <li class="active">
                            <a href="index.php">
                                <i class="ti-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-settings"></i><span>Website Settings</span></a>
                            <ul class="collapse">
                                
                                <li class="">
                                    <a href="setting-logo.php">Logo</a>
                                </li>

                                <li class="">
                                    <a href="setting-favicon.php">Favicon</a>
                                </li>

                                <li class="">
                                    <a href="setting-top-bar.php">Top Bar</a>
                                </li>

                                <li class="">
                                    <a href="setting-home.php">Home Page</a>
                                </li>

                                <li class="">
                                    <a href="setting-contact.php">Contact Page</a>
                                </li>

                                <li class="">
                                    <a href="setting-pages.php">Other Pages</a>
                                </li>

                                <li class="">
                                    <a href="setting-banner.php">Banner</a>
                                </li>

                                <li class="">
                                    <a href="setting-email.php">Email</a>
                                </li>

                                <li class="">
                                    <a href="setting-sidebar.php">Sidebar</a>
                                </li>

                                <li class="">
                                    <a href="setting-payment.php">Payment</a>
                                </li>

                                <li class="">
                                    <a href="setting-order.php">Order</a>
                                </li>

                                <li class="">
                                    <a href="setting-footer.php">Footer (Contact)</a>
                                </li>

                                <li class="">
                                    <a href="footer-link.php">Footer (Links)</a>
                                </li>

                                <li class="">
                                    <a href="footer-page.php">Footer (Pages)</a>
                                </li>

                                

                            </ul>
                        </li>

                        <li class="">
                            <a href="page.php">
                                <i class="ti-receipt"></i><span>Page</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="menu.php">
                                <i class="ti-menu-alt"></i><span>Menu</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="slider.php">
                                <i class="ti-layout-slider"></i><span>Slider</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-control-shuffle"></i><span>News</span></a>
                            <ul class="collapse">
                                
                                <li class="">
                                    <a href="category.php">Category</a>
                                </li>

                                <li class="">
                                    <a href="news.php">News</a>
                                </li>

                                <li class="">
                                    <a href="comment-approved.php">Approved Comments</a>
                                </li>

                                <li class="">
                                    <a href="comment-pending.php">Pending Comments</a>
                                </li>

                            </ul>
                        </li>

                        <li class="">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-gallery"></i><span>Gallery</span></a>
                            <ul class="collapse">
                                
                                <li class="">
                                    <a href="photo.php">Photos</a>
                                </li>

                                <li class="">
                                    <a href="video.php">Videos</a>
                                </li>

                            </ul>
                        </li>


                        <li class="">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-shopping-cart"></i><span>Product</span></a>
                            <ul class="collapse">
                                
                                <li class="">
                                    <a href="product.php">Product</a>
                                </li>

                                <li class="">
                                    <a href="shipping.php">Shipping</a>
                                </li>

                                <li class="">
                                    <a href="coupon.php">Coupon</a>
                                </li>

                            </ul>
                        </li>

                        
                        <li class="">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-shopping-cart"></i><span>Order</span></a>
                            <ul class="collapse">
                                
                                <li class="">
                                    <a href="order-pending.php">Pending Orders</a>
                                </li>

                                <li class="">
                                    <a href="order-completed.php">Completed Orders</a>
                                </li>

                            </ul>
                        </li>

                        <li class="">
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-user"></i><span>Customers</span></a>
                            <ul class="collapse">
                                
                                <li class="">
                                    <a href="customer-pending.php">Pending Customers</a>
                                </li>

                                <li class="">
                                    <a href="customer-active.php">Active Customers</a>
                                </li>

                            </ul>
                        </li>

                        <li class="">
                            <a href="symptom.php">
                                <i class="ti-sharethis"></i><span>Symptom</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="prevention.php">
                                <i class="ti-view-grid"></i><span>Prevention</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="doctor.php">
                                <i class="ti-user"></i><span>Doctor</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="faq.php">
                                <i class="ti-layers"></i><span>FAQ</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="email-template.php">
                                <i class="ti-email"></i><span>Email Template</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="subscriber.php">
                                <i class="ti-bolt"></i><span>Subscriber</span>
                            </a>
                        </li>
                        
                        <li class="">
                            <a href="social-media.php">
                                <i class="ti-world"></i><span>Social Media</span>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 459.708px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
        </div>
    </div>
    <!-- Sidebar menu area end -->


    <!-- Main content area start -->
    <div class="main-content" style="min-height: 688px;">

        <!-- Header area start -->
        <div class="header-area do-not-print">
            <div class="row align-items-center full-area">

                <div class="col-md-6 col-sm-8 clearfix left">
                    <div class="nav-btn pull-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-4 clearfix right">
                    <ul class="notification-area pull-right">
                        <li><a href="../" class="btn btn-info">Visit Website</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header area end -->
<div class="page-title-area">
<div class="row align-items-center">
    <div class="col-sm-6">
        <div class="breadcrumbs-area clearfix">
            <h4 class="page-title pull-left">Dashboard</h4>
        </div>
    </div>
    <div class="col-sm-6 clearfix">
<div class="user-profile pull-right">
    <img class="avatar user-thumb" src="../uploads/user-1.jpg" alt="avatar">
    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Logged in as: Mr. Brent <i class="fa fa-angle-down"></i></h4>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="profile-edit.php">Edit Profile</a>
        <a class="dropdown-item" href="logout.php">Log Out</a>
    </div>
</div>
</div>    </div>
</div>


<div class="main-content-inner">
<div class="row">

    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="seo-fact sbg1">
                        <div class="p_50 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-user"></i> Doctors</div>
                            <h2>4</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="seo-fact sbg2">
                        <div class="p_50 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-view-grid"></i> Preventions</div>
                            <h2>6</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="seo-fact sbg3">
                        <div class="p_50 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-sharethis"></i> Symptoms</div>
                            <h2>6</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="seo-fact sbg1">
                        <div class="p_50 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-layers"></i> FAQs</div>
                            <h2>6</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="seo-fact sbg2">
                        <div class="p_50 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-layers"></i> News</div>
                            <h2>7</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="seo-fact sbg3">
                        <div class="p_50 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-receipt"></i> Pages</div>
                            <h2>13</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

    </div>
    <!-- Main content area end -->

    
    <!-- Footer area start-->
    <footer class="do-not-print">
        <div class="footer-area">
            <p>Copyright © 2020. All Rights Reserved.</p>            </div>
    </footer>
    <!-- Footer area end-->

</div>