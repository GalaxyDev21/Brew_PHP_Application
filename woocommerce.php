<?php get_header(); ?>
<div class="siteInnerWrapper">
            <div id="content" role="main">
                <div id="loadingOverlay"></div>
                <div class="browseWrap">
                    <div class="contentPageWrap">
                        <div id="browse" role="main">
                            <div class="js_basicSidebarAccordion" id="productFilter">
                               
                                <div class="shopIcon">
                                    <img alt="" src="sites/brewgooder/images/hand_beer.png">
                                    <h2>Shop</h2>
                                </div>

                                <div class="mobileCategories">
                                    <h5 class="sidebarTitle">Categories</h5>
                                </div>

                                <ul class="basicCategories">
                                    <li class=" active">
                                        <a class="js_filterLink" href="browse.html">Shop All</a>
                                    </li>
                                    <li class="">
                                        <a class="js_filterLink" href="browse/c-Beer-1/index.html">Beer</a>
                                    </li>
                                    <li class="">
                                        <a class="js_filterLink" href="browse/c-Merch-2/index.html">Merch</a>
                                    </li>
                                    <li class="">
                                        <a class="js_filterLink" href="browse/c-Glassware-3/index.html">Glassware</a>
                                    </li>
                                </ul>

                                <div class="searchShopWrap desktop">
                                    <form action="https://www.brewgooder.com/browse" class="searchForm" method="post">
                                        <fieldset>
                                            <div class="row">
                                                <input class="text" id="search-filter322072019" name="search-filter" placeholder="Search Shop" type="text"> <button type="submit"><i class="fa fa-search"></i></button>
                                            </div><!-- .row -->
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="searchMobileTrigger">
                                    <i class="fa fa-search"></i> <i class="fa fa-times"></i>
                                </div>
                            </div><!-- #productFilter -->
                            <div class="searchShopWrap mobile">
                                <form action="https://www.brewgooder.com/browse" class="searchForm" method="post">
                                    <fieldset>
                                        <div class="row">
                                            <input class="text" id="search-filter471612769" name="search-filter" placeholder="Enter phrase and press enter" type="text"> <button type="submit"><i class="fa fa-search"></i></button>
                                        </div><!-- .row -->
                                    </fieldset>
                                </form>
                            </div>
                            <div class="shopKeyMessages">
                                <ul>
                                    <li>
                                        <div class="imgWrap"><img alt="" src="sites/brewgooder/images/delivery-icon.png"></div>
                                        <div class="claim">
                                            get free uk delivery on orders £40+ <span>(mainland UK)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="imgWrap"><img alt="" src="sites/brewgooder/images/guy-icon.png"></div>
                                        <div class="claim">
                                            <span>get beer delivered to your office!</span> <a href="office-beers.html">find out more</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="filterContent">
                                <div id="productFilterItems">

									<?php woocommerce_content(); ?>

								</div>
                                <div id="productFilterPageNumbers"></div><!-- #productFilterPageNumbers -->
                            </div><!-- .filterContent -->
                        </div><!-- #browse -->
                        
                        <div class="joinTheClubWrap">
                            <div class="wrapper">
                                <div class="leftClaim">
                                    <h3>MAKE AN IMPACT</h3>
                                    <p>JOIN THE CLUB</p><a class="button" href="office-beers.html">DISCOVER CLUB</a>
                                </div>
                                <div class="rightInfo">
                                    <ul>
                                        <li>
                                            <div class="imgWrap"><img alt="" src="sites/brewgooder/images/joinClubIcon-1.png"></div>
                                            <h4>Free standard UK Mainland Delivery</h4>
                                        </li>
                                        <li>
                                            <div class="imgWrap"><img alt="" src="sites/brewgooder/images/joinClubIcon-2.png"></div>
                                            <h4>Build your brewgooder story and share</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- .contentPageWrap -->
                </div><!-- .browseWrap -->
               
            </div><!-- #content -->
        </div><!-- .siteInnerWrapper -->
<?php get_footer(); ?>