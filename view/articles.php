<?php
/**
 * @file     articles.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  02.12.2022
 */
$title = "snows - articles";
ob_start();
?>


<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m"
         style="background-image: url(/view/content/images/heading-pages-02.jpg);">
    <h2 class="l-text2 t-center">
        Women
    </h2>
    <p class="m-text13 t-center">
        New Arrivals Women Collection 2018
    </p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!-- Product -->
                <div class="row">
                    <?php foreach ($articles as $article) : ?>

                        <!-- Block2 -->
                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">

                                    <?php echo '<img src="' . $article["photo"] . '" alt="IMG-PRODUCT">' ?>
                                    <div class="block2-overlay trans-0-4">
                                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Add to
                                                Cart
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <?php echo '<a href="../index.php?action=product-detail&code=' . $article["code"] . '"' ?>

                                    lass="block2-name dis-block s-text3 p-b-5">
                                    <?php echo $article["model"] ?>
                                    </a>

                                    <span class="block2-price m-text6 p-r-5"> <?php echo "$" . $article["dailyPrice"] ?></span>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</section>


<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
