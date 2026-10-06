<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KK Fitness - Registration</title>

    <link rel="stylesheet" href="registration.css">
</head>

<body>

<div class="form-box">

    <h1>KK FITNESS</h1>
    <h2>Member Registration</h2>

    <form action="register.php" method="POST">

        <input type="text" name="name" placeholder="Full Name" required>

        <input type="tel" name="mobile" placeholder="Mobile Number" required>

        <input type="email" name="email" placeholder="Email Address" required>

        <input type="number" name="age" placeholder="Age" required>

        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <select name="plan" required>
            <option value="">Select Membership Plan</option>
            <option value="Basic Plan">Basic Plan</option>
            <option value="Premium Plan">Premium Plan</option>
            <option value="Elite Plan">Elite Plan</option>
        </select>

        <button type="submit">REGISTER NOW</button>

    </form>

    <a href="payment.html" class="payment-btn">
        PROCEED TO PAYMENT
    </a>

</div>

</body>
</html>