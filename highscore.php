<?php
$score=intval($_REQUEST['score']);

$prevscore=file_get_contents("highscore.txt");
if ($score>$prevscore){
	file_put_contents("highscore.txt", $score);
}
