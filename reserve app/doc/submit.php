<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css3">    
</head>
<body>
    <div class="check"><h3>以下の内容で予約いたしました</h3></div>
       <div class="check-list"> 
        <p class="list"><?php 
            echo "名前：".$_POST['name'];
            echo '<br>';
            echo "メールアドレス：".$_POST['adress'];
            echo '<br>';
            echo "日程：".$_POST['day'];
            echo '<br>';
        ?></p>    
        </div>
       
       <?php 
            mb_language("Japanese");
            mb_internal_encoding("UTF-8");
            $to = $_POST['adress'];
            $subject = "予約完了のお知らせ";
            $message = "予約が完了しました。";
            $headers = "From: suzu.prog@gmail.com";
            
            if(mb_send_mail($to,$subject,$message,$headers)){
            echo "メールを送信しました";
            } else {
                echo "メールの送信に失敗しました";
            };
        ?>
    <form action="top.php" method="post">
        <input  class="return" type="submit" value="戻る"> 
    </form>
</body>
</html>