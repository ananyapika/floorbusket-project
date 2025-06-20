<main>
<?php
if(!empty($lastUriSegment) && ($lastUriSegment!=='coming-soon')){
	include_once('includes/common/bread_crumb.php');
}

if(!empty($pages_arr)){
		foreach ($pages_arr as $key => $value) {
		$p[]=$key;
	}

	if(in_array($lastUriSegment, $p)){
		$file_path=$pages_arr[$lastUriSegment].'/index.php';
		// if(file_exists($file_path)){
		// 	include_once($file_path);
		// }else{
		// 	include_once('others/404.php');
		// }

		include_once($file_path);
		
	}else{
		include_once('others/404.php');
	}
}else{
	include_once('others/404.php');
}
?>
</main>