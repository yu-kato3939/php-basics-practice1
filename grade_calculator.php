<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績管理</title>
</head>

<body>
    <h1>成績判定システム</h1>
    <h2>個別成績</h2>
    <?php
    $students = [
        ["name" => "田中太郎", "score" => 85],
        ["name" => "佐藤花子", "score" => 92],
        ["name" => "鈴木一郎", "score" => 78],
        ["name" => "高橋美咲", "score" => 65],
        ["name" => "伊藤健太", "score" => 58],
    ];

    //成績評価のデータ
    function grade($score)
    {
        if ($score >= 90) {
            return ["grade" => "A", "status" => "優秀"];
        } elseif ($score >= 80) {
            return ["grade" => "B", "status" => "良好"];
        } elseif ($score >= 70) {
            return ["grade" => "C", "status" => "普通"];
        } elseif ($score >= 60) {
            return ["grade" => "D", "status" => "要努力"];
        } else {
            return ["grade" => "F", "status" => "不合格"];
        }
    }

    //生徒の名前、点数のデータ
    
    foreach ($students as $student) {
        echo $student["name"] . ":";
        echo $student["score"] . "点" . "-";
        $result = grade($student["score"]);
        echo "評価" . $result['grade'];
        echo $result['status'] . "<br>";
    }
    ?>

    <h2>統計情報</h2>
    <?php
    //合格、不合格者のカウント
    $pass_count = 0;
    $fail_count = 0;

    foreach ($students as $student) {
        if ($student['score'] >= 60) {
            $pass_count++;
        } else {
            $fail_count++;
        }
    }
    echo "合格者数" . ":" . $pass_count . "人" . "<br>";
    echo "不合格者数" . ":" . $fail_count . "人" . "<br>";


    //平均のデータ
    $total_count = 0;
    foreach ($students as $student) {
        $total_count += $student['score'];
    }
    $average = $total_count / count($students);
    echo "平均点" . ":" . $average . "点";
    ?>
</body>

</html>