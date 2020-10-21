<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>messege</title>
</head>

<body>
    @php

    $greetingArray = ['おはよう', 'こんにちは','こんばんは','おやすみ','すき'];
    

    if ($msg == 'morning') {
       $greeting = '朝の挨拶';
       $greeting2 = 'おはようございます';
    
    }elseif ($msg == 'afternoon') {
        $greeting = '昼の挨拶';
        $greeting2 = 'こんにちは';

    }elseif ($msg == 'evening') {
        $greeting = '夕方のあいさつ';
        $greeting2 = 'こんばんは';
    }elseif ($msg == 'night') {
        $greeting = '夜のあいさつ';
        $greeting2 = 'おやすみ';
    }elseif ($msg == 'freeword') {
        $greeting = '自由なメッセージ';
        $greeting2 = $free ;
    }elseif ($msg == 'random') {
        $greeting = 'ランダムなメッセージ';
        $greeting2 = $greetingArray[rand(0,4)];
    }else {
        $greeting = 'まちがってるよ';
        $greeting2 = '';
    }
    
        
@endphp



<h1>{{ $greeting}}</h1>
<h2>{{$greeting2}}</h2>


</body>

</html>