<?php
	// Stripe API configuration  
	define('STRIPE_API_KEY', 'sk_test_51H4rgEKAR18wy7IsF9I8tvnaaDUwOfQjFaRdb46pN6ipyFgvWQBqjNfHsjn6Lo47TVSvIwTDqwQ7lzEohyadMsFp002J8OMivp'); 
	define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51H4rgEKAR18wy7IshtqRECrXhMsp1djYwDxDIYDUrTHWn80PGzUSU75hoqOsD0Pb0Tq3eY6FLtMY8lSj6r0B0UkX00ILA76brp'); 
?>
<?php 
$payment_id = $statusMsg = ''; 
$ordStatus = 'error'; 
 
// Check whether stripe token is not empty 
if(!empty($_POST['stripeToken'])){ 
    session_start();
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $user_id = $_POST['userid'];
    $order_id = $_POST['orderid'];
    $ammount = $_POST['ammount'];   
    $token  = $_POST['stripeToken']; 
    $email = $_POST['email']; 
    $currency = 'INR';
    
    $description = 'Customer Name: '.$first_name.' '.$last_name.' | ';
    $description .= 'Customer ID: '.$user_id.' | ';
    $description .= 'Order ID: '.$order_id.' | ';
    $description .= 'Ammount Paid: '.$ammount.' '.$currency;
    // Include Stripe PHP library 
    require_once 'stripe/init.php'; 
     
    // Set API key 
    \Stripe\Stripe::setApiKey(STRIPE_API_KEY); 
     
    // Add customer to stripe 
    try {  
        $customer = \Stripe\Customer::create(array( 
            'customer' => $email,
            'description' =>$description
        )); 
    }catch(Exception $e) {  
        $api_error = $e->getMessage();  
    } 
    if(empty($api_error) && $customer){  
        // Charge a credit or a debit card 
        try {  
            $charge = \Stripe\Charge::create(array( 
                'customer' => $email,
                'amount'   => $ammount, 
                'currency' => $currency,
                'source'  => $token,
                'description' => $description
            )); 
        }catch(Exception $e) {  
            $api_error = $e->getMessage();  
        } 
         
        if(empty($api_error) && $charge){
            // Retrieve charge details 
            $chargeJson = $charge->jsonSerialize(); 
            
            // Check whether the charge is successful 
            if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){ 
                // Transaction details  
                $transactionID = $chargeJson['balance_transaction']; 
                $paidAmount = $chargeJson['amount'];
                $paidCurrency = $chargeJson['currency']; 
                $payment_status = $chargeJson['status']; 
                 
                    $ordStatus = 'success'; 
                    $statusMsg = 'Your Payment has been Successful!'; 
                
            }else{ 
                $statusMsg = "Transaction has been failed!"; 
            } 
        }else{ 
            $statusMsg = "Charge creation failed! $api_error";  
        } 
    }else{  
        $statusMsg = "Invalid card details! $api_error";  
    } 
}else{ 
    $statusMsg = "Error on form submission."; 
} 
?>

<div class="container">
    <div class="status">
        <?php if(!empty($transactionID)){ ?>
            <h1>Congrats ! Payment successfull.</h1>
            <h4>Payment Information</h4>
            <p><b>Transaction ID:</b> <?php echo $transactionID; ?></p>
            <p><b>Paid Amount:</b> <?php echo $paidAmount.' '.$paidCurrency; ?></p>
            <p><b>Payment Status:</b> <?php echo $payment_status; ?></p>
            <p><b>Price:</b> <?php echo $amount.' '.$currency; ?></p>
       <?php } else { ?>
             <h1>Sorry ! Payment Failed.</h1>
       <?php } ?>
    </div>
    <a href="http://phpproject.developeriam.com/" class="btn-link">Click to go back</a>
</div>