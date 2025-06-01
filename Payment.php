<?php session_start();
if (empty($_SESSION['full_name'])): 
    header('Location:index.php');
endif;
?>
<?php
if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['full_name'])){
?>
<?php
$full_name = $_SESSION['full_name'];
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VoltPay Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://js.paystack.co/v1/inline.js"></script> <!-- Paystack SDK -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @keyframes backgroundMove {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }

    .animated-gradient {
      background: linear-gradient(-45deg, #3b82f6, #64748b, #1e3a8a, #94a3b8);
      background-size: 400% 400%;
      animation: backgroundMove 15s ease infinite;
    }
  </style>
</head>

<body class="animated-gradient min-h-screen text-white font-sans">
  <div class="flex flex-col md:flex-row h-screen">
    <!-- Sidebar -->
    <aside class="w-full md:w-1/4 bg-white bg-opacity-10 backdrop-blur-lg p-6 space-y-6">
      <h1 class="text-3xl font-bold text-center mb-8">VoltPay</h1>
      <nav class="space-y-4">
        <a href="Dashboard.php" class="flex items-center gap-3 text-white hover:text-blue-300 px-3 py-2 rounded-md">
          <i class="fas fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
        <a href="Payment.php" class="flex items-center gap-3 text-white bg-blue-700 rounded-md px-3 py-2 font-semibold">
          <i class="fas fa-credit-card"></i>
          <span>Payment</span>
        </a>
        <a href="History.php" class="flex items-center gap-3 text-white hover:text-blue-300 px-3 py-2 rounded-md">
          <i class="fas fa-history"></i>
          <span>History</span>
        </a>
        <a href="Profile.php" class="flex items-center gap-3 text-white hover:text-blue-300 px-3 py-2 rounded-md">
          <i class="fas fa-user"></i>
          <span>Profile</span>
        </a>
        <a href="Logout.php" class="flex items-center gap-3 text-red-400 hover:text-red-600 font-semibold px-3 py-2 rounded-md">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8 space-y-8 overflow-y-auto">
      <header class="flex justify-between items-center">
        <h2 class="text-2xl font-semibold">Welcome back, <?php echo $full_name;?></h2>
        <div class="flex items-center gap-4">
          <i class="fas fa-bell text-xl"></i>
          <img src="https://i.pravatar.cc/40" alt="Avatar" class="rounded-full w-10 h-10" />
        </div>
      </header>

      <!-- Payment Form Section -->
      <section class="bg-white bg-opacity-20 p-6 rounded-xl shadow-lg max-w-lg mx-auto">
        <h3 class="text-lg font-medium mb-6">Purchase Electricity</h3>
        <form id="paymentForm" class="space-y-5">
          <!-- Provider Dropdown -->
          <div>
            <label for="provider" class="block mb-2 font-semibold">Choose a Provider</label>
            <select id="provider" name="provider" required
              class="w-full rounded-md p-2 bg-white bg-opacity-90 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="" disabled selected>Select provider</option>
              <option value="ikeja">Ikeja Electric</option>
              <option value="eko">Eko Electricity</option>
              <option value="abuja">Abuja DISCO</option>
              <option value="ph">PH DISCO</option>
            </select>
          </div>

          <!-- Package Dropdown -->
          <div>
            <label for="package" class="block mb-2 font-semibold">Package</label>
            <select id="package" name="package" required
              class="w-full rounded-md p-2 bg-white bg-opacity-90 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="" disabled selected>Select package</option>
              <option value="postpaid">Postpaid</option>
              <option value="prepaid">Prepaid</option>
            </select>
          </div>

          <!-- Meter Number -->
          <div>
            <label for="meter" class="block mb-2 font-semibold">Meter Number</label>
            <input type="text" id="meter" name="meter" placeholder="Enter meter number" required
              class="w-full rounded-md p-2 bg-white bg-opacity-90 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>

          <!-- Amount -->
          <div>
            <label for="amount" class="block mb-2 font-semibold">Amount</label>
            <input type="number" id="amount" name="amount" placeholder="Enter amount" min="100" required
              class="w-full rounded-md p-2 bg-white bg-opacity-90 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>

          <!-- Purchase Button -->
          <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition flex items-center justify-center gap-3">
            <i class="fas fa-shopping-cart"></i> Purchase
          </button>
        </form>
      </section>
    </main>
  </div>

  <script>
    const paymentForm = document.getElementById('paymentForm');

    paymentForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const provider = document.getElementById('provider').value;
      const packageType = document.getElementById('package').value;
      const meter = document.getElementById('meter').value.trim();
      const amount = document.getElementById('amount').value;

      if (!provider || !packageType || !meter || !amount || amount < 100) {
        alert("Please fill all fields correctly.");
        return;
      }

      // Convert amount to kobo (Paystack works with the smallest currency unit)
      const amountInKobo = amount * 100;

      let handler = PaystackPop.setup({
        key: 'pk_test_4cb6468b5ea6cf85ae50ce1fe70801f6554cb976', // Replace with your Paystack test public key
        email: "<?php echo $email; ?>",  // You can get user email dynamically or add a field
        amount: amountInKobo,
        currency: 'NGN',
        ref: '' + Math.floor((Math.random() * 1000000000) + 1), // Generate a random reference
        metadata: {
          custom_fields: [
            {
              display_name: "Provider",
              variable_name: "provider",
              value: provider
            },
            {
              display_name: "Package",
              variable_name: "package",
              value: packageType
            },
            {
              display_name: "Meter Number",
              variable_name: "meter_number",
              value: meter
            }
          ]
        },
        callback: function (response) {
          // Payment successful
          alert('Payment complete! Reference: ' + response.reference);
          // You can redirect the user or post data to your server here
          window.location.href = `process_payment.php?reference=${response.reference}&provider=${provider}&package=${packageType}&meter=${meter}&amount=${amount}`;
        },
        onClose: function () {
          alert('Transaction was not completed, window closed.');
        }
      });
      handler.openIframe();
    });
  </script>
</body>

</html>
<?php
}else{
  header('Location:Login.php');
  exit();
}?>