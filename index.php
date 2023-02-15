<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <div class="title">
        <h3>日程調整</h3>
    </div>
    <form action="submit.php" method="post">
        <div>
            <label for="name">名前</label>
            <br>
            <input name="name" type="text">
        </div>
        <div>
            <label for="adress">メールアドレス</label>
            <br>
            <input name="adress" type="text">
        </div>
        <div>
            <label for="day">希望する日付を選択</label>
            <br>
            <input type="date" name="day"  required value="<?php echo date('Y-m-d'); ?>"
            min="<?php echo date('Y-m-d'); ?>">
        </div> 
        <input  class="Next" type="submit" value="次へ">
    </form>
    
    
</body>
</html>