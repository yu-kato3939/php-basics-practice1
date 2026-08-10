<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>偶数・奇数判定プログラム</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .result {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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
            border-top: 2px solid #0066cc;
            font-size: 20px;
            font-weight: bold;
            color: #0066cc;
        }
    </style>
</head>

<body>
    <div class="result">
        <h1>偶数・奇数判定プログラム</h1>
        <?php
        $number = 7;
        echo "<div class='line'>数: {$number}</div>";

        if ($number % 2 == 0) {
            echo "<div class='total'>{$number}は偶数です</div>";
        } else {
            echo "<div class='total'>{$number}は奇数です</div>";
        }
        ?>
    </div>
</body>

</html>