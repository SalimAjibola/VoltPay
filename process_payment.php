<?php
// Your Paystack secret key (use test key for testing)
$secret_key = "";

// Get the reference from the URL
if (!isset($_GET['reference'])) {
    die('No transaction reference supplied');
}

$reference = $_GET['reference'];

// Initialize curl session to verify transaction
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . urlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer $secret_key",
        "Cache-Control: no-cache",
    ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    die("cURL Error #: " . $err);
}

$paystack_response = json_decode($response, true);

if (!$paystack_response['status']) {
    // API returned an error
    die("API Error: " . $paystack_response['message']);
}

// Payment data from Paystack
$payment_data = $paystack_response['data'];

// Check payment status
if ($payment_data['status'] === 'success') {
    // Payment was successful, do further processing here

    // Example: Get amount, metadata, customer email
    $amount = $payment_data['amount'] / 100; // Convert from kobo to Naira
    $email = $payment_data['customer']['email'];
    $metadata = $payment_data['metadata']['custom_fields'] ?? [];

    // Extract your custom metadata values
    $provider = '';
    $package = '';
    $meter_number = '';
    foreach ($metadata as $field) {
        if ($field['variable_name'] === 'provider') {
            $provider = $field['value'];
        } elseif ($field['variable_name'] === 'package') {
            $package = $field['value'];
        } elseif ($field['variable_name'] === 'meter_number') {
            $meter_number = $field['value'];
        }
    }

    // Here, you can save this payment info to your database, send tokens, or trigger other logic
    // For now, we just display a success page:

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Payment Successful</title>
        <style>
            body { font-family: Arial, sans-serif; background: #e6ffed; color: #1a7f37; padding: 2rem; }
            .container { max-width: 600px; margin: 0 auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 0 10px #9be7a6; }
            h1 { color: #0b3d0b; }
            p { font-size: 1.1rem; }
            .details { margin-top: 1rem; background: #f0fff4; padding: 1rem; border-radius: 6px; }
            a { color: #1a7f37; text-decoration: none; font-weight: bold; }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Payment Successful!</h1>
            <p>Thank you for your payment, <strong><?php echo htmlspecialchars($email); ?></strong>.</p>
            <div class="details">
                <p><strong>Transaction Reference:</strong> <?php echo htmlspecialchars($reference); ?></p>
                <p><strong>Amount Paid:</strong> ₦<?php echo number_format($amount, 2); ?></p>
                <p><strong>Electricity Provider:</strong> <?php echo htmlspecialchars(ucfirst($provider)); ?></p>
                <p><strong>Package:</strong> <?php echo htmlspecialchars(ucfirst($package)); ?></p>
                <p><strong>Meter Number:</strong> <?php echo htmlspecialchars($meter_number); ?></p>
            </div>
            <p>Your electricity token will be sent to your meter number shortly.</p>
            <p><a href="payment.php">Make another payment</a></p>
        </div>
    </body>
    </html>
    <?php
} else {
    // Payment was not successful
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Payment Failed</title>
        <style>
            body { font-family: Arial, sans-serif; background: #ffe6e6; color: #b30000; padding: 2rem; }
            .container { max-width: 600px; margin: 0 auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 0 10px #f59a9a; }
            h1 { color: #8b0000; }
            p { font-size: 1.1rem; }
            a { color: #b30000; text-decoration: none; font-weight: bold; }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Payment Failed or Cancelled</h1>
            <p>We were unable to confirm your payment for transaction reference: <strong><?php echo htmlspecialchars($reference); ?></strong>.</p>
            <p>Please try again or contact support if you believe this is an error.</p>
            <p><a href="payment.php">Try Again</a></p>
        </div>
    </body>
    </html>
    <?php
}
?>
