<?php $this->load->view('common/header.php');?>
<?php
$subcatgname="NA";
$catgname="NA";
foreach($subcategory['result'] as $subrow){ 
	if($subrow->pSCtg_ID == $productdetails[0]['product_SubCtg']){
		$subcatgname=$subrow->pSCtg_Name;
	}
 }
foreach($category as $catrow){ 
	if($catrow->pCtg_ID == $productdetails[0]['product_Ctg']){
		$catgname=$catrow->pCtg_Name;
	}
	
 }
 ?>
	  <div class="container">
        <div class="clearfix">
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="w3ls-title">
                    <span><?php echo $productdetails[0]['product_Name']; ?></span>
                    <small>
                        <span ><?php echo $productdetails[0]['product_BrandName']; ?></span></small>
                </h3>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered" style="background-color:rgb(244, 218, 247);">
                            <tr>
                                <td rowspan="4" style="width: 15%; text-align: center">
                                    <img class="img-responsive" src="<?php echo $productdetails[0]['product_Image']; ?>" style="height: 120px;" />
                                </td>
                                <td style="width: 20%;">
                                    <b>Parent Category </b>
                                </td>
                                <td>
                                    <span ><?php echo $catgname; ?></span><br />
                                </td>
                            </tr>
                            <tr style="width: 20%;">
                                <td>
                                    <b>Sub Category </b>
                                </td>
                                <td>
                                    <span><?php echo $subcatgname; ?></span><br />
                                </td>
                            </tr>
                            <tr style="width: 20%;">
                                <td>
                                    <b>Strength</b>
                                </td>
                                <td>
                                    <span><?php echo $productdetails[0]['product_Strength']; ?></span>
                                </td>
                            </tr>
                            <tr style="width: 20%;">
                                <td>
                                    <b>Brand Name</b>
                                </td>
                                <td>
                                    <span><?php echo $productdetails[0]['product_BrandName']; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <b>Description :</b>
                                    <div  style="font-size: 14px;text-align:justify;">
                                        <?php echo $productdetails[0]['product_Description']; ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div id="">
	
                                <div>
									<table class="table table-striped table-bordered table-responsive img-responsive table-hover" cellspacing="0" rules="all" border="1" style="border-collapse:collapse;width: 100%">
										<tr>
											<th scope="col" style="width:5%;">Sr. No.</th>
											<th scope="col" style="width:30%;">Quantity</th>
											<th scope="col" style="width:10%;">Strength</th>
											<th scope="col" style="width:10%;">Price</th>
											<th scope="col" style="width:10%;">Unit Price</th>
											<th scope="col" style="width:10%;">Shipping Info</th>
											<th scope="col" style="width:10%;">Add to Cart</th>
										</tr>
										<?php $i=0; foreach($packinfo as $packrow) { $i++; ?>
										<tr>
											<td style="color:Black;"><?php echo $i;?></td>
											<td>
												<span><?php echo $packrow['pkg_Qauntity'];?></span>
											</td>
											<td>
												<span ><?php echo $packrow['pkg_Strength'];?></span>
											</td>
											<td>
												<span><?php echo '&#8377;'.$packrow['pkg_Price'];?></span>
											</td>
											<td>
												<span><?php echo '&#8377;'.$packrow['pkg_UnitPrice'];?></span>
											</td>
											<td>
												<?php if(!empty($packrow['pkg_ShipInfo'])) {?>
												<span class="btn btn-primary btn-block shipping" ><?php echo $packrow['pkg_ShipInfo'];?></span>
												<?php } ?>
											</td>
											<td>
											
												<a  class="btn btn-block btn-primary pp" href="#" onclick="addToCart('<?php echo $packrow['pkg_ID']?>','<?php echo $productdetails[0]['product_Name'];?>',1,'<?php echo $packrow['pkg_productID']?>')">
													<i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart
												</a>
											</td>
										</tr>
										<?php } ?>
									</table>
								</div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel-group" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-collapse panel-primary">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                                            aria-controls="collapseOne" class="collapsed">Benefits </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne"
                                                    aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                             <?php 
															 if(!empty($productdetails[0]['product_Benefits']))
																	echo $productdetails[0]['product_Benefits'];
															else{
																echo '<h4>No Benefits Inserted</h4>';
															}
															 ?>
                                                                
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-collapse panel-primary">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">Working </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                                    aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                       
                                                             <?php 
															 if(!empty($productdetails[0]['product_Working']))
																	echo $productdetails[0]['product_Working'];
															else{
																echo '<h4>No Benefits Inserted</h4>';
															}
															 ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-collapse panel-primary">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">Dosage </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                                    aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                       
                                                             <?php 
															 if(!empty($productdetails[0]['product_Dosage']))
																	echo $productdetails[0]['product_Dosage'];
															else{
																echo '<h4>No Benefits Inserted</h4>';
															}
															 ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-collapse panel-primary">
                                                <div class="panel-heading" role="tab" id="Heading4">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4"
                                                            aria-expanded="false" aria-controls="collapseThree">Precautions </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse4" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                                    aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                       
                                                             <?php 
															 if(!empty($productdetails[0]['product_Precaution']))
																	echo $productdetails[0]['product_Precaution'];
															else{
																echo '<h4>No Precaution Inserted</h4>';
															}
															 ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-collapse panel-primary">
                                                <div class="panel-heading" role="tab" id="HeadingFive">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
                                                            aria-expanded="false" aria-controls="collapseThree">Side Effects </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                                    aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                       
                                                             <?php 
															 if(!empty($productdetails[0]['product_SideEffects']))
																	echo $productdetails[0]['product_SideEffects'];
															else{
																echo '<h4>No Side Effects Inserted</h4>';
															}
															 ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-collapse panel-primary">
                                                <div class="panel-heading" role="tab" id="Heading6">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6"
                                                            aria-expanded="false" aria-controls="collapseThree">Warnings </a>
                                                    </h4>
                                                </div>
                                                <div id="collapse6" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                                    aria-expanded="false" style="height: 0px;">
                                                    <div class="panel-body">
                                                       
                                                             <?php 
															 if(!empty($productdetails[0]['product_Warnings']))
																	echo $productdetails[0]['product_Warnings'];
															else{
																echo '<h4>No Warnings Inserted</h4>';
															}
															 ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
</div>
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo base_url();?>html/web/images/Doctor.png" class="img-responsive" />
                    </div>
                </div>
            </div>
        </div>
        <b>Note:</b> The Shape and the Color might not be the same as shown in the website
        for all the Generic Drugs. This image is just for commercial purpose.<br />
    </div>
<?php $this->load->view('common/footer.php');?>