<?php   
    if(isset($_POST['clear'])){
        setcookie("count", "", time()-3600);
        $_POST = [];
        $count = 10;
        header("url=index.php");
    }else{

    if (isset($_POST['submit'])) {
        $count =  intval($_POST['count']);
        setcookie("count",$count);
    }elseif (isset($_COOKIE['count'])) {
        $count = intval($_COOKIE['count']);
    }else{
        $count = 10;
    }
    }
    
$allArticles  = [
    ["title" => "How much prize money did the Women`s Asia Cup 2022 winners and runners-up get?", 
    "desc"=> "India, who won Women`s Asia Cup for a record-extending seventh time, 
    received a total prize money of $20,000. Meanwhile, Sri Lanka, who finished 
    runners-up, won a prize money of $12,500. India fast bowler Renuka Singh won
     a prize money of $1,000 for being the Player of the Match in the final. 
     Meanwhile, Player of the Tournament Deepti Sharma got $2,000."],


    ["title"=> "Salman is a brilliant human being, respects women on set: Choreographer Shabina ",
    "desc"=> 'Choreographer Shabina Khan, speaking about working with Salman Khan, said the actor gives a 
    lot of respect to women on sets. "He`s such a brilliant human being [who] started calling me ma`am
     when I turned dance master," she said, adding, "I requested him not to call me ma`am...but he said...
     others will address me in the same way that he does." '],



    ["title"=> "England have got `mojo back` ahead of T20 WC: Coach Matthew Mott ",
    "desc"=> 'England`s white-ball coach Matthew Mott said that the side has got 
    their "mojo back" ahead of the T20 World Cup. "There`s a number of teams 
    that are potential winners of this WC, of which we`re one," Mott said. He added,
     "I think we`re in a pretty good spot at the moment...
    [and] we don`t want to be...predictable [in the tournament]."'],

    ["title" => "How much prize money did the Women`s Asia Cup 2022 winners and runners-up get?", 
    "desc"=> "India, who won Women`s Asia Cup for a record-extending seventh time, 
    received a total prize money of $20,000. Meanwhile, Sri Lanka, who finished 
    runners-up, won a prize money of $12,500. India fast bowler Renuka Singh won
     a prize money of $1,000 for being the Player of the Match in the final. 
     Meanwhile, Player of the Tournament Deepti Sharma got $2,000."],

     ["title" => "How much prize money did the Women`s Asia Cup 2022 winners and runners-up get?", 
     "desc"=> "India, who won Women`s Asia Cup for a record-extending seventh time, 
     received a total prize money of $20,000. Meanwhile, Sri Lanka, who finished 
     runners-up, won a prize money of $12,500. India fast bowler Renuka Singh won
      a prize money of $1,000 for being the Player of the Match in the final. 
      Meanwhile, Player of the Tournament Deepti Sharma got $2,000."],

      ["title"=> "Salman is a brilliant human being, respects women on set: Choreographer Shabina ",
      "desc"=> 'Choreographer Shabina Khan, speaking about working with Salman Khan, said the actor gives a 
      lot of respect to women on sets. "He`s such a brilliant human being [who] started calling me ma`am
       when I turned dance master," she said, adding, "I requested him not to call me ma`am...but he said...
       others will address me in the same way that he does." '],

       ["title"=> "England have got `mojo back` ahead of T20 WC: Coach Matthew Mott ",
       "desc"=> 'England`s white-ball coach Matthew Mott said that the side has got 
       their "mojo back" ahead of the T20 World Cup. "There`s a number of teams 
       that are potential winners of this WC, of which we`re one," Mott said. He added,
        "I think we`re in a pretty good spot at the moment...
       [and] we don`t want to be...predictable [in the tournament]."'],
   
    ["title" => "How much prize money did the Women`s Asia Cup 2022 winners and runners-up get?", 
     "desc"=> "India, who won Women`s Asia Cup for a record-extending seventh time, 
     received a total prize money of $20,000. Meanwhile, Sri Lanka, who finished 
     runners-up, won a prize money of $12,500. India fast bowler Renuka Singh won
      a prize money of $1,000 for being the Player of the Match in the final. 
      Meanwhile, Player of the Tournament Deepti Sharma got $2,000."],


      ["title"=> "Salman is a brilliant human being, respects women on set: Choreographer Shabina ",
      "desc"=> 'Choreographer Shabina Khan, speaking about working with Salman Khan, said the actor gives a 
      lot of respect to women on sets. "He`s such a brilliant human being [who] started calling me ma`am
       when I turned dance master," she said, adding, "I requested him not to call me ma`am...but he said...
       others will address me in the same way that he does." '],



      
    ["title" => "How much prize money did the Women`s Asia Cup 2022 winners and runners-up get?", 
    "desc"=> "India, who won Women`s Asia Cup for a record-extending seventh time, 
    received a total prize money of $20,000. Meanwhile, Sri Lanka, who finished 
    runners-up, won a prize money of $12,500. India fast bowler Renuka Singh won
     a prize money of $1,000 for being the Player of the Match in the final. 
     Meanwhile, Player of the Tournament Deepti Sharma got $2,000."],



];
$articles = "";
for($i = 0;$i < $count;$i++){
    $articles = $articles.'<div class="article">
    <h1>'.$allArticles[$i]['title'].'</h1>
    <p>'.$allArticles[$i]['desc'].'</p>
   </div>';
}

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>News</title>
</head>
<body>
<form class="clearCookiesForm" action="index.php" method="POST">
    <button  type="submit" id="clear" name="clear">clear Cookies</button>
   </form>
    <div class="articles">
        <?php echo $articles; ?>
    </div>

   
   <form class="countform" action="index.php" method="post">
   <label for="count">«Combien d’actualités voulez-
vous voir affichées ?».</label>
    <select name="count" id="count" required>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
    </select>
    <input type="submit" name="submit" value="OK">
   </form>
</div>
</body>
</html>'