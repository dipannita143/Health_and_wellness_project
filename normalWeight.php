<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Diet Chart</title>
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
<body class="bg-orange-100 font-sans">
    <div class="max-w-4xl mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-orange-700 mb-6">Weekly Diet Chart</h1>
        
        <div class="space-y-6">
            <!-- Saturday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-orange-700 mb-2 card-title">Saturday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Scrambled eggs with avocado and whole-grain toast.</li>
                    <li><strong>Lunch:</strong> Grilled chicken salad with olive oil dressing.</li>
                    <li><strong>Snack:</strong> Greek yogurt with honey and nuts.</li>
                    <li><strong>Dinner:</strong> Grilled salmon with quinoa and steamed broccoli.</li>
                </ul>
            </div>

            <!-- Sunday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-orange-700 mb-2 card-title">Sunday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Smoothie bowl (berries, banana, and chia seeds).</li>
                    <li><strong>Lunch:</strong> Turkey sandwich with whole-grain bread and a side of fruit.</li>
                    <li><strong>Snack:</strong> Hummus with carrot sticks.</li>
                    <li><strong>Dinner:</strong> Stir-fried tofu and mixed vegetables with brown rice.</li>
                </ul>
            </div>

            <!-- Monday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-orange-700 mb-2 card-title">Monday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Oatmeal with almond milk, banana, and cinnamon.</li>
                    <li><strong>Lunch:</strong> Grilled chicken wrap with lettuce, tomato, and avocado.</li>
                    <li><strong>Snack:</strong> Handful of almonds.</li>
                    <li><strong>Dinner:</strong> Baked cod with roasted sweet potatoes and asparagus.</li>
                </ul>
            </div>

            <!-- Tuesday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-orange-700 mb-2 card-title">Tuesday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Whole-grain pancakes with a side of fresh berries.</li>
                    <li><strong>Lunch:</strong> Lentil soup and a side of green salad.</li>
                    <li><strong>Snack:</strong> Apple slices with peanut butter.</li>
                    <li><strong>Dinner:</strong> Grilled turkey burger with a small baked potato.</li>
                </ul>
            </div>

            <!-- Wednesday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-orange-700 mb-2 card-title">Wednesday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Smoothie (spinach, mango, almond milk, and protein powder).</li>
                    <li><strong>Lunch:</strong> Caesar salad with grilled shrimp.</li>
                    <li><strong>Snack:</strong> Cottage cheese with pineapple.</li>
                    <li><strong>Dinner:</strong> Chicken stir-fry with vegetables and noodles.</li>
                </ul>
            </div>

            <!-- Thursday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-orange-700 mb-2 card-title">Thursday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Greek yogurt with granola and blueberries.</li>
                    <li><strong>Lunch:</strong> Tuna salad with whole-grain crackers.</li>
                    <li><strong>Snack:</strong> Celery sticks with almond butter.</li>
                    <li><strong>Dinner:</strong> Grilled steak with mashed cauliflower and green beans.</li>
                </ul>
            </div>

            <!-- Friday -->
            <div class="bg-white shadow-md rounded-lg p-6 card">
                <h2 class="text-xl font-bold text-orange-700 mb-2 card-title">Friday</h2>
                <ul class="list-disc list-inside">
                    <li><strong>Breakfast:</strong> Avocado toast with poached eggs.</li>
                    <li><strong>Lunch:</strong> Quinoa salad with chickpeas, cucumbers, and feta cheese.</li>
                    <li><strong>Snack:</strong> Dark chocolate square and walnuts.</li>
                    <li><strong>Dinner:</strong> Baked chicken with roasted vegetables.</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
