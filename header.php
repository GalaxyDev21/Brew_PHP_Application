<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
   <meta content="width=device-width" name="viewport">
   <title>Brewgooder | Bringing water and life to one million people</title>
   <meta charset="utf-8">
   <meta content="noindex, nofollow" name="robots">
   <meta content="Brewgooder, the craft beer label that donates 100% of its profits to clean water projects around the world. Great tasting beer for a very good cause." name="description"><?php wp_head(); ?>
   <script src="<?php echo get_stylesheet_directory_uri().'/dist/js/jquery.min.js';?>" type="text/javascript">
   </script>
   <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
   <link href="<?php echo get_stylesheet_directory_uri().'/dist/css/aa9e7.css'; ?>" rel="stylesheet">
   <script src="<?php echo get_stylesheet_directory_uri().'/dist/js/aa9e7.js';?>" type="text/javascript">
   </script>
   <script>
      ( function ( d ) {
        var config = {
            kitId: 'cfo7wka',
            scriptTimeout: 3000,
            async: true
          },
          h = d.documentElement,
          t = setTimeout( function () {
            h.className = h.className.replace( /\bwf-loading\b/g, "" ) + " wf-inactive";
          }, config.scriptTimeout ),
          tk = d.createElement( "script" ),
          f = false,
          s = d.getElementsByTagName( "script" )[ 0 ],
          a;
        h.className += " wf-loading";
        tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
        tk.async = true;
        tk.onload = tk.onreadystatechange = function () {
          a = this.readyState;
          if ( f || a && a != "complete" && a != "loaded" ) return;
          f = true;
          clearTimeout( t );
          try {
            Typekit.load( config )
          } catch ( e ) {}
        };
        s.parentNode.insertBefore( tk, s )
      } )( document );
   </script>
