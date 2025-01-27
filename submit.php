<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST['age'];

        if ($age >= 18) {
            echo "You are eligible.";
        } else {
            echo "You are not eligible.";
        }
    }
    ?>