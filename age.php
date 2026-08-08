<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>複数条件の判定</title>
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
        $age = 25;
        $is_member = "はい";
        $is_student = "いいえ";

        echo "<div class='line'>年齢:{$age}</div>";
        echo "<div class='line'>会員:{$is_member}</div>";
        echo "<div class='line'>学生:{$is_student}</div>";

        $is_member = true;
        $is_student = false;

        if ($age >= 18 && $is_member) {
            echo "<div class='total'>割引が適用されます。</div>";
        }

        if ($age >= 65 || $is_student) {
            echo "<div class='total>シニア・学生割引が適用されます。</div>";
        }
        ?>
    </div>

</body>

</html>