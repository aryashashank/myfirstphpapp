<?php
$page = htmlspecialchars($_SERVER['PHP_SELF']);
$sec = "5";

$words = array("wonderful person.", "noobie.", "hero.","guy.","girl.");
$word = $words[rand(0,3)];
?><html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="container">
    	<div class="box">
    		<p>Hello You are a <?= $word?></p>
    	</div>
    </div>


    
    </body>
</html>