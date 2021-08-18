<?php if(!isset($_POST['submit']))
{
	 header("Location:../index.php");
	}
	?>
<html>

<head><title>Buy Now | Asteroid Learning</title>
	<?php include("../asteroid/includes/include_city.php");?>
<?php include("../includes/headerforpages.php");?>
<!-- TRAINING-->
</head>

<body>
<div class="topbar"></div><div class="midbar"></div>
<div id="wrapper">
<div class="selectedtab3"></div><!--I made it for free-->
<link rel="stylesheet" type="text/css" href="../css/aboutus.css" /><!--same css for pages and about us-->

<!-- New start from here-->
<?php include("../includes/tabsforpages.php")?>
<div class="aboutus" style="color:#000000;">Buy Now</div>
<div class="textbody"  style="color:#000000;"> </div>
<div class="bodycolumn1"  style="color:#000000;"> <br><br><br><br><br><!--Start from here-->

<?php $this_product=$_GET['product_name'];?>

        <form action="gtx_buy.php?this_product=<?php echo urlencode("$this_product");?>" class="register" method="POST" name="buycart">
           	<span style="font-size:20; color:#7B7C7C;"> Buy Now <?php echo $this_product;?></span><br><br>
        
            <fieldset class="row2">
                <legend>Shipping Details
                </legend>
                <p>
                    <label>Name *
                    </label>
                    <input type="text" class="long" required name="name" Title="Enter your full name"/>
                </p>
				   <p>
                    <label>Email *
                    </label>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required name="email" title="Enter a valid email ID"/>
                </p>
                <p>
                    <label>Phone *
                    </label>
                    <input type="text"  pattern="[0-9]{10}" maxlength="10"  required title="Enter a valid Phone/Mobile number without 0" name="contact"/>
                </p>
           
                        <p>
                    <label>City *
                    </label>
					   </p>
					
      <input type="text" size="45" value="" id="country" onkeyup="suggest(this.value);" onblur="fill();" class="long" autocomplete="off" required name="city"/>
     <div id="suggest">
      <div class="suggestionsBox" id="suggestions" style="display: none;">
        <div class="suggestionList" id="suggestionsList"></div>
      </div>
   </div>

              <p>
                    <label>Country 
                    </label>
                    <select  name="country">
                       
                        <option value="1">India
                        </option>
                    </select>
                </p>
                           <p>
                    <label>Quantity 
                    </label>
                    <select  name="quantity" required>
                       
                        <option value="1">1
                        </option>
						 <option value="2">2
                        </option>
						 <option value="5">5
                        </option>
						 <option value="10">10
                        </option>
						 <option value="15">15
                        </option>
						 <option value="20">20
                        </option>
						 <option value="30">30
                        </option>
						 <option value="50">50
                        </option>
						 <option value="100">100
                        </option>
                    </select>
                </p>
                          
              
                  <p>
                    <label class="optional"  >Address *
                    </label>
                  <input class="long" type="text" name="address" required/>
                </p>
                  <p>
                    <label class="optional" >Pin Code
                    </label>
                  <input class="long" type="text" pattern="[0-9]{6}" maxlength="6"  name="address2" required/>
                </p>
                <p>&nbsp;</p>
            </fieldset>
            <br><br>
                <p>&nbsp;</p>
                <div class="infobox2"><h4>VERIFY YOUR DETAILS</h4>
                    <p>Clearly mention your shipping name and address to avoid faults in delivery.</p>
                    <p>Thank You for choosing Asteroid.</p>
                </div>
            </fieldset><br>
            <fieldset class="row3" style="height:35px;">
            Price: <?php echo $_GET['price_entity'];?>
            
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value="" required/>
                    <label>Entered data is correct and I agree to buy.</label>
                </p>
                <p class="agreement">
                    <input name="promo" type="checkbox" value="YES"/>
                    <label>Send me promotional e-mails and informations</label>
                </p>
                <p class="agreement">&nbsp;</p>
            </fieldset>
            <div><button class="button" type="submit" name="submit" >Place Order &raquo;</button></div>
        </form>



<?php $newfir=$_GET['fir'];?>
  <div class="buynowpic" style="background-repeat:no-repeat; background-size: contain; background-image:url('<?php echo $newfir;?>');"></div>

</div>



<?php include("../includes/footerforpages.php");?>

</body>
</html>