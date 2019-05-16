<?php 	




/**
 * 
 */
class aaa
{
	
	public static function ccc($n,$m)
	{
		$count = 0;
		for ($i=$n; $i <= $m; $i++) { 
			$len = strlen($i);
			for ($j=$len; $j > 0; $j--) { 
				if (floor($i/pow(10, $j-1)%10)==1) {
					$count++;
				}
			}
		}
		return $count;
	}
}

$res = aaa::ccc(1,13);
echo $res;


 ?>