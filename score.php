<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>複合代入演算子の練習</title>
    <style>
        body {
            front-family: Arial, sans-serif;
            max-width: 600px;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .result {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.10px);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .line {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
        }

        .total {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #06c;
            font-size: 20px;
            font-weight: bold;
            color: #06c;
        }
    </style>
</head>

<body>
    <div class="result">
        <h1>複合代入演算子の練習</h1>

        <?php
        $score = 100;//初期スコア
        echo "<div class='line'>初期スコア:{$score}</div>";

        $score += 50;//ボーナススコア
        echo "<div class='line'>ボーナス後:{$score}</div>";

        $score -= 30;//ダメージ
        echo "<div class='line'>ダメージ後:{$score}</div>";

        $score *= 2;
        echo "<div class='total'>最終スコア:{$score}</div>";
        ?>
    </div>

</body>

</html>