<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
 body { text-align:center; font-family: arial; }
 .cups { margin:20px auto 70px; width:520px; height:183px; border-bottom:3px solid #000;
}
 .cup { width:132px; height:113px; background-image:url(cup.png); float:left; margin:0
20px; }
 .ball { position:absolute; margin-top:72px; margin-left:44px; z-index:-1; width:43px;
height:41px; background:url(ball.png); }
 .putdown { margin-top:70px; }
 .putdown .ball { margin-top:72px; }
 .liftup { margin-top:0px; }
 .liftup .ball { margin-top:142px; }
 .player { margin:0 auto; width:92px; height:243px; background:transparent url(player.png)
no-repeat 0 60px; }
 .clear { clear:both; }
 .red { background-color:red; }
 .yellow { background-color:yellow; }
 .blue { background-color:blue; }
</style>
<script src=""></script>
</head>
<body>



<div class="cups">
 <?php echo $cups[1]; ?>
 <?php echo $cups[2]; ?>
 <?php echo $cups[3]; ?>
 <div class="clear"></div>
 </div>

<?php echo $player; ?>

<button ><a href='?startGame=true'>Start Game!</a></button>
<button ><a href='?resetAmount=true'>Reset Amount!</a></button>

</body>
</html>
