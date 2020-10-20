<?php 
    session_start();
?>
<html>
<body style="text-align:left;">
<div class='card-wrapper'></div>
<!-- CSS is included via this JavaScript file -->
<?php
    $userid = base64_decode($_GET['userid']);
    $itemNumber = $_GET['orderid']; 
    $itemPrice = base64_decode($_GET['token']); 
    $currency = "INR"; 
	// Stripe API configuration  
	define('STRIPE_API_KEY', 'sk_test_51H4rgEKAR18wy7IsF9I8tvnaaDUwOfQjFaRdb46pN6ipyFgvWQBqjNfHsjn6Lo47TVSvIwTDqwQ7lzEohyadMsFp002J8OMivp'); 
	define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51H4rgEKAR18wy7IshtqRECrXhMsp1djYwDxDIYDUrTHWn80PGzUSU75hoqOsD0Pb0Tq3eY6FLtMY8lSj6r0B0UkX00ILA76brp'); 
?>
<div id="paymentResponse"></div>
<form action="http://phpproject.developeriam.com/pages/paymentprocess.php" method="POST"  id="paymentFrm"> 
    <br/><br/>
   
    <input type="text" name="first-name" placeholder="First Name" required />
    <input type="text" name="last-name" placeholder="Last Name" required /><br/><br/>
    <div id="card_number" class="field"></div>
    <br/><br/>
    <div id="card_expiry" class="field"></div>
    <br/><br/>
    
     <div id="card_cvc" class="field"></div><br/><br/>
    <input type="hidden" name="userid" value="<?php echo base64_decode($_GET['userid']); ?>" />
    <input type="button" value="Validate your card" id="validateCard">
    <input type="hidden" name="orderid"  value="<?php echo $_GET['orderid']; ?>" />
    <input type="hidden" name="ammount"  value="<?php echo base64_decode($_GET['token']); ?>" />
    <input type="submit" name="submit" id="submit" value="Click to Pay Now" style="display:none">
    <br/><br/>
    <strong>Test Card Number</strong>: <input type="text" value="4242 4242 4242 4242" disabled/> <br/><br/>
    <strong>Test Card Date</strong>: <input type="text" value="12/2020" disabled /> <br/><br/>
    <strong>Test Card CVC</strong>: <input type="text" value="123" disabled /> <br/><br/>
    
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>

<script src="https://phpproject.developeriam.com/cardjs/card.js"></script>

<script>


// Create an instance of the Stripe object
// Set your publishable API key
var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

// Create an instance of elements
var elements = stripe.elements();

var style = {
    base: {
        fontWeight: 400,
        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
        fontSize: '16px',
        lineHeight: '1.4',
        color: '#555',
        backgroundColor: '#fff',
        '::placeholder': {
            color: '#888',
        },
    },
    invalid: {
        color: '#eb1c26',
    }
};

var cardElement = elements.create('cardNumber', {
    style: style
});
cardElement.mount('#card_number');

var exp = elements.create('cardExpiry', {
    'style': style
});
exp.mount('#card_expiry');

var cvc = elements.create('cardCvc', {
    'style': style
});
cvc.mount('#card_cvc');

 var card = new Card({
        form: 'form#paymentFrm',
        container: '.card-wrapper',
    
       
        formSelectors: {
            numberInput: 'input[name="cardnumber"]',
            expiryInput: 'input#expiry',
            cvcInput: 'input#cvc',
            nameInput: 'input[name="first-name"], input[name="last-name"]'
        }
    });

// Validate input of the card elements
var resultContainer = document.getElementById('paymentResponse');
cardElement.addEventListener('change', function(event) {
    if (event.error) {
        resultContainer.innerHTML = '<p>'+event.error.message+'</p>';
    } else {
        resultContainer.innerHTML = '';
    }
    
    
});

// Get payment form element
var form = document.getElementById('paymentFrm');

// Create a token when the form is submitted.
// Create a token when the form is submitted.
 $('#validateCard').on('click', function(e) {
    createToken();
    $(this).hide();
    $('input#submit').show();
   
});

// Create single-use token to charge the user
function createToken() {
    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            resultContainer.innerHTML = '<p>'+result.error.message+'</p>';
        } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
        }
    });
}

// Callback to handle the response from stripe
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
	
    // Submit the form
    $(form).submit();
}
</script>

</body>
</html>