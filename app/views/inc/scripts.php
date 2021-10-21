<script src="<?php echo URLROOT ?>/public/javascript/jquery.min.js"></script>

<script src="https://www.google-analytics.com/analytics.js" async defer></script>

<!--====== Vendor Js ======-->
<script src="<?php echo URLROOT ?>/public/javascript/vendor.js"></script>

<!--====== jQuery Shopnav plugin ======-->
<script src="<?php echo URLROOT ?>/public/javascript/jquery.shopnav.js"></script>

<!--====== App ======-->
<script src="<?php echo URLROOT ?>/public/javascript/app.js"></script>

<?php if(strpos($_SERVER['REQUEST_URI'], 'lewis') !== false): ?>
<?php else: ?>
<!--====== Google Maps ======-->
<script src="<?php echo URLROOT ?>/public/javascript/map-init.js"></script>
<!--====== Noscript ======-->
<?php endif; ?>
<?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/products') !== false): ?>
<script src="<?php echo URLROOT ?>/public/javascript/products.min.js"></script>
<?php endif; ?>
<noscript>
    <div class="app-setting">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="app-setting__wrap">
                        <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                        <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a
                            JavaScript-capable browser.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</noscript>