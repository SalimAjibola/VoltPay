<!-- login.html -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VoltPay - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript">
            $(document).ready(function(){
                var form = $('#myform1');
                $('#submit').click(function(){
                    $.ajax({
                        url: form.attr("action"),
                        type: 'post',
                        data: $("myform1 input").serialize(),

                        success: function(data){
                            console.log(data);
                        }
                    });
                });
            });
        </script>
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

<body class="animated-gradient min-h-screen flex items-center justify-center text-white">
  <div class="bg-white bg-opacity-10 backdrop-blur-md rounded-xl p-8 shadow-lg w-full max-w-md">
    <h2 class="text-3xl font-bold mb-6 text-center">Login to VoltPay</h2>
    <form action="verification.php" method="post" id="myform1"  class="space-y-5">
      <div>
        <label for="email" class="block text-sm font-medium">Email</label>
        <input type="email" id="email" name="email" required class="w-full px-4 py-2 mt-1 rounded bg-white bg-opacity-20 placeholder-white focus:outline-none" placeholder="Enter your email" />
      </div>
      <div>
        <label for="password" class="block text-sm font-medium">Password</label>
        <input type="password" id="password" name="password" required class="w-full px-4 py-2 mt-1 rounded bg-white bg-opacity-20 placeholder-white focus:outline-none" placeholder="Enter your password" />
      </div>
      <button type="submit" type="submit" id="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded transition">Login</button>
    </form>
    <p class="mt-4 text-center">Don't have an account? <a href="signup.php" class="text-blue-300 underline">Sign up</a></p>
  </div>
</body>

</html>