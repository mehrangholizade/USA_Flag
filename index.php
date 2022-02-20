<html>
    <head>
        <title>USA Flag</title>
        <meta charset="utf-8">
        <meta name="author" content="Mehran Gholizadeh">
        <meta name="description" content="USA flag">
        <meta name="keywords" content="USA flag,flag,star,USA,html,css and ...">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
	<style>

  #stars{
    background-color: darkblue;
    width: 200px;
    height: 130px;
    position: absolute;
    margin-top:10px;
}
#flag{
     width:500px;
     height: 300px;
     border: none;
 }
#td_flag{
    background:red; 
    height:40px;
    border-top: solid white 8px;
    border-bottom: solid white 8px;
 }
	</style>

    <body>
    <table id="flag">
            <div id="stars">
                <?php 
                $stars = '<img  src="star.png" alt="..." width="14" height="14" />'; ?>
                    <?php for($i = 0; $i < 55; $i++):?>
                    <span>
                    <span style="position:fixed; top:<?php print(rand(19,119));?>; left:<?php print(rand(5,190));?>;">
				    <?php print ($stars); ?>
			        <?php endfor; ?>
			        </span>
            </div>
            
            <?php for($i = 0; $i < 7; $i++): ?>
                <tr>
        
            <td id="td_flag"></td>
            
         </tr>  
         <tr></tr>
         <?php endfor; ?>
        </table>

    </body>

</html>