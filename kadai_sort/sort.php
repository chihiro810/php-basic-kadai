<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
            function sort_2way($order) {
                $nums = [15, 4, 18, 23, 10];

                if ($order == TRUE) {
                    echo '昇順を表示します。'.'<br>';
                    sort($nums);
                    foreach ($nums as $num) {
                        echo $num . '<br>';
                    };
                }else {
                        echo '降順を表示します。'.'<br>';
                        rsort($nums);
                        foreach ($nums as $num) {
                            echo $num . '<br>';
                        };
                    };
                
            };
            sort_2way(TRUE);
            sort_2way(FALSE);
        ?>
    </p>
</body>
</html>