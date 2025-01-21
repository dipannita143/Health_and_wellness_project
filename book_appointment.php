<?php
require 'd_connect.php'; // Include database connection

// Fetch doctors from the database for the dropdown
$query = "SELECT id, name, specialization FROM doctors";
$result = mysqli_query($conn, $query);
$doctors = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Appointment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-3xl font-bold text-center text-blue-600">Book a Doctor's Appointment</h1>
        
        <!-- Appointment Form -->
        <form action="appointment_handler.php" method="POST" class="mt-8 bg-white p-6 rounded-lg shadow-md">
            <!-- Patient Name -->
            <div class="mb-4">
                <label for="patient_name" class="block text-gray-700 font-bold mb-2">Your Name</label>
                <input type="text" id="patient_name" name="patient_name" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500" required>
            </div>

            <!-- Patient Email -->
            <div class="mb-4">
                <label for="patient_email" class="block text-gray-700 font-bold mb-2">Your Email</label>
                <input type="email" id="patient_email" name="patient_email" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500" required>
            </div>

            <!-- Doctor Selection -->
            <div class="mb-4">
                <label for="doctor_id" class="block text-gray-700 font-bold mb-2">Select Doctor</label>
                <select id="doctor_id" name="doctor_id" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500" required>
                    <option value="">-- Select a Doctor --</option>
                    <?php foreach ($doctors as $doctor): ?>
                        <option value="<?= $doctor['id'] ?>">
                            <?= $doctor['name'] ?> (<?= $doctor['specialization'] ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Appointment Date -->
            <div class="mb-4">
                <label for="appointment_date" class="block text-gray-700 font-bold mb-2">Select Date</label>
                <input type="date" id="appointment_date" name="appointment_date" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500" required>
            </div>

            <!-- Appointment Time -->
            <div class="mb-4">
                <label for="appointment_time" class="block text-gray-700 font-bold mb-2">Select Time</label>
                <input type="time" id="appointment_time" name="appointment_time" class="w-full px-4 py-2 border rounded-lg focus:ring-blue-500" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">Book Appointment</button>
        </form>
    </div>
</body>
</html>
