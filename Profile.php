<?php session_start();
if (empty($_SESSION['full_name'])): 
    header('Location:index.php');
endif;
?>
<?php
if (isset($_SESSION['id']) && isset($_SESSION['email']) && isset($_SESSION['full_name']) && isset($_SESSION['phone_number']) && isset($_SESSION['created_at'])){
?>
<?php
$full_name = $_SESSION['full_name'];
$email =$_SESSION['email'];
$phone_number = $_SESSION['phone_number'];
$created_at =$_SESSION['created_at'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VoltPay Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
    <a href="Payment.php" class="flex items-center gap-3 text-white hover:text-blue-300 px-3 py-2 rounded-md">
      <i class="fas fa-credit-card"></i>
      <span>Payment</span>
    </a>
    <a href="History.php" class="flex items-center gap-3 text-white hover:text-blue-300 px-3 py-2 rounded-md">
      <i class="fas fa-history"></i>
      <span>History</span>
    </a>
    <a href="Profile.php" class="flex items-center gap-3 text-white bg-blue-700 rounded-md px-3 py-2 font-semibold">
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
        <h2 class="text-2xl font-semibold">Welcome back, User</h2>
        <div class="flex items-center gap-4">
          <i class="fas fa-bell text-xl"></i>
          <img src="https://i.pravatar.cc/40" alt="Avatar" class="rounded-full w-10 h-10" />
        </div>
      </header>

      <main class="flex-1 p-8 space-y-8 overflow-y-auto">
  <!-- Header -->
  <header class="flex justify-between items-center">
    <h2 class="text-2xl font-semibold">Your Profile</h2>
  </header>

  <!-- Profile Info -->
  <section class="bg-white bg-opacity-20 p-6 rounded-xl shadow-lg">
    <h3 class="text-lg font-semibold mb-4">Personal Information</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div>
        <label class="block mb-1 text-sm">Full Name</label>
        <input type="text" value="<?php echo $full_name;?>" class="w-full p-3 rounded bg-white bg-opacity-10 border border-white border-opacity-20 placeholder-white text-white" readonly>
      </div>
      <div>
        <label class="block mb-1 text-sm">Email</label>
        <input type="email" value="<?php echo $email;?>" class="w-full p-3 rounded bg-white bg-opacity-10 border border-white border-opacity-20 placeholder-white text-white" readonly>
      </div>
      <div>
        <label class="block mb-1 text-sm">Phone Number</label>
        <input type="text" value="<?php echo $phone_number;?>" class="w-full p-3 rounded bg-white bg-opacity-10 border border-white border-opacity-20 placeholder-white text-white" readonly>
      </div>
      <div>
        <label class="block mb-1 text-sm">Account Creation</label>
        <input type="text" value="<?php echo $created_at?>" class="w-full p-3 rounded bg-white bg-opacity-10 border border-white border-opacity-20 placeholder-white text-white" readonly>
      </div>
    </div>
  </section>

  <!-- Transaction History -->
  <section class="bg-white bg-opacity-20 p-6 rounded-xl shadow-lg">
    <h3 class="text-lg font-semibold mb-4">Recent Transactions</h3>
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left">
        <thead class="bg-white bg-opacity-10">
          <tr>
            <th class="px-4 py-3">Date</th>
            <th class="px-4 py-3">Description</th>
            <th class="px-4 py-3">Amount</th>
            <th class="px-4 py-3">Meter Number</th>
            <th class="px-4 py-3">Transaction Ref</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-white divide-opacity-10">
          <tr>
            <td class="px-4 py-3">Sep 10, 2024</td>
            <td class="px-4 py-3">Ikeja Electric</td>
            <td class="px-4 py-3">₦5,000</td>
            <td class="px-4 py-3">1234567890</td>
            <td class="px-4 py-3">TXN0987654321</td>
          </tr>
          <tr>
            <td class="px-4 py-3">Sep 8, 2024</td>
            <td class="px-4 py-3">Mom (Abuja DISCO)</td>
            <td class="px-4 py-3">₦3,000</td>
            <td class="px-4 py-3">0987654321</td>
            <td class="px-4 py-3">TXN1234509876</td>
          </tr>
          <tr>
            <td class="px-4 py-3">Sep 5, 2024</td>
            <td class="px-4 py-3">Business Meter</td>
            <td class="px-4 py-3">₦10,000</td>
            <td class="px-4 py-3">4567891230</td>
            <td class="px-4 py-3">TXN5647382910</td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
  </section>
</main>

    </main>
  </div>
</body>

</html>
<?php
}else{
  header('Location:Login.php');
  exit();
}?>