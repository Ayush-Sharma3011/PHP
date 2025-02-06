
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .result-box {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #000;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 5px;
            background-color: #e1e1e1;
            margin: 5px 0;
            border-radius: 5px;
        }
        li:nth-child(odd) {
            background-color: #d1d1d1;
        }
        li b {
            color: #2c3e50;
        }
    </style>
</head>
<body>

<div class="result-box">
    <h2>Student Results</h2>
    <?php
    $result = array(
        array("Manoj", 7.8, "Pass"),
        array("Aditya", 8.5, "Pass"),
        array("Anuj", 8.9, "Fail"),
    );

    // Loop through each row and display its content
    for($row = 0; $row < 3; $row++) {
        echo "<p><b>Student " . ($row + 1) . "</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li><b>" . ucfirst($result[$row][$col]) . "</b></li>";
        }
        echo "</ul>";
    }
    ?>
</div>

</body>
</html>
