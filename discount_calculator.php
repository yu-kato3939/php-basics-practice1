<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>割引計算プログラム</title>
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
        <h1>割引計算プログラム</h1>

        <?php
        $original_price = 5000;
        $discount_rate = 0.2;
        $discount_amount = $original_price * $discount_rate;
        $final_price = $original_price - $discount_amount;

        echo "<div class='line'>元の価格:{$original_price}</div>";
        echo "<div class='line'>割引率:{$discount_rate}</div>";
        echo "<div class='line'>割引価格:{$discount_amount}</div>";
        echo "<div class='total'>割引後価格:{$final_price}</div>";
        ?>
    </div>

</body>

</html>