<?php
 $api="rzp_test_ZAvWkqDlbqbDXt"
 ?>
<form action="" >
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $api?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_GET['total']*100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'FID'.rand(10,100).'END';?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="FIDLE"
    data-description="DESIGNING"
    data-image="./download.jpg"
    data-prefill.name="<?php echo $_GET['name'];?>"
    data-prefill.email="<?php echo $_GET['email'];?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
