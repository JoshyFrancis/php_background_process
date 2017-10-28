# php_background_process
Simple, elegant PHP background process solution for Windows and Linux 

# I have just combined some solutions from stackoverflow. Thanks to all of them.

Please provide php executable path in windows.

Example, Procedural style.

					$cmd='';
					if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {//'This is a server using Windows!';
						 $cmd=  $php_path.'\php.exe '.$path.'\long_process.php' ;	
					}else{
						$cmd='/usr/bin/php -f  /var/www/example.com/public/long_process.php';
					}
                                       $pid=run_process($cmd);
                                          if(is_process_running($pid)){
						echo 'Process running';
                                                stop_process($pid);
					}else{
						echo 'Process not running';
					}
