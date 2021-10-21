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

                                        <a href="<?php echo ADMINROOT; ?>/track">Track Orders</a>
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
                                    <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">Track your Order</h1>

                                            <span class="dash__text u-s-m-b-30">Track existing orders.</span>
                                            <form class="dash-track-order">
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="order-id">Order ID *</label>

                                                        <input class="input-text input-text--primary-style" type="text"
                                                            id="order-id"
                                                            placeholder="Found in your confirmation email">
                                                    </div>
                                                    <div class="u-s-m-b-30">

                                                        <label class="gl-label" for="track-email">Email *</label>

                                                        <input class="input-text input-text--primary-style" type="text"
                                                            id="track-email"
                                                            placeholder="Email you used during checkout">
                                                    </div>
                                                </div>

                                                <button class="btn btn--e-brand-b-2" type="submit">TRACK</button>
                                            </form>
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