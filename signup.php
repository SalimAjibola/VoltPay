<?php

include 'db_connection.php';

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];

    // Check if email already exists
    $checkQuery = "SELECT * FROM `user` WHERE `email` = ?";
    $stmt = $con->prepare($checkQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script type='text/javascript'>alert('Email already in use! Please use a different email.');
        document.location='signup.php'</script>";
    } else {
        // Optional: Hash the password for better security
        // $password = password_hash($password, PASSWORD_BCRYPT);

        $insertQuery = "INSERT INTO `user`(`full_name`, `email`, `password`, `phone_number`) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($insertQuery);
        $stmt->bind_param("ssss", $full_name, $email, $password, $phone_number);
        
        if ($stmt->execute()) {
            echo "<script type='text/javascript'>alert('Account Created Successfully!');
            document.location='Login.php'</script>";
        } else {
            echo "<script type='text/javascript'>alert('We ran into an issue, try again!');
            document.location='signup.php'</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VoltPay - Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes backgroundMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .animated-gradient {
      background: linear-gradient(-45deg, #3b82f6, #64748b, #1e3a8a, #94a3b8);
      background-size: 400% 400%;
      animation: backgroundMove 15s ease infinite;
    }
  </style>
</head>
<body class="animated-gradient min-h-screen flex items-center justify-center text-white">
  <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-xl p-8 shadow-lg w-full max-w-md">
    <h2 class="text-3xl font-bold mb-6 text-center">Create Your VoltPay Account</h2>

    <?php if (!empty($message)): ?>
      <div class="text-center mb-4 text-<?= $color === 'red' ? 'red-500' : 'green-400' ?> font-medium">
        <?= htmlspecialchars($message) ?>
      </div>
    <?php endif; ?>

    <form action="#" method="POST" class="space-y-5">
      <div>
        <label for="name" class="block text-sm font-medium">Full Name</label>
        <input type="text" id="full_name" name="full_name" required class="w-full px-4 py-2 mt-1 rounded bg-white bg-opacity-20 placeholder-white focus:outline-none" placeholder="Enter your full name" />
      </div>
      <div>
        <label for="email-signup" class="block text-sm font-medium">Email</label>
        <input type="email" id="email" name="email" required class="w-full px-4 py-2 mt-1 rounded bg-white bg-opacity-20 placeholder-white focus:outline-none" placeholder="Enter your email" />
      </div>
      <div>
        <label for="phone_number-signup" class="block text-sm font-medium">Phone Number</label>
        <input type="tel" id="phone_number" name="phone_number" required class="w-full px-4 py-2 mt-1 rounded bg-white bg-opacity-20 placeholder-white focus:outline-none" placeholder="Enter your Phone Number" />
      </div>
      <div>
        <label for="password-signup" class="block text-sm font-medium">Password</label>
        <input type="password" id="password" name="password" required class="w-full px-4 py-2 mt-1 rounded bg-white bg-opacity-20 placeholder-white focus:outline-none" placeholder="Create a password" />
      </div>
      <button type="submit" id="submit" name="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded transition">Sign Up</button>
    </form>
    <p class="mt-4 text-center">Already have an account? <a href="login.php" class="text-blue-300 underline">Login</a></p>
  </div>
</body>
</html>
