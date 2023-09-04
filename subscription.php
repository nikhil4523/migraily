<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $paymentMethod = $_POST['payment_method'];

    if ($paymentMethod === 'paytm') {
        // Paytm integration code
        $paytmParams = array(
            "MID" => 'YOUR_PAYTM_MID',
            "CUST_ID" => 'CUSTOMER_ID',
            "TXN_AMOUNT" => '40', // Amount to charge in INR
            "CHANNEL_ID" => 'WEB',
            "INDUSTRY_TYPE_ID" => 'Retail',
            "WEBSITE" => 'MIGRAILY', // Replace with your website name
            "CALLBACK_URL" => 'http://yourwebsite.com/paytm_callback.php', // Replace with your Paytm callback URL
        );

        $paytmChecksum = generateChecksum($paytmParams, 'YOUR_PAYTM_MERCHANT_KEY'); // Replace with your Paytm merchant key

        // Add the checksum to the parameters
        $paytmParams["CHECKSUMHASH"] = $paytmChecksum;

        // Create a form for Paytm
        echo '<form method="post" action="https://securegw-stage.paytm.in/order/process" name="paytm_form">';
        foreach ($paytmParams as $key => $value) {
            echo '<input type="hidden" name="' . $key . '" value="' . $value . '">';
        }
        echo '</form>';

        // Automatically submit the form
        echo '<script type="text/javascript">document.paytm_form.submit();</script>';
    }
}

// Function to generate Paytm checksum
function generateChecksum($params, $merchantKey)
{
    // Create a string with all parameters in the order of request data
    $paramStr = '';
    foreach ($params as $key => $value) {
        $paramStr .= $key . "=" . $value . "&";
    }

    $paramStr = rtrim($paramStr, "&");

    // Calculate checksum
    $checksum = hash_hmac("sha256", $paramStr, $merchantKey);

    return $checksum;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/components.css">
    <style>
        /* Your CSS styling here */
        body {
            background-image: url('project images/Untitled design (5).png');
        }

        h3 {
            font-family: fantasy;
        }
        /* Add other CSS styles as needed */
    </style>
</head>
<body>
<section class="form-container">
    <form action="" method="POST">
        <h3>Choose Payment Method</h3>
        <input type="text" name="name" class="box" placeholder="Enter your name" required>
        <input type="email" name="email" class="box" placeholder="Enter your email" required>

        <input type="hidden" name="payment_method" value="paytm"> <!-- You can add other payment methods as needed -->

        <!-- "Proceed to Payment" button that triggers the payment -->
        <input type="submit" style="background-color:#f1c40f; color: black; " value="Proceed to Payment" class="btn" id="proceedToPay" onclick="makePayment(event)">
    </form>
    <!-- "Make Payment" button is initially hidden -->
    <button style="display: none;" id="makePaymentButton">Make Payment</button>
</section>

<script>
// Function to handle the payment when the "Proceed to Payment" button is clicked
function makePayment(event) {
    event.preventDefault(); // Prevent the form submission
    document.getElementById("proceedToPay").disabled = true; // Disable the button

    // Show the "Make Payment" button and submit the form to Paytm gateway
    document.getElementById("makePaymentButton").style.display = "disable";
    document.paytm_form.submit();
}
</script>
</body>
</html>
