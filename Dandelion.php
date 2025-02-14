<?php
// Initialize the variable for checking the form input
$show_image = false;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the user input
    $response = trim(strtolower($_POST['response']));

    // Check if the response is 'yes'
    if ($response === 'yes') {
        $show_image = true; // Show the image if 'yes' is typed
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valentine's Date Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f8f8;
            padding: 50px;
        }
        h1 {
            color: #ff69b4; /* Pink color for Valentine's Day */
        }
        .form-container {
            margin: 20px;
            padding: 20px;
            border: 2px solid #ff69b4;
            border-radius: 10px;
            background-color: #fff;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
        }
        input[type="text"] {
            padding: 10px;
            width: 80%;
            margin-bottom: 10px;
            border: 2px solid #ff69b4;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #ff69b4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .image-container {
            margin-top: 30px;
        }
        .image-container img {
            width: 400px;
            max-width: 100%;
        }
    </style>
</head>
<body>
    <h1>Will you be my Valentine's date?</h1>

    <!-- Form for user input -->
    <div class="form-container">
        <form method="POST" action="">
            <label for="response">Type 'yes' to see my gift:</label><br>
            <input type="text" name="response" id="response" required>
            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- Show image if the response was 'yes' -->
    <?php if ($show_image): ?>
        <div class="image-container">
            <h2>Here's a special Valentine's gift for you:</h2>
            <img src="chocolates_flowers.jpg" alt="Chocolates and Flowers">
        </div>
    <?php else: ?>
        <!-- Optional: Display a message if they haven't typed 'yes' -->
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <p style="color: red;">Please type 'yes' to see the gift!</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
