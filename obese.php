<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Chart for Obese BMI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            transition: color 0.3s ease;
        }

        .card:hover .card-title {
            color: #ff4500;
        }
    </style>
</head>
<body class="bg-blue-100 font-sans">
    <div class="max-w-4xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-blue-700 mb-6">Diet Chart for Obese BMI</h1>
        
        <div class="space-y-6">
            <!-- Saturday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-blue-700 mb-2 card-title">Saturday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Scrambled eggs with spinach and tomatoes (no oil).</li>
                    <li><strong>Lunch:</strong> Grilled chicken breast with steamed broccoli and quinoa.</li>
                    <li><strong>Snack:</strong> Cucumber slices with hummus.</li>
                    <li><strong>Dinner:</strong> Baked cod with sautéed kale and roasted sweet potato.</li>
                </ul>
            </div>

            <!-- Sunday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-blue-700 mb-2 card-title">Sunday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Greek yogurt with chia seeds and mixed berries.</li>
                    <li><strong>Lunch:</strong> Lentil and vegetable soup with a side of mixed greens.</li>
                    <li><strong>Snack:</strong> A handful of almonds.</li>
                    <li><strong>Dinner:</strong> Grilled turkey with roasted vegetables (zucchini, carrots, bell peppers).</li>
                </ul>
            </div>

            <!-- Monday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-blue-700 mb-2 card-title">Monday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Oatmeal with flaxseeds, almond milk, and fresh strawberries.</li>
                    <li><strong>Lunch:</strong> Grilled chicken salad with mixed greens, cucumber, and olive oil dressing.</li>
                    <li><strong>Snack:</strong> A boiled egg.</li>
                    <li><strong>Dinner:</strong> Grilled salmon with steamed broccoli and cauliflower rice.</li>
                </ul>
            </div>

            <!-- Tuesday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-blue-700 mb-2 card-title">Tuesday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Whole-grain toast with avocado and a poached egg.</li>
                    <li><strong>Lunch:</strong> Quinoa salad with chickpeas, mixed greens, and a lemon dressing.</li>
                    <li><strong>Snack:</strong> A small apple with a teaspoon of almond butter.</li>
                    <li><strong>Dinner:</strong> Stir-fried tofu with vegetables and cauliflower rice.</li>
                </ul>
            </div>

            <!-- Wednesday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-blue-700 mb-2 card-title">Wednesday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Smoothie (spinach, kale, banana, and unsweetened almond milk).</li>
                    <li><strong>Lunch:</strong> Grilled chicken breast with steamed asparagus and roasted Brussels sprouts.</li>
                    <li><strong>Snack:</strong> A small handful of sunflower seeds.</li>
                    <li><strong>Dinner:</strong> Baked salmon with sautéed spinach and a side of quinoa.</li>
                </ul>
            </div>

            <!-- Thursday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-blue-700 mb-2 card-title">Thursday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Greek yogurt with chia seeds and blueberries.</li>
                    <li><strong>Lunch:</strong> Grilled turkey burger with lettuce, tomato, and a side of steamed broccoli.</li>
                    <li><strong>Snack:</strong> Carrot sticks with hummus.</li>
                    <li><strong>Dinner:</strong> Baked chicken thighs with roasted cauliflower and green beans.</li>
                </ul>
            </div>

            <!-- Friday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-blue-700 mb-2 card-title">Friday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Scrambled eggs with mushrooms and spinach.</li>
                    <li><strong>Lunch:</strong> Grilled salmon with a side of mixed greens and a lemon vinaigrette.</li>
                    <li><strong>Snack:</strong> Cottage cheese with a few slices of cucumber.</li>
                    <li><strong>Dinner:</strong> Stir-fried chicken with bell peppers and mushrooms, served with cauliflower rice.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
