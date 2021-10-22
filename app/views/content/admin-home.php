        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <?php require(APPROOT . '/views/inc/dashboard-nav.php'); ?>



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
                                                <h1 class="dash__h1 u-s-m-b-14">Manage My Account</h1>

                                                <span class="dash__text u-s-m-b-30">Male changes to your account</span>
                                                <div class="row">
                                                    <div class="col-lg-4 u-s-m-b-30">
                                                        <div
                                                            class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                            <div class="dash__pad-3">
                                                                <h2 class="dash__h2 u-s-m-b-8">PERSONAL PROFILE</h2>
                                                                <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                                    <a href="#!">Edit</a>
                                                                </div>

                                                                <?php while($admin = $data['admin']->fetch_assoc()): ?>
                                                                <span
                                                                    class="dash__text"><?php $admin['username'] ?></span>

                                                                <span class="dash__text"><?php $admin['email'] ?></span>

                                                                <div class="dash__link dash__link--secondary u-s-m-t-8">

                                                                    <img src="<?php echo URLROOT ?>/public/images/images/avataaars.png"
                                                                        class="rounded-img" alt="admin">
                                                                </div>
                                                                <?php endwhile ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 u-s-m-b-30">
                                                        <div
                                                            class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                            <div class="dash__pad-3">
                                                                <h2 class="dash__h2 u-s-m-b-8">MY ADDRESS BOOK</h2>

                                                                <span class="dash__text-2 u-s-m-b-8">Default Shipping
                                                                    Address</span>
                                                                <div class="dash__link dash__link--secondary u-s-m-b-8">
                                                                    <!-- 
                                                                    <a href="">Edit</a> -->
                                                                </div>

                                                                <span class="dash__text">Moi Avenue, Nairobi Cubes
                                                                    Exhibition</span>

                                                                <span class="dash__text">(+254) 710 577 667</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 u-s-m-b-30">
                                                        <div
                                                            class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                            <div class="dash__pad-3">
                                                                <h2 class="dash__h2 u-s-m-b-8">PAYMENT METHODS</h2>

                                                                <span class="dash__text-2 u-s-m-b-8">Default payment
                                                                    options</span>

                                                                <span class="dash__text">MPESA, PAYPAL</span>

                                                                <span class="dash__text">CREDIT CARD ON DELIVERY</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius">
                                            <h2 class="dash__h2 u-s-p-xy-20">RECENT ORDERS</h2>
                                            <div class="dash__table-wrap gl-scroll">
                                                <table class="dash__table">
                                                    <thead>
                                                        <tr>
                                                            <th>Order #</th>
                                                            <th>Placed On</th>
                                                            <th>Items</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>num</td>
                                                            <td>date</td>
                                                            <td>
                                                                <div class="dash__table-img-wrap">

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/electronic/product3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="dash__table-total">

                                                                    <span>total ksh</span>
                                                                    <div class="dash__link dash__link--brand">

                                                                        <a href="">MANAGE</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
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