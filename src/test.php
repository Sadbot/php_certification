<?php
namespace Cert;

function reduce(array $arr, \Closure $userFunc, $offset = 0)
{
	$decorator = function ($userFunc)
	{
		return function () use ($userFunc)
		{
			$args = \func_get_args();
			if(\count($args) != 2)
		 	{
				throw new \Exception('In callable function must be 2 arguments!');
			}
			return \call_user_func_array($userFunc, $args);
		};
	};

	$func = $decorator($userFunc);

	$result = $offset;
	foreach ($arr as &$value)
	{
		$result = $func($result,$value);
	}

	return $result;
}

$test = [1,2,3,4,5];

$a = reduce(
	$test,
	function ($a, $b)
	{
		return $a + $b;
	},
	0
);

echo $a;
