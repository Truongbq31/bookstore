<!-- Sidebar  -->
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="{{ route('index') }}" class="header-logo">
          <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
          <div class="logo-title">
             <span class="text-primary text-uppercase">Booksto</span>
          </div>
       </a>
       <div class="iq-menu-bt-sidebar">
          <div class="iq-menu-bt align-self-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="las la-bars"></i></div>
             </div>
          </div>
       </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
             <li class="active active-menu">
                <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Shop</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="dashboard" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                   <li class="active"><a href="{{ route('index') }}"><i class="las la-house-damage"></i>Home Page</a></li>
                   <li><a href="{{ route('category') }}"><i class="ri-function-line"></i>Category Page</a></li>
                   <li><a href="{{ route('checkout') }}"><i class="ri-checkbox-multiple-blank-line"></i>Checkout</a></li>
                  <li><a href="{{ route('wishlist') }}"><i class="ri-heart-line"></i>wishlist</a></li>
                </ul>
             </li>
             <li>
                <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="ri-admin-line"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="admin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="admin-dashboard.html"><i class="ri-dashboard-line"></i>Dashboard</a></li>
                   <li><a href="admin-category.html"><i class="ri-list-check-2"></i>Category Lists</a></li>
                   <li><a href="admin-author.html"><i class="ri-file-user-line"></i>Author</a></li>
                   <li><a href="admin-books.html"><i class="ri-book-2-line"></i>Books</a></li>
                </ul>
             </li>
             <li>
                <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                   <li><a href="profile.html"><i class="las la-id-card-alt"></i>User Profile</a></li>
                   <li><a href="profile-edit.html"><i class="las la-edit"></i>User Edit</a></li>
                   <li><a href="add-user.html"><i class="las la-plus-circle"></i>User Add</a></li>
                   <li><a href="user-list.html"><i class="las la-th-list"></i>User List</a></li>
                </ul>
             </li>

             <li>
                <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li>
                      <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="authentication" class="iq-submenu collapse" data-parent="#pages">
                         <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Login</a></li>
                         <li><a href="sign-up.html"><i class="ri-login-circle-line"></i>Register</a></li>
                         <li><a href="pages-recoverpw.html"><i class="ri-record-mail-line"></i>Recover Password</a></li>
                         <li><a href="pages-confirm-mail.html"><i class="ri-file-code-line"></i>Confirm Mail</a></li>
                         <li><a href="pages-lock-screen.html"><i class="ri-lock-line"></i>Lock Screen</a></li>
                      </ul>
                   </li>
                   <li>
                      <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul id="extra-pages" class="iq-submenu collapse" data-parent="#pages">
                         <li><a href="pages-timeline.html"><i class="ri-map-pin-time-line"></i>Timeline</a></li>
                         <li><a href="pages-invoice.html"><i class="ri-question-answer-line"></i>Invoice</a></li>
                         <li><a href="blank-page.html"><i class="ri-invision-line"></i>Blank Page</a></li>
                         <li><a href="pages-error.html"><i class="ri-error-warning-line"></i>Error 404</a></li>
                         <li><a href="pages-error-500.html"><i class="ri-error-warning-line"></i>Error 500</a></li>
                         <li><a href="pages-pricing.html"><i class="ri-price-tag-line"></i>Pricing</a></li>
                         <li><a href="pages-maintenance.html"><i class="ri-archive-line"></i>Maintenance</a></li>
                         <li><a href="pages-comingsoon.html"><i class="ri-mastercard-line"></i>Coming Soon</a></li>
                         <li><a href="pages-faq.html"><i class="ri-compasses-line"></i>Faq</a></li>
                      </ul>
                   </li>
                </ul>
             </li>
          </ul>
       </nav>
       <div id="sidebar-bottom" class="p-3 position-relative">
          <div class="iq-card">
             <div class="iq-card-body">
                <div class="sidebarbottom-content">
                   <div class="image"><img src="images/page-img/side-bkg.png" alt=""></div>
                   <button type="submit" class="btn w-100 btn-primary mt-4 view-more">Become Membership</button>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
<!--End sidebar -->