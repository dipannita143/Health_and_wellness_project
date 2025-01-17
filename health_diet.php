<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Diet Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        /* Add smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom animations */
        .scale-hover:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header Section -->
    <header class="bg-green-500 text-white py-4 shadow-lg sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold hover:scale-110 transition-transform duration-300">Healthy Diet</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#plans" class="hover:underline">Plans</a></li>
                    <li><a href="#about" class="hover:underline">About</a></li>
                    <li><a href="#contact" class="hover:underline">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-green-100 py-16 fade-in">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">Achieve Your Health Goals</h2>
            <p class="text-lg text-gray-700 mb-6">Start your journey to a healthier lifestyle with our personalized diet plans.</p>
            <a href="#plans" class="bg-green-500 text-white px-6 py-3 rounded shadow hover:bg-green-600 transform hover:scale-110 transition-transform duration-300">Get Started</a>
        </div>
    </section>

    <!-- Diet Plans Section -->
    <section id="plans" class="py-16 fade-in">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Our Diet Plans</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Plan Card -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center scale-hover">
                    <h3 class="text-xl font-bold mb-4">Underweight</h3>
                    <p class="text-gray-700 mb-4">High-calorie meals to help you gain weight in a healthy way.</p>
                    <ul class="text-gray-700 mb-4 text-left">
                        <li>• Breakfast: Oatmeal with nuts and fruits</li>
                        <li>• Lunch: Grilled chicken, quinoa, and veggies</li>
                        <li>• Snack: Peanut butter smoothie</li>
                        <li>• Dinner: Salmon with sweet potatoes</li>
                    </ul>
                    <a href="underweight.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transform hover:scale-105 transition-transform duration-300">See weakly plan</a>
                </div>
                <!-- Plan Card -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center scale-hover">
                    <h3 class="text-xl font-bold mb-4">Normal BMI</h3>
                    <p class="text-gray-700 mb-4">A balanced diet to maintain your healthy BMI.</p>
                    <ul class="text-gray-700 mb-4 text-left">
                        <li>• Breakfast: Avocado toast with eggs</li>
                        <li>• Lunch: Grilled fish with brown rice</li>
                        <li>• Snack: Greek yogurt with honey</li>
                        <li>• Dinner: Stir-fried tofu and veggies</li>
                    </ul>
                    <a href="normalWeight.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transform hover:scale-105 transition-transform duration-300">See Weakly plan</a>
                </div>
                <!-- Plan Card -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center scale-hover">
                    <h3 class="text-xl font-bold mb-4">Overweight</h3>
                    <p class="text-gray-700 mb-4">Low-calorie meals to help you lose weight effectively.</p>
                    <ul class="text-gray-700 mb-4 text-left">
                        <li>• Breakfast: Green smoothie with chia seeds</li>
                        <li>• Lunch: Grilled turkey wrap with veggies</li>
                        <li>• Snack: Apple slices with almond butter</li>
                        <li>• Dinner: Grilled chicken and steamed broccoli</li>
                    </ul>
                    <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transform hover:scale-105 transition-transform duration-300">See weakly plan</a>
                </div>
                <!-- Plan Card -->
                <div class="bg-white p-6 rounded-lg shadow-md text-center scale-hover">
                    <h3 class="text-xl font-bold mb-4">Obese</h3>
                    <p class="text-gray-700 mb-4">Specialized meal plans to manage weight and improve health.</p>
                    <ul class="text-gray-700 mb-4 text-left">
                        <li>• Breakfast: Spinach and egg white omelet</li>
                        <li>• Lunch: Grilled salmon with a side salad</li>
                        <li>• Snack: Celery sticks with hummus</li>
                        <li>• Dinner: Baked chicken with cauliflower rice</li>
                    </ul>
                    <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transform hover:scale-105 transition-transform duration-300">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-gray-100 py-16 fade-in">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">About Us</h2>
            <p class="text-lg text-gray-700">We are dedicated to helping you achieve your health goals with personalized diet plans and expert guidance. Our team of nutritionists ensures that you get the best advice tailored to your needs.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 fade-in">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-6">Contact Us</h2>
            <form class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500" placeholder="Your Name">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500" placeholder="Your Email">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                    <textarea id="message" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-green-500" placeholder="Your Message" rows="4"></textarea>
                </div>
                <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded shadow hover:bg-green-600 transform hover:scale-110 transition-transform duration-300">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-500 text-white py-4">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Healthy Diet. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
