<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KK Fitness - Payment</title>

    <link rel="stylesheet" href="payment.css">
</head>

<body>

    <div class="payment-box">

        <h1>KK FITNESS</h1>
        <h2>Membership Payment</h2>

        <p class="amount">Choose Your Plan</p>

        <select>
            <option>Basic Plan - ₹999</option>
            <option>Premium Plan - ₹1999</option>
            <option>Elite Plan - ₹2999</option>
        </select>

       <div class="upi-payment">

    <h3>Pay Online</h3>

    <p>Scan QR Code using any UPI App</p>

    <img src="C:\Users\admin\Desktop\html2\img\logo.png" alt="UPI QR Code" class="qr-code">

    <p class="upi-id">UPI ID: yourupi@upi</p>

    <input type="text" placeholder="Enter UTR / Transaction ID">

    <button type="button" onclick="paymentSuccess()">
        I HAVE PAID
    </button>

</div>
       

    </div>
<script>
function paymentSuccess() {
    alert("Payment Successful! Welcome to KK Fitness 💪");
}
</script>
</body>
</html>