<?php

include_once('./_common.php');


	$co_id = "testPage";

	//상단 메뉴바의 몇번째 1차메뉴에 속해 있는지 지정해 주세요.
	$menuNum = "1";

	//상단 메뉴바의 1차메뉴중 몇번째 2차메뉴에 속해 있는지 지정해 주세요.
	$menuNum2 = "3";
	
	//본 페이지의 제목을 입력해 주시기 바랍니다.
	$g5['title'] = "비젼";


include_once(G5_THEME_PATH.'/head.php');
?>
<script>
$(document).ready(function(){
	$('#snb > li:nth-child(<?php echo $menuNum; ?>)').addClass("co_id<?php echo $co_id; ?> active");
	$('#snb > li:nth-child(<?php echo $menuNum; ?>) > ul > li:nth-child(<?php echo $menuNum2; ?>)').addClass("snb2d_co_id<?php echo $co_id; ?>  active");
	});
</script>

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam a sequi quod fugiat dicta. Recusandae, quos laboriosam nam qui inventore quidem, aspernatur odio tenetur a corrupti eveniet dolores, quod tempora sapiente? Libero cupiditate similique maiores excepturi voluptatem, eveniet velit, error temporibus, doloribus sequi sunt dolores modi sint dicta porro quae illo inventore culpa vitae nam quasi alias nulla veniam laudantium. Accusantium quaerat, voluptate autem eius natus eos, porro illum repudiandae sit soluta, aspernatur ullam minima laboriosam dolorum quia facere quos itaque aperiam voluptates. Odit corrupti sapiente odio dolor iusto, vitae maiores tenetur impedit velit, recusandae dolores quod a nesciunt fugiat!</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>