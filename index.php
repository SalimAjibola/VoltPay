<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoltPay - Modern Electricity Payment Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f5f7ff',
                            100: '#ebf0ff',
                            200: '#d6e0ff',
                            300: '#b3c3ff',
                            400: '#7d94ff',
                            500: '#4d6bff',
                            600: '#2b4bff',
                            700: '#1a37e6',
                            800: '#152db8',
                            900: '#132680',
                        },
                        dark: {
                            900: '#0f172a',
                            800: '#1e293b',
                            700: '#334155',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #4d6bff 0%, #2b4bff 100%);
        }
        .hero-pattern {
            background-image: radial-gradient(circle at 25% 50%, rgba(255,255,255,0.2) 0%, transparent 40%);
        }
        /* Fix for text contrast */
        .hero-text {
            color: white;
        }
        .hero-subtext {
            color: rgba(255,255,255,0.9);
        }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <svg class="h-8 w-8 text-primary-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="ml-2 text-xl font-bold text-gray-900">Volt<span class="text-primary-600">Pay</span></span>
                    </div>
                    <div class="hidden md:ml-10 md:flex md:space-x-8">
                        <a href="#" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-primary-500 text-sm font-medium">Home</a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-gray-300 text-sm font-medium">Features</a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-gray-300 text-sm font-medium">Pricing</a>
                        <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:border-gray-300 text-sm font-medium">Support</a>
                    </div>
                </div>
                <div class="flex items-center">
                    <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">Developers</a>
                    <a href="login.php" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Login
                    </a>
                    <a href="signup.php" class="ml-2 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-primary-700 bg-primary-100 hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="gradient-bg hero-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                <div class="mb-16 lg:mb-0">
                    <h1 class="text-4xl text-black font-extrabold tracking-tight hero-text sm:text-5xl lg:text-6xl">
                        Powering seamless electricity payments
                    </h1>
                    <p class="mt-6 text-slate-500 text-xl hero-subtext max-w-3xl">
                        VoltPay makes electricity bill payments effortless with instant processing, real-time notifications, and powerful analytics.
                    </p>
                    <div class="mt-10 flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="register.php" class="flex items-center justify-center px-8 py-3 border text-base font-medium rounded-md text-primary-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                            Get Started for Free
                        </a>
                        <a href="#" class="flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-700 bg-opacity-60 hover:bg-opacity-70 md:py-4 md:text-lg md:px-10">
                            <i class="fas fa-play-circle mr-2"></i> Watch Demo
                        </a>
                    </div>
                    <div class="mt-8 flex items-center">
                        <div class="flex -space-x-2 overflow-hidden">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://randomuser.me/api/portraits/women/12.jpg" alt="">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                            <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white" src="https://randomuser.me/api/portraits/men/76.jpg" alt="">
                        </div>
                        <p class="ml-4 text-sm hero-subtext text-black">
                            Trusted by <span class="font-bold text-blue-400">10,000+</span> customers
                        </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden">
                        <div class="absolute top-0 left-0 bg-gray-100 w-full px-4 py-3 flex items-center">
                            <div class="flex space-x-2">
                                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500"></span>
                            </div>
                            <div class="ml-4 text-sm text-gray-600">app.voltpay.com</div>
                        </div>
                        <div class="pt-12 pb-8 px-6">
                            <div class="text-center mb-8">
                                <h3 class="text-lg font-medium text-gray-900">Pay Electricity Bill</h3>
                                <p class="mt-1 text-sm text-gray-500">Instant payment with 24/7 availability</p>
                            </div>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Meter Number</label>
                                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" placeholder="Enter your meter number">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Amount (₦)</label>
                                    <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500" placeholder="Enter amount">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Payment Method</label>
                                    <select class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary-500 focus:border-primary-500">
                                        <option>Credit/Debit Card</option>
                                        <option>Bank Transfer</option>
                                        <option>USSD</option>
                                        <option>Mobile Money</option>
                                    </select>
                                </div>
                                <button class="w-full gradient-bg text-white py-3 px-4 rounded-md font-medium hover:opacity-90 transition-opacity">
                                    Pay Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logos Section - Now with visible placeholder logos -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide">
                Trusted by leading electricity providers
            </p>
            <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                <div class="col-span-1 flex justify-center">
                    <img class="h-12" src="https://www.channelstv.com/wp-content/uploads/2015/01/phcn.png" alt="PHCN">
                </div>
                <div class="col-span-1 flex justify-center">
                    <img class="h-12" src="https://ekedp.com/front/assets/images/resources/logo-1.png" alt="Eko Electric">
                </div>
                <div class="col-span-1 flex justify-center">
                    <img class="h-12" src="https://www.ikejaelectric.com/wp-content/uploads/2020/05/Ikeja-Electric-Logo-new-1.png" alt="IKEDC">
                </div>
                <div class="col-span-1 flex justify-center">
                    <img class="h-12" src="https://efactory.ng/_next/image?url=%2Fimages%2Faedc.png&w=384&q=75" alt="AEDC">
                </div>
                <div class="col-span-1 flex justify-center">
                    <img class="h-12" src="https://www.ibedc.com/assets/img/logo.png" alt="IBEDC">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Features</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Everything you need for easy electricity payments
                </p>
            </div>

            <div class="mt-16">
                <div class="space-y-16 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:gap-y-16">
                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                            <i class="fas fa-bolt text-lg"></i>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">Instant Payments</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Pay your electricity bills in seconds with immediate confirmation and reconnection.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                            <i class="fas fa-shield-alt text-lg"></i>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">Bank-Level Security</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Your transactions are protected with 256-bit encryption and PCI DSS compliance.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                            <i class="fas fa-chart-line text-lg"></i>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">Usage Analytics</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Track your consumption patterns and get personalized energy-saving recommendations.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                            <i class="fas fa-bell text-lg"></i>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">Smart Alerts</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Get notified before your meter runs low and schedule automatic top-ups.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                            <i class="fas fa-wallet text-lg"></i>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">Multiple Payment Options</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Cards, bank transfer, USSD, mobile money - choose what works for you.
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 text-white">
                            <i class="fas fa-headset text-lg"></i>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-lg font-medium text-gray-900">24/7 Support</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Our customer success team is always available to help with any issues.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-dark-900">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 items-center">
                <div>
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                        <span class="block">Ready to simplify your electricity payments?</span>
                    </h2>
                    <p class="mt-4 text-lg text-gray-300">
                        Join thousands of customers who pay their bills effortlessly with VoltPay.
                    </p>
                    <div class="mt-8 flex">
                        <a href="register.php" class="inline-flex items-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700">
                            Create free account
                        </a>
                        <a href="#" class="ml-4 inline-flex items-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-100 bg-dark-800 hover:bg-dark-700">
                            Contact sales
                        </a>
                    </div>
                </div>
                <div class="mt-12 lg:mt-0">
                    <div class="bg-dark-800 rounded-lg p-6">
                        <h3 class="text-lg font-medium text-white mb-4">Need help getting started?</h3>
                        <p class="text-gray-300 mb-4">
                            Our onboarding specialists can help you set up your account and answer any questions.
                        </p>
                        <a href="#" class="inline-flex items-center text-primary-400 hover:text-primary-300">
                            Schedule a call
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
                <div class="col-span-2">
                    <div class="flex items-center">
                        <svg class="h-8 w-8 text-primary-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="ml-2 text-xl font-bold text-gray-900">Volt<span class="text-primary-600">Pay</span></span>
                    </div>
                    <p class="mt-4 text-sm text-gray-500">
                        The modern way to pay for electricity. Fast, secure, and reliable.
                    </p>
                    <div class="mt-4 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Product</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Features</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Pricing</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">API</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Integrations</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">About</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Careers</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Press</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Legal</h3>
                    <ul class="mt-4 space-y-4">
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Privacy</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Terms</a>
                        </li>
                        <li>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900">Security</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-200 pt-8">
                <p class="text-base text-gray-400 text-center">
                    &copy; 2025 VoltPay. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>