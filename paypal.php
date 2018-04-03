
<!-- Configuration-->

<?php require_once("../resources/config.php"); ?>


<!-- Header--><!--Navigation -->
<?php include(TEMPLATE_FRONT .  "/header.php");?>




<?php 
    if(isset($_SESSION['product_1'])){
        echo $_SESSION['product_1'];
    }
 ?>












    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
        <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
      <h1>Checkout</h1>

<!-- <form action=""> -->
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="business" value="123kanishka-facilitator@gmail.com">
  <input type="hidden" name="currency_code" value="US">
  <input type='hidden' name='rm' value='1'>

    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
            <?php cart(); ?>
        </tbody>
    </table>
    <?php echo show_paypal(); ?>
</form>



<!--  ***********CART TOTALS*************-->

            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php echo $_SESSION['total_items'] ?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">Rs.<?php echo $_SESSION['total'] ?></span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


      


    </div>
    <!-- /.container -->

<?php include(TEMPLATE_FRONT .  "/footer.php");?>
