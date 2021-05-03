<?php
/*
 Template Name: Stockists Page Template
*/
get_header();

?>
   <div class="siteInnerWrapper">
            <div id="content" role="main">

                

<div class="stockistsPage">

    <div class="newsArticleImageWrap">
                    <picture>
                <source srcset="<?=get_template_directory_uri()?>/dist/images/cms/header/mobile/1542884048stockistpageimage.jpg" media="(max-width: 640px)">
                <img srcset="uploads/images/cms/header/1542884048stockistpageimage.jpg"
                     alt="Stockists"
                     class="articleMainImage" />
            </picture>
        
        <div class="articleTitleWrap">
            <span class="line1"></span>
            <div class="articleTitleInnerWrap">
                <h1 class="articleTitle">
                                            Stockists                 
                                    </h1>

                            </div>
            <span class="line2"></span>
        </div>
    </div>

    <div class="contentWrap">

        <h4 class="mapHeading"><span>Search and find</span> Brewgooder Stockists near you</h4>

                    <div class="contentInnerWrap pageContent">
                <div class="searchStockistWrap sameHeight">
                    <div class="formWrap">
                        <div class="title">
                                                        Enter your postcode to find Brewgooder stockists near you
                        </div>
                        <form action="#" method="POST" id="postcodeSearchForm">
                            <div class="row">
                                <input type="text" id="addressInput" name="addressInput" placeholder="EH6 6RS"/>
                                <div class="searchIcon">
                                    <button type="button" id="searchButton">
                                        <i class="far fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="tagsWrap">
                                <input type="radio" name="group" id="group_all" value="all"
                                       style="display: none;" checked />
                                <label for="group_all" class="tag all">All</label>

                                <input type="radio" name="group" id="group_bars" value="bar"
                                       style="display: none;" />
                                <label for="group_bars" class="tag">Bars</label>

                                <input type="radio" name="group" id="group_retail" value="retail"
                                       style="display: none;" />
                                <label for="group_retail" class="tag">Retail</label>
                            </div>

                        </form>
                    </div>

                                                                                                                                                                                                                                                                            
                    <div class="loadingSpinner" id="stockistsLoadingSpinner">
                        <i class="far fa-spinner fa-pulse"></i>
                    </div>

                    <div class="countNumber" id="stockistsCountWrap">
                        Showing <span>0</span> Stockists
                    </div>
                    <span id="noResultsForGeoLocationWrap">Unfortunately, we failed to find stockists around you automatically, please use the manual search.</span>

                    <div class="stockistList" id="locationSelect">
                                        </div>

                    <div id="stockistBlock_template" style="display: none">
                                                <div class="info">
                            <div class="name"></div>
                            <div class="address"></div>
                        </div>
                        <div class="directions"></div>
                        <br class="clear"/>
                    </div>
                </div>
                <div id="map" class="mapWrap sameHeight"></div>

                <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAThLaU5jiQW4XRMEZKtKSLkxAt4khv7rY"></script>
                                
                <br class="clear"/>
            </div> <!-- .contentInnerWrap -->
        
        

                                    
                
                                                                                                                                                                                                                                                                                
                                        </div> <!-- .contentWrap -->
</div>


                <div class="homeInfoBlock homeWellDigger">
                    <span class="line3"></span>
                    <h2 class="bigTitle">Well Digger</h2>
                    <div class="wrapper">
                        <div class="bottomIcon bottomIcon1"><img src="<?=get_template_directory_uri()?>/dist/images/icons/well-digger-icon1.png" alt="Well Digger"/></div>
                        <div class="bottomIcon bottomIcon2"><img src="<?=get_template_directory_uri()?>/dist/images/icons/well-digger-icon2.png" alt="Well Digger"/></div>
                        <div class="bottomIcon bottomIcon3"><img src="<?=get_template_directory_uri()?>/dist/images/icons/well-digger-icon3.png" alt="Well Digger"/></div>
                        <div class="textWrap">
                            <div class="diggerLeft">
                                <div class="weDigWells"><img src="<?=get_template_directory_uri()?>/dist/images/we-dig-wells.png" alt="We Dig Wells"/></div>
                                <div class="weDigWellsTextWrap">
                                    <h3 class="weDigWellsTitle">DIGGING THE PERKS</h3>
                                    <div class="weDigWellsText">
                                        <ul>
<li>EARN IMPACT.</li>
<li>UNLOCK REWARDS.</li>
<li>LATEST IMPACT UPDATES.</li>
<li>EXCLUSIVE BREWGOODER MERCH.</li>
</ul>
                                    </div>
                                </div>
                            </div>
                            <div class="diggerRight">
                                

<form action="https://www.brewgooder.com/care/contact-our-team/newsletter" method="post" class="wellDiggerForm newsletterForm">

    <div class="row">
        <div class="inputWrap">
            <input type="text" name="newsletter_first_name" class="text" placeholder="NAME" value="" />
        </div>
    </div>
    <div class="row">
        <div class="inputWrap">
            <input type="email" name="newsletter_email" class="text" placeholder="EMAIL" value="" />
        </div>
    </div>
        <div class="row">
        <button type="submit" name="signup" class="button hand">JOIN THE COMMUNITY</button>
        <input type="hidden" name="newsletter_action" value="newsletter_subscribe"/>
        <input type="text" name="answer" value="" class="answer" />
        <input type="text" name="address" value="" class="answer" />
    </div> <!-- .row -->

</form>                            </div>
                        </div>
                    </div>
                    <div class="bottomIcons">
                        <div class="wrapper">
                            <div class="bottomIcon bottomIcon4"><img src="<?=get_template_directory_uri()?>/dist/images/icons/well-digger-icon4.png" alt="Well Digger"/></div>
                        </div>
                    </div>
                    <div class="bottomLine1"></div>
                    <div class="bottomIcons bottomIcons2">
                        <div class="wrapper">
                            <div class="bottomIcon bottomIcon5"><img src="<?=get_template_directory_uri()?>/dist/images/icons/well-digger-icon5.png" alt="Well Digger"/></div>
                            <div class="bottomIcon bottomIcon6"><img src="<?=get_template_directory_uri()?>/dist/images/icons/well-digger-icon2.png" alt="Well Digger"/></div>
                        </div>
                    </div>

                                    </div>

            </div> <!-- #content -->
        </div> <!-- .siteInnerWrapper -->

<?php get_footer(); ?>