<?php 
include 'Session.php';
include 'includes/header.php';
include 'includes/navBars.php';
include 'includes/sidebar.php';
$deal=$_REQUEST['deal']; 
$sel="SELECT * FROM deals WHERE deal_name='$deal'";
$res=mysqli_query($con,$sel);
$sel_row=mysqli_fetch_array($res);
?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#" style="color:#C03;">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">Payment Details</li>
        </ol>
      <div class="card-header">Details</div>
      <div class="card-body">
        <div class="text-center mb-4">
          <h4>Deal Amount</h4>
          <p>It is the actual amount of the deal of which 50% payment you have to pay by hand before the event  day. If you want any discount kindly visit out office.</p>
        </div>
        <form action="#" name="paymentDetails" id="payment" method="Post" >
          <div class="form-group">
            <div class="custom-file">
              <input type="text" class="form-control" id="name" name="name" readonly
              	value="<?php echo $sel_row['deal_name'];?>"
              >
            </div>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input type="text" class="form-control" id="payment" name="payment" readonly
              	value="<?php echo $sel_row['deal_payment'];?>"
              >
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php 
include 'includes/scripts.php';
include 'includes/footer.php';

?>