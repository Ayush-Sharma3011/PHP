<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>
<body class="item-center justify-center">
    <div class="border-2 m-[10px] p-[10px]  ">
        <?php 

function multiplyByTwo(float $number): float {
    $number *= 1.5;
    return $number;
}

$originalNumber = 5.5;
$newNumber = multiplyByTwo($originalNumber);

echo "Original number: " . $originalNumber . "<br>";
echo "New number: " . $newNumber;
?></div>
</body>
</html>