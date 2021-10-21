 <!--====== App Content ======-->
 <div class="app-content">

     <!--====== Section 1 ======-->
     <div class="u-s-p-y-60">

         <?php require(APPROOT . '/views/inc/dashboard-nav.php'); ?>



         <!--====== Section 2 ======-->
         <div class="u-s-p-b-60">


             <!--====== Section Content ======-->
             <div class="section__content">
                 <div class="container">
                     <div class="row row--center">
                         <div class="col-lg-6 col-md-8 u-s-m-b-30">
                             <div class="l-f-o">
                                 <div class="l-f-o__pad-box">
                                     <form class="l-f-o__form" method="POST" action="<?php echo ADMINROOT; ?>/login">
                                         <p class="gl-link"><?php echo isset($data['err']) ? $data['err'] : ''; ?></p>
                                         <div class="u-s-m-b-30">

                                             <label class="gl-label" for="login-email">USER *</label>

                                             <input class="input-text input-text--primary-style" type="text"
                                                 id="login-email" placeholder="Enter E-mail" name="username"
                                                 value="<?php echo isset($data['username']) ? $data['username'] : ''; ?>"
                                                 required>
                                         </div>
                                         <div class="u-s-m-b-30">

                                             <label class="gl-label" for="login-password">PASSWORD *</label>

                                             <input class="input-text input-text--primary-style" type="password"
                                                 id="login-password" placeholder="Enter Password" name="password"
                                                 required>
                                         </div>
                                         <div class="gl-inline">
                                             <div class="u-s-m-b-30">

                                                 <button class="btn btn--e-transparent-brand-b-2" type="submit"
                                                     name="login">LOGIN</button>
                                             </div>
                                             <div class="u-s-m-b-30">

                                                 <a class="gl-link" href="<?php echo ADMINROOT; ?>/forgot">Lost Your
                                                     Password?</a>
                                             </div>
                                         </div>
                                         <div class="u-s-m-b-30">

                                             <!--====== Check Box ======-->
                                             <div class="check-box">

                                                 <input type="checkbox" id="remember-me">
                                                 <div class="check-box__state check-box__state--primary">

                                                     <label class="check-box__label" for="remember-me">Remember
                                                         Me</label>
                                                 </div>
                                             </div>
                                             <!--====== End - Check Box ======-->
                                         </div>
                                     </form>
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