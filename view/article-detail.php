<?php
/**
 * @file     article-detail.php
 * @brief    Page that displays a specific article
 * @author   Created by Christophe.KUNZLI
 * @version  09.12.2022
 */

$title = "snows - product-detail";
ob_start();

function console_log($output, $with_script_tags = true): void
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

console_log($article[0]);

?>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>

                <div class="slick3">
                    <?php echo '<div class="item-slick3" data-thumb="' . $article[0]["photo"] . '">' ?>
                    <div class="wrap-pic-w">
                        <?php echo '<img src="' . $article[0]["photo"] . '" alt="IMG-PRODUCT">' ?>
                    </div>
                </div>

                <?php echo '<div class="item-slick3" data-thumb="' . $article[0]["photo"] . '">' ?>
                <div class="wrap-pic-w">
                    <?php echo '<img src="' . $article[0]["photo"] . '" alt="IMG-PRODUCT">' ?>
                </div>
            </div>

            <?php echo '<div class="item-slick3" data-thumb="' . $article[0]["photo"] . '">' ?>
            <div class="wrap-pic-w">
                <?php echo '<img src="' . $article[0]["photo"] . '" alt="IMG-PRODUCT">' ?>
            </div>
        </div>
    </div>
</div>
</div>

<div class="w-size14 p-t-30 respon5">
    <h4 class="product-detail-name m-text16 p-b-13">
        <?php echo $article[0]["code"]. " " . $article[0]["brand"] . " " . $article[0]["model"] ?>
    </h4>

    <span class="m-text17">
					<?php echo "Prix: " . $article[0]["dailyPrice"] . ".-" ?>
				</span>


    <!--  -->
    <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
            Description
            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
        </h5>

        <div class="dropdown-content dis-none p-t-15 p-b-23">
            <p class="s-text8">
                <?php echo $article[0]["description"] ?>
            </p>
        </div>
    </div>

    <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
            Additional information
            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
        </h5>

        <div class="dropdown-content dis-none p-t-15 p-b-23">
            <p class="s-text8">
                <?php
                echo "Disponibilité: " . $article[0]["qtyAvailable"];
                ?>
            </p>
        </div>
    </div>

    <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
        <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
            Reviews (0)
            <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
            <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
        </h5>

        <div class="dropdown-content dis-none p-t-15 p-b-23">
            <p class="s-text8">
                Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit.
                Proin gravida arcu nisl, a dignissim mauris placerat
            </p>
        </div>
    </div>
</div>
</div>
</div>


<!-- Relate Product -->
<section class="relateproduct bgwhite p-t-45 p-b-138">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Related Products
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="view/content/images/item-02.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Herschel supply co 25l
                            </a>

                            <span class="block2-price m-text6 p-r-5">
									$75.00
								</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="view/content/images/item-03.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Denim jacket blue
                            </a>

                            <span class="block2-price m-text6 p-r-5">
									$92.50
								</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="view/content/images/item-05.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Coach slim easton black
                            </a>

                            <span class="block2-price m-text6 p-r-5">
									$165.90
								</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                            <img src="view/content/images/item-07.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Frayed denim shorts
                            </a>

                            <span class="block2-oldprice m-text7 p-r-5">
									$29.50
								</span>

                            <span class="block2-newprice m-text8 p-r-5">
									$15.90
								</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="view/content/images/item-02.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Herschel supply co 25l
                            </a>

                            <span class="block2-price m-text6 p-r-5">
									$75.00
								</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="view/content/images/item-03.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Denim jacket blue
                            </a>

                            <span class="block2-price m-text6 p-r-5">
									$92.50
								</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src="view/content/images/item-05.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Coach slim easton black
                            </a>

                            <span class="block2-price m-text6 p-r-5">
									$165.90
								</span>
                        </div>
                    </div>
                </div>

                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                            <img src="view/content/images/item-07.jpg" alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                Frayed denim shorts
                            </a>

                            <span class="block2-oldprice m-text7 p-r-5">
									$29.50
								</span>

                            <span class="block2-newprice m-text8 p-r-5">
									$15.90
								</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
