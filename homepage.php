
<?php 
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <title>BMI Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4CAF50',
                        secondary: '#FF5722',
                    },
                    transitionTimingFunction: {
                        'smooth': 'cubic-bezier(0.4, 0, 0.2, 1)',
                    }
                }
            }
        };
    </script>
    <style>
        input:focus {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        button:hover {
            transform: translateY(-3px);
            transition: transform 0.3s ease-in-out;
        }
    </style>
    
</head>
<body>
<body class="bg-gray-100 text-gray-800">
    <!-- Header Section -->
    <header class="bg-primary text-white py-4 text-center">
        <h1 class="text-3xl font-bold">BMI Health & Wellness</h1>
        <p>Calculate your BMI, get health suggestions, and stay fit!</p>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto mt-6 px-4">
        <!-- BMI Calculator Section -->
        <section id="bmi-calculator" class="bg-white p-6 shadow rounded-lg">
            <h2 class="text-2xl font-bold mb-4">Calculate Your BMI</h2>
            <form id="bmiForm" class="space-y-4">
                <div>
                    <label for="weight" class="block font-medium">Weight (kg):</label>
                    <input type="number" id="weight" class="w-full border border-gray-300 rounded p-2 focus:ring-2 focus:ring-primary focus:outline-none" required>
                </div>
                <div>
                    <label for="height" class="block font-medium">Height (cm):</label>
                    <input type="number" id="height" class="w-full border border-gray-300 rounded p-2 focus:ring-2 focus:ring-primary focus:outline-none" required>
                </div>
                <button type="button" id="calculateBMI" class="bg-primary text-white py-2 px-4 rounded transform hover:scale-105 focus:outline-none">Calculate BMI</button>
                
            </form>

            <div id="bmiResult" class="mt-4 hidden">
                <p class="text-lg font-semibold">Your BMI: <span id="bmiValue"></span></p>
                <p id="bmiCategory" class="mt-2"></p>
            </div>
        </section>

        <!-- Suggestions Section -->
        <section id="suggestions" class="mt-6 hidden">
            <h2 class="text-2xl font-bold mb-4">Health Suggestions</h2>
            <div id="exerciseSuggestions" class="bg-secondary text-white p-4 rounded mb-4">
                <h3 class="font-semibold">Exercise Recommendations</h3>
                <p id="exerciseText"></p>
            </div>

            <div id="dietChart" class="bg-primary text-white p-4 rounded">
                <h3 class="font-semibold">Diet Chart</h3>
                <p id="dietText"></p>
            </div>

            <div class="mt-4">
                <a href="health_diet.php" class="bg-secondary text-white py-2 px-4 rounded inline-block transform hover:scale-105 transition focus:outline-none">Diet of Health</a>
                <a href="book_appointment.php" class="bg-primary text-white py-2 px-4 rounded inline-block ml-2 transform hover:scale-105 transition focus:outline-none">Book online Appointment</a>
            </div>
        </section>
    </main>
    <a href="logout.php" class="bg-secondary text-white mt-2 ml-12  py-2 px-4 rounded inline-block transform hover:scale-105 transition focus:outline-none">Logout</a>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-4 text-center mt-6">
        <p>&copy; 2025 BMI Health Solutions. All Rights Reserved.</p>
    </footer>

    <script>
        document.getElementById('calculateBMI').addEventListener('click', function () {
            const weight = parseFloat(document.getElementById('weight').value);
            const height = parseFloat(document.getElementById('height').value) / 100; // Convert to meters

            if (isNaN(weight) || isNaN(height) || weight <= 0 || height <= 0) {
                alert('Please enter valid weight and height values.');
                return;
            }

            const bmi = (weight / (height * height)).toFixed(2);
            document.getElementById('bmiValue').innerText = bmi;

            let category = '';
            let exerciseText = '';
            let dietText = '';

            if (bmi < 18.5) {
                category = 'Underweight';
                exerciseText = 'Light weight training and yoga are recommended.';
                dietText = 'Include more protein, healthy fats, and carbs in your diet.';
            } else if (bmi >= 18.5 && bmi < 24.9) {
                category = 'Normal weight';
                exerciseText = 'Maintain a balanced exercise routine with cardio and strength training.';
                dietText = 'Continue a balanced diet rich in vegetables, fruits, and lean proteins.';
            } else if (bmi >= 25 && bmi < 29.9) {
                category = 'Overweight';
                exerciseText = 'Focus on cardio workouts and moderate strength training.';
                dietText = 'Opt for a calorie-controlled diet with reduced sugars and fats.';
            } else {
                category = 'Obese';
                exerciseText = 'Consult a trainer for personalized low-impact exercises.';
                dietText = 'Work with a dietitian to create a sustainable weight-loss plan.';
            }

            document.getElementById('bmiCategory').innerText = `Health Condition: ${category} `;
            document.getElementById('exerciseText').innerText = exerciseText;
            document.getElementById('dietText').innerText = dietText;

            document.getElementById('bmiResult').classList.remove('hidden');
            document.getElementById('suggestions').classList.remove('hidden');
        });
    </script>

    
</body>
</html>
