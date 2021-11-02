  <!--====== Dashboard Features ======-->
  <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
      <div class="dash__pad-1">

          <span class="dash__text u-s-m-b-16">Hello, Admin</span>
          <ul class="dash__f-list">
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/home') !==false): ?>class="dash-active"
                      <?php else: ?> <?php endif ?> href="<?php echo ADMINROOT; ?>/home">Manage My Account</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/profile') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/profile">Profile</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/track') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/track">Track Orders</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/products') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/products">Products</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/users') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/users">Users</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/orders') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/orders">All Orders</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/payment') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/payment">Payment Options</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/returns') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/returns">Returns & Cancellations</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/arrivals') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/arrivals">New Arrivals</a>
              </li>
              <li>
                  <!--include faqs-->
                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/information') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/information">Site Information</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/deals') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/deals">Deals & deals of the day</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/featured') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/featured">Featured Products</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/special_weekly') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/special_weekly">Special & Weekly Products</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/flash') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/flash">Flash Products</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/contact') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/contact">Contact request & Inquiries</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/newsletter') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/newsletter">Newsletter</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/blog') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/blog">Blog</a>
              </li>
              <li>

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/slider') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/slider">Sliders</a>
              </li>
              <li>

                  <a class="gl-link" href="<?php echo ADMINROOT; ?>/logout">Logout</a>
              </li>
          </ul>
      </div>
  </div>