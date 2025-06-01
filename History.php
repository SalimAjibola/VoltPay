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
$email =$_SESSION['email'];
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
    <a href="History.php" class="flex items-center gap-3 text-white bg-blue-700 rounded-md px-3 py-2 font-semibold">
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

  <section class="bg-white bg-opacity-20 p-6 rounded-xl shadow-lg overflow-x-auto">
    <h3 class="text-lg font-medium mb-4">Your Transactions</h3>

    <table class="min-w-full table-auto text-sm text-left">
      <thead>
        <tr class="bg-blue-700 text-white">
          <th class="px-4 py-2">#</th>
          <th class="px-4 py-2">Description</th>
          <th class="px-4 py-2">Amount</th>
          <th class="px-4 py-2">Meter No.</th>
          <th class="px-4 py-2">Transaction Ref</th>
          <th class="px-4 py-2">Date</th>
          <th class="px-4 py-2">Status</th>
        </tr>
      </thead>
      <tbody class="text-white divide-y divide-gray-200">
        <!-- Example rows - to be replaced with PHP loop -->
        <tr class="hover:bg-white hover:bg-opacity-10">
          <td class="px-4 py-2">1</td>
          <td class="px-4 py-2">Paid ₦5,000 for Ikeja Electric</td>
          <td class="px-4 py-2">₦5,000</td>
          <td class="px-4 py-2">0102938473</td>
          <td class="px-4 py-2">TXN923849123</td>
          <td class="px-4 py-2">Sep 10, 2024</td>
          <td class="px-4 py-2 text-green-400">Success</td>
        </tr>
        <tr class="hover:bg-white hover:bg-opacity-10">
          <td class="px-4 py-2">2</td>
          <td class="px-4 py-2">Topped ₦3,000 for Mom (Abuja DISCO)</td>
          <td class="px-4 py-2">₦3,000</td>
          <td class="px-4 py-2">9283746510</td>
          <td class="px-4 py-2">TXN738291764</td>
          <td class="px-4 py-2">Sep 8, 2024</td>
          <td class="px-4 py-2 text-green-400">Success</td>
        </tr>
        <tr class="hover:bg-white hover:bg-opacity-10">
          <td class="px-4 py-2">3</td>
          <td class="px-4 py-2">Paid ₦5,000 for Ikeja Electric</td>
          <td class="px-4 py-2">₦5,000</td>
          <td class="px-4 py-2">0102938473</td>
          <td class="px-4 py-2">TXN923849123</td>
          <td class="px-4 py-2">Sep 10, 2024</td>
          <td class="px-4 py-2 text-green-400">Success</td>
        </tr>
        <tr class="hover:bg-white hover:bg-opacity-10">
          <td class="px-4 py-2">4</td>
          <td class="px-4 py-2">Topped ₦3,000 for Mom (Abuja DISCO)</td>
          <td class="px-4 py-2">₦3,000</td>
          <td class="px-4 py-2">9283746510</td>
          <td class="px-4 py-2">TXN738291764</td>
          <td class="px-4 py-2">Sep 8, 2024</td>
          <td class="px-4 py-2 text-green-400">Success</td>
        </tr>
        <tr class="hover:bg-white hover:bg-opacity-10">
          <td class="px-4 py-2">5</td>
          <td class="px-4 py-2">Topped ₦3,000 for Mom (Abuja DISCO)</td>
          <td class="px-4 py-2">₦3,000</td>
          <td class="px-4 py-2">9283746510</td>
          <td class="px-4 py-2">TXN738291764</td>
          <td class="px-4 py-2">Sep 8, 2024</td>
          <td class="px-4 py-2 text-green-400">Success</td>
        </tr>
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="flex justify-end mt-4 space-x-2">
      <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white text-sm">Prev</button>
      <button class="bg-blue-800 px-3 py-1 rounded text-white text-sm">1</button>
      <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white text-sm">2</button>
      <button class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white text-sm">Next</button>
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