<?php
	ini_set("max_execution_time", 3600);//seconds , works only for command line
	set_time_limit(3600);//0= unlimited	, works only for command line
	
		//$file=str_replace('\\','/',__DIR__.'/test.txt') ;
		$file=str_replace('\\','/',dirname(__FILE__).'/test.txt') ;
	
	echo $file;
	echo '<br>';
	
	file_put_contents($file , 'start');	
		sleep(15);
		$s='';
	for($i=0;$i<1000;$i++){
		$s.=$i.'<br>';
	}
		echo $s;
	
	unlink ($file);
		sleep(15);
		
	file_put_contents($file ,'stop');
	
?>
