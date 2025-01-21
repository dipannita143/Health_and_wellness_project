<?php
require 'd_connect.php';

// Get form data
$patient_name = $_POST['patient_name'];
$patient_email = $_POST['patient_email'];
$doctor_id = $_POST['doctor_id'];
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];

// Insert into database
$query = "INSERT INTO appointments (patient_name, patient_email, doctor_id, appointment_date, appointment_time)
          VALUES ('$patient_name', '$patient_email', '$doctor_id', '$appointment_date', '$appointment_time')";

if (mysqli_query($conn, $query)) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
