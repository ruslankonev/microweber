
    <h5 class="alert alert-success"><?php _e("Your card payments are secured by PayPal"); ?></h5>


    <label><?php _e("First Name"); ?> </label>
    <input name="cc_first_name"  type="text" class="field-full form-control" value="" />

  
    <label><?php _e("Last Name"); ?></label>
    <input name="cc_last_name"  type="text" class="field-full form-control" value="" />


    <label><?php _e("Credit Card"); ?></label>
    <select name="cc_type" class="field-full form-control">
        <option value="Visa" selected><?php _e("Visa"); ?></option>
        <option value="MasterCard"><?php _e("MasterCard"); ?></option>
        <option value="Discover"><?php _e("Discover"); ?></option>
        <option value="Amex"><?php _e("American Express"); ?></option>
      </select>


    <label><?php _e("Credit Card Number"); ?></label>
    <input name="cc_number"  type="text" value="" class="field-full form-control" />

  
    <label><?php _e("Expiration Date"); ?></label>
    <input name="cc_month" class="input-mini form-control input-sm" placeholder="<?php _e("Month"); ?>" style="margin-right:10px;"  type="text" value="" class="field-full form-control" />
    <input name="cc_year" class="input-mini form-control input-sm" placeholder="<?php _e("Year"); ?>"  type="text" value="" class="field-full form-control" />

    <label><?php _e("Verification Code"); ?></label>
    <input name="cc_verification_value"  type="text" value="" class="field-full form-control" />
<div class="cc_process_error"></div>


<?php 

$paypal_is_test = (get_option('paypalpro_testmode', 'payments')) == 'y'; 
 
?>
 
<?php if($paypal_is_test == true and is_admin()): ?>
<?php print notif("You are using Paypal Pro in test mode!"); ?>
<?php endif; ?>






