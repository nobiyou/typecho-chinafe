<?php 
	$jigou = array ( 'monsterid');
	$a=$this->category;

	if(in_array($a, $jigou)){
		$this->need('post-jigou.php');
	}else{
		$this->need('post-new.php');
	}
?>
