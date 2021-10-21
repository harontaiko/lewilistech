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

                  <a <?php if(strpos($_SERVER['REQUEST_URI'], 'lewis/addressbook') !==false): ?>class="dash-active"
                      <?php endif ?> href="<?php echo ADMINROOT; ?>/addressbook">Addresses</a>
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

                  <a class="gl-link" href="<?php echo ADMINROOT; ?>/logout">Logout</a>
              </li>
          </ul>
      </div>
  </div>