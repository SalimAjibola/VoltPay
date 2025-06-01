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
    <a href="Dashboard.php" class="flex items-center gap-3 text-white bg-blue-700 rounded-md px-3 py-2 font-semibold">
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

      <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white bg-opacity-20 p-6 rounded-xl shadow-lg">
          <h3 class="text-lg font-medium">Balance</h3>
          <p class="text-2xl font-bold mt-2">N 5,240.00</p>
        </div>

        <div class="bg-white bg-opacity-20 p-6 rounded-xl shadow-lg max-h-64 overflow-y-auto">
          <h3 class="text-lg font-medium mb-2">🧾 Last 10 Transactions</h3>
          <ul class="text-sm space-y-2">
            <li class="flex justify-between bg-white bg-opacity-10 p-3 rounded">
              <span>Paid ₦5,000 for Ikeja Electric</span>
              <span class="text-xs opacity-75">Sep 10, 2024</span>
            </li>
            <li class="flex justify-between bg-white bg-opacity-10 p-3 rounded">
              <span>Topped ₦3,000 for Mom (Abuja DISCO)</span>
              <span class="text-xs opacity-75">Sep 8, 2024</span>
            </li>
            <li class="flex justify-between bg-white bg-opacity-10 p-3 rounded">
              <span>₦10,000 for Business Meter</span>
              <span class="text-xs opacity-75">Sep 5, 2024</span>
            </li>
            <li class="flex justify-between bg-white bg-opacity-10 p-3 rounded">
              <span>Paid ₦7,500 for Eko Electricity</span>
              <span class="text-xs opacity-75">Sep 3, 2024</span>
            </li>
            <li class="flex justify-between bg-white bg-opacity-10 p-3 rounded">
              <span>Topped ₦2,000 for Dad (PH DISCO)</span>
              <span class="text-xs opacity-75">Sep 2, 2024</span>
            </li>
            <!-- Add more transaction items up to 10 -->
          </ul>
        </div>

        <div class="bg-white bg-opacity-20 p-6 rounded-xl shadow-lg">
          <h3 class="text-lg font-medium">Quick Actions</h3>
          <div class="flex flex-col gap-4 mt-3">
            <a href="Payment.php">
            <button
              class="bg-blue-600 hover:bg-blue-700 px-4 py-3 rounded-xl font-semibold flex items-center justify-center gap-3 transition">
              <i class="fas fa-bolt"></i> Top Up Electricity Bill
            </button>
            </a>
            <a href="Payment.php">
            <button
              class="bg-pink-600 hover:bg-pink-700 px-4 py-3 rounded-xl font-semibold flex items-center justify-center gap-3 transition">
              <i class="fas fa-heart"></i> Top Up for Loved Ones
            </button>
            </a>
          </div>
        </div>
      </section>

      <section class="bg-white bg-opacity-20 p-6 rounded-xl shadow-lg">
        <h3 class="text-lg font-medium mb-4">Analytics</h3>
        <div class="h-40 flex items-center justify-center text-sm">[Chart Placeholder]</div>
      </section>
    </main>
  </div>
</body>

</html>
<?php
}else{
  header('Location:Login.php');
  exit();
}?>