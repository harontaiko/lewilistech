   <!--====== App Content ======-->
   <div class="app-content">

       <!--====== Section 1 ======-->
       <div class="u-s-p-y-60">

           <!--====== Section Content ======-->
           <div class="section__content">
               <div class="container">
                   <div class="breadcrumb">
                       <div class="breadcrumb__wrap">
                           <ul class="breadcrumb__list">
                               <li class="has-separator">

                                   <a href="<?php echo ADMINROOT; ?>">Home</a>
                               </li>
                               <li class="is-marked">

                                   <a href="<?php echo ADMINROOT; ?>/users">Users</a>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!--====== End - Section 1 ======-->


       <!--====== Section 2 ======-->
       <div class="u-s-p-b-60">

           <!--====== Section Content ======-->
           <div class="section__content">
               <div class="dash">
                   <div class="container">
                       <div class="row">
                           <div class="col-lg-3 col-md-12">

                               <!--====== Dashboard Features ======-->
                               <?php require(APPROOT . '/views/inc/dashboard-features.php'); ?>

                               <?php require(APPROOT . '/views/inc/dashpad.php'); ?>

                               <!--====== End - Dashboard Features ======-->
                           </div>
                           <div class="col-lg-9 col-md-12">
                               <div
                                   class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                   <div class="dash__pad-2">
                                       <h1 class="dash__h1 u-s-m-b-14">Users</h1>

                                       <span class="dash__text u-s-m-b-30">All Lewilistech registered accounts</span>
                                       <form class="m-order u-s-m-b-30">
                                           <div class="m-order__select-wrapper">

                                               <label class="u-s-m-r-8" for="my-order-sort">Show:</label><select
                                                   class="select-box select-box--primary-style" id="my-order-sort">
                                                   <option selected>All users</option>
                                                   <option>Recent users</option>

                                               </select>
                                           </div>
                                       </form>
                                       <div class="m-order__list">
                                           <div class="m-order__get">
                                               <div class="manage-o__header u-s-m-b-30">
                                                   <div class="dash-l-r">
                                                       <div>
                                                           <div class="manage-o__text-2 u-c-secondary">User #id
                                                           </div>
                                                           <div class="manage-o__text u-c-silver">Registered on 26 Oct
                                                               2016
                                                               09:08:37</div>
                                                       </div>
                                                       <div>
                                                           <div class="dash__link dash__link--brand">

                                                               <a href="dash-manage-order.html">MANAGE</a>
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="manage-o__description">
                                                   <div class="description__container">
                                                       <div class="description__img-wrap">

                                                           <img class="u-img-fluid"
                                                               src="images/product/electronic/product3.jpg" alt="user">
                                                       </div>
                                                       <div class="description-title">username</div>
                                                   </div>
                                                   <div class="description__info-wrap">
                                                       <!--                      <div>

                                                           <span
                                                               class="manage-o__badge badge--processing">Processing</span>
                                                       </div> -->
                                                       <div>

                                                           <span class="manage-o__text-2 u-c-silver">Orders:

                                                               <span
                                                                   class="manage-o__text-2 u-c-secondary">1</span></span>
                                                       </div>
                                                       <div>

                                                           <span class="manage-o__text-2 u-c-silver">Last seen:

                                                               <span class="manage-o__text-2 u-c-secondary">20th June
                                                                   2020</span></span>
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
           </div>
           <!--====== End - Section Content ======-->
       </div>
       <!--====== End - Section 2 ======-->
   </div>
   <!--====== End - App Content ======-->