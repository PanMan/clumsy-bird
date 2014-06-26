<?php
$score=intval($_REQUEST['score']);
if ($score==0) {exit;} //Skip 0 scores
$highscore=file_get_contents("highscore.txt");
if ($score>$highscore){
	file_put_contents("highscore.txt", $score);
	$highscore=$score;
}
file_put_contents("highscores.txt", $score."\n", FILE_APPEND);
$out=$score.":".$highscore.":".time();
file_put_contents("lastscore.txt", $out);
