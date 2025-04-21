<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Battle: KnightX vs ShadowY</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #141e30, #243b55);
            color: white;
            text-align: center;
            padding: 30px;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            margin: auto;
            box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.3);
        }
        .warrior {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .dice {
            font-size: 30px;
        }
        .result {
            font-size: 28px;
            font-weight: bold;
            margin-top: 20px;
            color: #ffcc00;
        }
        .btn {
            display: inline-block;
            background: #ffcc00;
            color: #141e30;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 20px;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }
        .btn:hover {
            background: #ffdd44;
        }
    </style>
</head>
<body>
    <h1>⚔️ Dice Battle: KnightX vs ShadowY 🎲</h1>
    <div class="container">
        <?php
        function rollDice() {
            return rand(1, 6);
        }

        function calculateScore($dice1, $dice2) {
            $totalScore = $dice1 + $dice2;

            if ($dice1 % 2 == 0 && $dice2 % 2 == 0) {
                $totalScore *= 2;
            } elseif ($dice1 % 2 != 0 && $dice2 % 2 != 0) {
                $totalScore += 5;
            } else {
                $totalScore -= 3;
            }

            return $totalScore;
        }

        function battle() {
            // KnightX rolls
            $knightX_dice1 = rollDice();
            $knightX_dice2 = rollDice();
            $knightX_score = calculateScore($knightX_dice1, $knightX_dice2);

            // ShadowY rolls
            $shadowY_dice1 = rollDice();
            $shadowY_dice2 = rollDice();
            $shadowY_score = calculateScore($shadowY_dice1, $shadowY_dice2);

            echo "<div class='warrior'>🛡️ KnightX rolls: <span class='dice'>$knightX_dice1, $knightX_dice2</span> (Final Score: <b>$knightX_score</b>)</div>";
            echo "<div class='warrior'>🗡️ ShadowY rolls: <span class='dice'>$shadowY_dice1, $shadowY_dice2</span> (Final Score: <b>$shadowY_score</b>)</div>";

            echo "<div class='result'>";
            if ($knightX_score > $shadowY_score) {
                echo "🏆 KnightX Wins!";
            } elseif ($shadowY_score > $knightX_score) {
                echo "🏆 ShadowY Wins!";
            } else {
                echo "🤝 It's a Draw!";
            }
            echo "</div>";
        }

        battle();
        ?>
        <br>
        <a href="test.php" class="btn">🔄 Play Again</a>
    </div>
</body>
</html>
