<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a=2;
        $b=3;
        function potencia($a, $b){
	if ($b<=1){
		return $a;
                
        }else{
		return $a*potencia($a,$b);
	}


        ?>
    </body>
</html>
