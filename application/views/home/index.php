<?php $this->load->view('common/header.php');?>
	<div class="banner">
        <div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel"
            data-interval="4000" data-pause="hover">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo base_url(); ?>html/web/images/3.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated bounceInUp">
                            Get Most of your sexual Life</h3>
                        <h4 data-animation="animated bounceInDown">
                            Buy Generic Viagra @$0.46 per pill</h4>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>html/web/images/slid6.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated fadeInLeft">
                            Premature Ejaculation ?</h3>
                        <h4 data-animation="animated fadeInRight">
                            Get Relief from Ejaculation Problem Buy Generic Priligy @$1.69 per pill</h4>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>html/web/images/Slide2.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated zoomInLeft">
                             Get 10% off on Every Order's + Free Express Shipping on Order Above $99
                        </h3>
                        <h4 data-animation="animated zoomInRight">
                           </h4>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>html/web/images/HQ.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated zoomInLeft">
                           Have a Question</h3>
                        <h4 data-animation="animated zoomInRight">
                            Our Pharmacists are Ready to Help !</h4>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo base_url(); ?>html/web/images/Slide4.jpg" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_center">
                        <h3 data-animation="animated zoomInLeft">
                            Best Quality Medications</h3>
                        <h4 data-animation="animated zoomInRight">
                            At Low Prices</h4>
                    </div>
                </div>
            </div>
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
                <span class="fa fa-angle-left kb_icons" aria-hidden="true"></span><span class="sr-only">
                    Previous</span> </a><a class="right carousel-control kb_control_right" href="#kb"
                        role="button" data-slide="next"><span class="fa fa-angle-right kb_icons" aria-hidden="true">
                        </span><span class="sr-only">Next</span> </a>
        </div>
        <script src="<?php echo base_url(); ?>html/web/js/custom.js"></script>
    </div>
    <div class="">
            <img src="<?php echo base_url(); ?>html/web/images/3SS.jpg" class="img-responsive" />
    </div>
    <!-- //banner -->
    <!-- welcome -->
    <div class="welcome">
        <div class="container">
            <div class="welcome-info">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class=" nav-tabs" role="tablist">
                    </ul>
                    <div class="clearfix">
                    </div>
                    <h3 class="w3ls-title">
                        Featured Products
                    </h3>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                            <div class="tabcontent-grids">
                                <div id="owl-demo" class="owl-carousel">
                                    <?php
                                          foreach($products['result'] as $productrow){
														if($productrow->product_Featured  == 1){
												?>
                                                <div class="item">
                                                    <div class="glry-w3agile-grids agileits">
                                                        <div class="new-tag">
                                                            <h6>
                                                                New</h6>
                                                        </div>
                                                        <a href="<?php echo base_url();?>products/products/details/<?php echo $productrow->product_ID; ?>/<?php echo $productrow->product_Name; ?>">
                                                            
                                                            <img  src="<?php echo $productrow->product_Image; ?>" style="max-height: 220px; max-width: 250px;height: 220px; width: 250px" />
                                                           
                                                        </a>
                                                        <div class="view-caption agileits-w3layouts">
                                                            <h4>
                                                                <a href="<?php echo base_url();?>products/products/details/<?php echo $productrow->product_ID; ?>/<?php echo $productrow->product_Name; ?>">
                                                                    <?php echo $productrow->product_Name; ?> <?php echo $productrow->product_Strength; ?> </a></h4>
                                                            <p><span> <?php echo $productrow->product_BrandName; ?> <?php echo $productrow->product_Strength; ?> </span></p>
                                                            <h5>&#8377;<?php echo $productrow->product_unitPrice; ?></h5>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                                
										  <?php } }?>	
                                </div>
                            </div>
                            <div class="tabcontent-grids">
                                <div align="right">
                                    <a href="<?php echo base_url();?>products/products" class="btn btn-black">View All Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- add-products -->
    <div class="add-products">
        <div class="container">
            <div class="add-products-row">
                <div class="col-md-4">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>html/web/Herbal/Wheatgrass-Ultra-Juice-B.jpg" class="img-responsive" />
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>html/web/Herbal/Weight-Management-Ultra-Juice-B.jpg" class="img-responsive" />
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>html/web/Herbal/Ashwagandha-coffee-S.jpg" class="img-responsive" />
                    </a>
                </div>
                <div class="clerfix">
                </div>
            </div>
        </div>
    </div>
    <!-- //add-products -->
    <!-- coming soon -->
    <div class="soon">
        <div class="carousel-reviews broun-block">
            <div class="container">
                <div class="row">
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Hercules</a>
                                        <div class="mark">
                                            My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star">
                                            </span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star">
                                                </span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5"
                                                    class="glyphicon glyphicon-star-empty"></span></span>
                                        </div>
                                        <p>
                                            Never before has there been a good film portrayal of ancient Greece's favourite
                                            myth. So why would Hollywood start now? This latest attempt at bringing the son
                                            of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett
                                            Ratner. If the name of the director wasn't enough to dissuade ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img src="" />
                                        <a title="" href="#">Anna</a> <i>from Glasgow, Scotland</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">The Purge: Anarchy</a>
                                        <div class="mark">
                                            My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star">
                                            </span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty">
                                                </span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5"
                                                    class="glyphicon glyphicon-star-empty"></span></span>
                                        </div>
                                        <p>
                                            The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more
                                            than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt
                                            at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and
                                            most immediate thought was "we really don't need another one of these."
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img src="" />
                                        <a title="" href="#">Ella Mentree</a> <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Planes: Fire & Rescue</a>
                                        <div class="mark">
                                            My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star">
                                            </span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star">
                                                </span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5"
                                                    class="glyphicon glyphicon-star"></span></span>
                                        </div>
                                        <p>
                                            What a funny and entertaining film! I did not know what to expect, this is the fourth
                                            film in this vehicle's universe with the two Cars movies and then the first Planes
                                            movie. I was wondering if maybe Disney pushed it a little bit. However, Planes:
                                            Fire and Rescue is an entertaining film that is a fantastic sequel in this magical
                                            franchise.
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img src="" />
                                        <a title="" href="#">Rannynm</a> <i>Indonesia</i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Hercules</a>
                                        <div class="mark">
                                            My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star">
                                            </span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star">
                                                </span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5"
                                                    class="glyphicon glyphicon-star-empty"></span></span>
                                        </div>
                                        <p>
                                            Never before has there been a good film portrayal of ancient Greece's favourite
                                            myth. So why would Hollywood start now? This latest attempt at bringing the son
                                            of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett
                                            Ratner. If the name of the director wasn't enough to dissuade ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="">
                                        <a title="" href="#">Anna</a> <i>from Glasgow, Scotland</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">The Purge: Anarchy</a>
                                        <div class="mark">
                                            My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star">
                                            </span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty">
                                                </span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5"
                                                    class="glyphicon glyphicon-star-empty"></span></span>
                                        </div>
                                        <p>
                                            The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more
                                            than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt
                                            at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and
                                            most immediate thought was "we really don't need another one of these."
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="">
                                        <a title="" href="#">Ella Mentree</a> <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Planes: Fire & Rescue</a>
                                        <div class="mark">
                                            My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star">
                                            </span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star">
                                                </span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5"
                                                    class="glyphicon glyphicon-star"></span></span>
                                        </div>
                                        <p>
                                            What a funny and entertaining film! I did not know what to expect, this is the fourth
                                            film in this vehicle's universe with the two Cars movies and then the first Planes
                                            movie. I was wondering if maybe Disney pushed it a little bit. However, Planes:
                                            Fire and Rescue is an entertaining film that is a fantastic sequel in this magical
                                            franchise.
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="">
                                        <a title="" href="#">Rannynm</a> <i>Indonesia</i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4 col-sm-6">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Hercules</a>
                                        <div class="mark">
                                            My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star">
                                            </span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star">
                                                </span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5"
                                                    class="glyphicon glyphicon-star-empty"></span></span>
                                        </div>
                                        <p>
                                            Never before has there been a good film portrayal of ancient Greece's favourite
                                            myth. So why would Hollywood start now? This latest attempt at bringing the son
                                            of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett
                                            Ratner. If the name of the director wasn't enough to dissuade ...</p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="">
                                        <a title="" href="#">Anna</a> <i>from Glasgow, Scotland</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">The Purge: Anarchy</a>
                                        <div class="mark">
                                            My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star">
                                            </span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty">
                                                </span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5"
                                                    class="glyphicon glyphicon-star-empty"></span></span>
                                        </div>
                                        <p>
                                            The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more
                                            than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt
                                            at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and
                                            most immediate thought was "we really don't need another one of these."
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="">
                                        <a title="" href="#">Ella Mentree</a> <i>United States</i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                    <div class="block-text rel zmin">
                                        <a title="" href="#">Planes: Fire & Rescue</a>
                                        <div class="mark">
                                            My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star">
                                            </span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2"
                                                class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star">
                                                </span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5"
                                                    class="glyphicon glyphicon-star"></span></span>
                                        </div>
                                        <p>
                                            What a funny and entertaining film! I did not know what to expect, this is the fourth
                                            film in this vehicle's universe with the two Cars movies and then the first Planes
                                            movie. I was wondering if maybe Disney pushed it a little bit. However, Planes:
                                            Fire and Rescue is an entertaining film that is a fantastic sequel in this magical
                                            franchise.
                                        </p>
                                        <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                                    </div>
                                    <div class="person-text rel">
                                        <img alt="" src="">
                                        <a title="" href="#">Rannynm</a> <i>Indonesia</i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                                href="#carousel-reviews" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                                </span></a>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="container">
			<h3>Mega Deal Of the Week</h3>
			<h4>Coming Soon Don't Miss Out</h4>  
			<div id="countdown1" class="ClassyCountdownDemo"></div>
		</div>-->
    </div>
    <!-- //coming soon -->
    <!-- footer-top -->
    <div class="w3agile-ftr-top">
        <div class="container">
            <div class="ftr-toprow">
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="ftr-top-right">
                        <h4>
                            FREE DELIVERY</h4>
                        <p>
                            We provided you with best shipment facilities for products. We give you free shipment
                            on bulk order all over the world.</p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="ftr-top-right">
                        <h4>
                            CUSTOMER CARE</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac
                        </p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="col-md-4 ftr-top-grids">
                    <div class="ftr-top-left">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </div>
                    <div class="ftr-top-right">
                        <h4>
                            GOOD QUALITY</h4>
                        <p>
                            All our medicines are manufactured under the guidelines for FDA standards which
                            makes our medications of high standard quality with better result.
                        </p>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('common/footer.php');?>