</head>
<body class="homepage" data-site="brewgooder">
   <div class="siteWrapper1">
      <div class="fixed" id="header">
         <div class="wrapper">
            <a class="flyoutButton"><span></span></a>
            <div class="miniBasketWrap">
               <ul class="miniBasket">
                  <li>
                     <a href="cart/"><span class="basketItemTotalPrice"><span></span> <span></span></span>
                     <div class="numberOfBasketItems"><span class="basketItemsCount"></span> <img alt="Brewgooder" src="<?php echo(get_template_directory_uri().'/dist/images/basket.png');?>"></div></a>
                     <ul class="miniBasketPreview">
                        <li>
                           <h5>Basket Preview</h5>
                           <div class="miniBasketItems">
                              <div class="miniBasketRow">
                                 <div class="imageWrap">
                                    <a>
                                    <div class="dummy"></div>
                                    <div class="imageInnerWrap"><img></div></a>
                                 </div>
                                 <div class="innerText">
                                    <div class="miniBasketDescription">
                                       <a>3</a>
                                    </div>
                                    <div class="miniBasketDetails">
                                       <a class="miniBasketRemove"><i class="fas fa-times-circle"></i></a>
                                       <div class="miniBasketSize">
                                          34
                                       </div>
                                       <div class="miniBasketPrice">
                                          <span>1</span> <span>2$</span>
                                       </div>
                                    </div><!-- .miniBasketDetails -->
                                 </div><!-- .innerText -->
                              </div><!-- .miniBasketRow -->
                           </div><!-- .miniBasketItems -->
                            <span class="emptyMiniBasket">You have no items in your Basket.</span>
                           <div class="miniBasketTotal">
                              <a class="button miniBasketSubmit buttonSmall" href="shop/checkout/basket.html" title="Checkout Now">View Basket</a>
                              <div class="miniBasketTotalPrice">
                                 <span>Total:</span> 1
                              </div>
                           </div><!-- .miniBasketTotal -->
                        </li>
                     </ul><!-- .miniBasketPreview -->
                  </li>
               </ul><!-- .miniBasket -->
            </div>
          
            <div class="memberLinkWrap">
               <a class="topBarMemberLink" href="members/index.html">Login</a>
            </div><!-- .memberLinkWrap -->
            <div class="socialWrap">
               <ul class="social">
                  <li class="facebook">
                     <a href="https://www.facebook.com/brewgooder" target="_blank"><i class="fab fa-facebook"></i> <span class="title">Facebook</span></a>
                  </li>
                  <li class="twitter">
                     <a href="https://twitter.com/brewgoodr" target="_blank"><i class="fab fa-twitter"></i> <span class="title">Twitter</span></a>
                  </li>
                  <li class="instagram">
                     <a href="https://www.instagram.com/brewgooder/" target="_blank"><i class="fab fa-instagram"></i> <span class="title">Instagram</span></a>
                  </li>
                  <li class="linkedin">
                     <a href="https://www.linkedin.com/company/10425631/" target="_blank"><i class="fab fa-linkedin"></i> <span class="title">LinkedIn</span></a>
                  </li>
                  <li class="vimeo">
                     <a href="https://vimeo.com/brewgooder" target="_blank"><i class="fab fa-vimeo"></i> <span class="title">Vimeo</span></a>
                  </li>
                  <li class="untappd">
                     <a href="https://untappd.com/b/brewgooder-clean-water-lager/1194502" target="_blank"><i class="fab fa-untappd"></i> <span class="title">Untappd</span></a>
                  </li>
               </ul>
            </div>
            <div class="flyoutWrap">
               <div class="memberLinkWrap">
                  <a class="topBarMemberLink" href="members/index.html">Login</a>
               </div><!-- .memberLinkWrap -->
      
    <?php //wp_nav_menu( array( 'theme_location' => 'top-menu', 'container_class' => 'mainMenu' ) ); ?>

               
               <ul class=" mainMenu">
                  <li class="">
                     <a class="menuItem" href="/shop" title="Shop">Shop</a>
                  </li>
                  <li class="">
                     <a class="menuItem" href="/office-beers" title="Office Beers">Office Beer Club</a>
                  </li>
                  <li class="">
                     <a class="menuItem" href="/stockists" title="Stockists">Stockists</a>
                  </li>
                  <li class=" hasChildren">
                     <span class="menuItem">About</span>
                     <ul class="">
                        <li class="">
                           <a class="menuItem" href="drinkbeergivewater.html" title="Mission">Mission</a>
                        </li>
                        <li class="">
                           <a class="menuItem" href="our-blog.html" title="Blog">Blog</a>
                        </li>
                     </ul>
                  </li>
               </ul>
             
               <div class="socialWrap">
                  <ul class="social">
                     <li class="facebook">
                        <a href="https://www.facebook.com/brewgooder" target="_blank"><i class="fab fa-facebook"></i> <span class="title">Facebook</span></a>
                     </li>
                     <li class="twitter">
                        <a href="https://twitter.com/brewgoodr" target="_blank"><i class="fab fa-twitter"></i> <span class="title">Twitter</span></a>
                     </li>
                     <li class="instagram">
                        <a href="https://www.instagram.com/brewgooder/" target="_blank"><i class="fab fa-instagram"></i> <span class="title">Instagram</span></a>
                     </li>
                     <li class="linkedin">
                        <a href="https://www.linkedin.com/company/10425631/" target="_blank"><i class="fab fa-linkedin"></i> <span class="title">LinkedIn</span></a>
                     </li>
                     <li class="vimeo">
                        <a href="https://vimeo.com/brewgooder" target="_blank"><i class="fab fa-vimeo"></i> <span class="title">Vimeo</span></a>
                     </li>
                     <li class="untappd">
                        <a href="https://untappd.com/b/brewgooder-clean-water-lager/1194502" target="_blank"><i class="fab fa-untappd"></i> <span class="title">Untappd</span></a>
                     </li>
                  </ul>
               </div>

               <span class="author"><a href="http://brewgooder.com" rel="external" target="_blank" title="Opens in a new window">WEBSITE</a> PROUDLY BREWED IN-HOUSE BY <a href="http://www.brewgooder.com" rel="external" target="_blank" title="Opens in a new window"><strong>Brewgooder Digital Team</strong></a></span>
            </div><!-- .flyoutWrap -->

             <a class="logo" href="index.html"><img alt="Brewgooder" src="<?php echo(get_template_directory_uri().'/dist/images/logo5e1f.png');?>"></a>
         </div><!-- .wrapper -->
      </div><!-- #header -->
   </div>