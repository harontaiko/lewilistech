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

                                        <a href="<?php echo ADMINROOT; ?>/products">products</a>
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
                                            <h1 class="dash__h1 u-s-m-b-14">Edit
                                                <?php echo isset($data['name']) ? $data['name']: 'N/A' ?></h1>

                                            <span class="dash__text u-s-m-b-30">update
                                                <?php echo isset($data['name']) ? $data['name']: 'N/A' ?></span>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form enctype="multipart/form-data" class="dash-track-order"
                                                        method="POST" action="<?php echo ADMINROOT; ?>/editThisProduct">
                                                        <div class="gl-inline">
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-name">Product Name
                                                                    *</label>

                                                                <input class="input-text input-text--primary-style"
                                                                    type="text" id="product-name" name="product-name"
                                                                    placeholder="e.g. Hp 250 G6 Core i3" required
                                                                    value="<?php echo isset($data['name']) ? $data['name'] : ''; ?>">
                                                            </div>
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-price">Price
                                                                    *</label>

                                                                <input class="input-text input-text--primary-style"
                                                                    type="text" id="product-price" name="product-price"
                                                                    placeholder="e.g. 20000 dont use commas" required
                                                                    value="<?php echo isset($data['price']) ? $data['price'] : ''; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="gl-inline">
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-desc">Product
                                                                    Description
                                                                    *</label>

                                                                <textarea class="input-text input-text--primary-style"
                                                                    id="" cols="30" rows="30" id="product-desc"
                                                                    name="product-desc"
                                                                    placeholder="e.g. elegant, stylish laptop...."
                                                                    required><?php echo isset($data['description']) ? $data['description'] : ''; ?></textarea>

                                                            </div>
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-stock">in Stock
                                                                    *</label>

                                                                <input class="input-text input-text--primary-style"
                                                                    type="number" id="product-stock"
                                                                    name="product-stock" placeholder="qty in stock"
                                                                    required
                                                                    value="<?php echo isset($data['stock']) ? $data['stock'] : ''; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="gl-inline">
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-color">Product
                                                                    Color
                                                                    *</label>

                                                                <input class="input-text input-text--primary-style"
                                                                    type="text" id="product-color" name="product-color"
                                                                    placeholder="e.g. silver black"
                                                                    value="<?php echo isset($data['color']) ? $data['color'] : ''; ?>">
                                                            </div>
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-weight">Weight
                                                                    *</label>

                                                                <input class="input-text input-text--primary-style"
                                                                    type="number" id="product-weight"
                                                                    name="product-weight" placeholder="in kgs"
                                                                    value="<?php echo isset($data['weight']) ? $data['weight'] : ''; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="gl-inline">
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-category">Product
                                                                    Category
                                                                    *</label>

                                                                <select class="input-text input-text--primary-style"
                                                                    name="product-category" id="product-category"
                                                                    required>
                                                                    <option value="">Select Category</option>
                                                                    <option selected
                                                                        value="<?php echo isset($data['category']) ? $data['category'] : 'N/A' ?>">
                                                                        <?php echo isset($data['category']) ? $data['category'] : 'N/A' ?>
                                                                    </option>
                                                                    <option value="electronics">Electronics</option>
                                                                    <option value="software">Software</option>
                                                                    <option value="bags-other-categories">Bags & Other
                                                                        Categories</option>
                                                                </select>
                                                            </div>
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-sub">Product
                                                                    Sub-Category *</label>

                                                                <select class="input-text input-text--primary-style"
                                                                    name="product-sub" id="product-sub" required>
                                                                    <option value="">Select Sub category</option>
                                                                    <option selected
                                                                        value="<?php echo isset($data['sub_category']) ? $data['sub_category'] : 'N/A' ?>">
                                                                        <?php echo isset($data['sub_category']) ? $data['sub_category'] : 'N/A' ?>
                                                                    </option>
                                                                    <option value="propreitart">propreitary software
                                                                    </option>
                                                                    <option value="antivirus">Antivirus software
                                                                    </option>
                                                                    <option value="drivers">Drivers</option>
                                                                    <option value="hardware">Hardware</option>
                                                                    <option value="peripheral">Peripherals</option>
                                                                    <option value="laptop">Laptops</option>
                                                                    <option value="desktop">Desktops</option>
                                                                    <option value="bags">bags</option>
                                                                    <option value="holders">holders</option>
                                                                    <option value="others">other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="gl-inline">
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-disc">Discount %
                                                                    *</label>

                                                                <input class="input-text input-text--primary-style"
                                                                    type="number" id="product-disc" name="product-disc"
                                                                    placeholder="e.g. 0 dont use %"
                                                                    value="<?php echo isset($data['discount']) ? $data['discount'] : ''; ?>">
                                                            </div>
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-newprice">New
                                                                    Price*</label>

                                                                <input readonly
                                                                    class="input-text input-text--primary-style"
                                                                    type="number" id="product-newprice"
                                                                    name="product-newprice" value="">
                                                            </div>
                                                        </div>
                                                        <div class="gl-inline">
                                                            <label class="gl-label" for="product-model">Model*</label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="text" id="product-model" name="product-model"
                                                                placeholder="hp/dell/toshiba/adidas"
                                                                value="<?php echo isset($data['model']) ? $data['model'] : ''; ?>">
                                                        </div>
                                                        <div class="gl-inline">
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-image">Product
                                                                    Image(600x600px)
                                                                    *</label>

                                                                <input class="input-text input-text--primary-style"
                                                                    type="file" accept="image/*" id="product-image"
                                                                    name="product-image" onchange="readURL(this)">
                                                            </div>
                                                            <div class="u-s-m-b-30">

                                                                <label class="gl-label" for="product-newprice"></label>
                                                                <?php if(!empty($data['image'])): ?>
                                                                <img class="image-product" id="image-product"
                                                                    src="<?php echo URLROOT; ?>/public/images/images/products/<?php echo $data['image'] ?>"
                                                                    alt="product">
                                                                <?php else: ?>
                                                                <img class="image-product" id="image-product"
                                                                    src="<?php echo URLROOT; ?>/public/images/placeholder.png"
                                                                    alt="product">
                                                                <?php endif ?>
                                                            </div>
                                                        </div>

                                                        <button class="btn btn--e-brand-b-2" type="submit"
                                                            name="edit-product">UPDATE</button>
                                                    </form>
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