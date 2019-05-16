<?php 

/**
 * 
 */
class aaa
{
	public static function ccc($n,$m)
	{
		$couton = 0;
		for ($i=$n; $i <= $m; $i++) { 
			$len = strlen($i);
			for ($j=$len; $j > 0; $j--) { 
				if (floor($i/pow(10, $j-1)%10)==1) {
					$couton++;
				}
			}
		}
		return $couton;
	}
}


$res = aaa::ccc(100,130);
echo $res;


 ?>