<?php //echo $this->category; ?>
<?php //if($this->category == 'cesd' ): ?>
<?php //$this->need('archive-new.php') ?>
<?php //else: ?>
<?php //$this->need('archive-bat.php') ?>
<?php //endif ?>

<?php 
	$kecheng = array ( 'Parental_curriculum', 'Learning_Courses',  'Tutor_course');
	$wenzhang = array ( 'Educational_experience', 'Learning_share');
	$jiangshi = array ('Tutor');
	$jigou = array ('monsterid');
	$a=$this->category;

	if(in_array($a, $kecheng)){
		$this->need('archive-yibo.php');
	}elseif(in_array($a, $wenzhang)){
		$this->need('archive-wenzhang.php');
	}elseif(in_array($a, $jiangshi)){
		$this->need('archive-jiangshi.php');
	}elseif(in_array($a, $jigou)){
		$this->need('archive-jigou.php');
	}else{
		$this->need('archive-new.php');
	}
	



	// $categoryids = array ('new' => 'Parental_curriculum','bat' => 'Learning_Courses' );
	// $a=$this->category;
	// $isin = in_array($a,$categoryids);//数组中是否包含
	
	// if($isin){
		// //echo array_search($a,$categoryids);//查询返回键值
		// $this->need('archive-'.array_search($a,$categoryids).'.php') ;
	// }else{
		// $this->need('archive-yibo.php');
	// }
	
?>
