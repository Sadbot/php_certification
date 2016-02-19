<?php
namespace Cert\Stack;

class Stack {
	private $data = [];

	public function enqueue()
	{
		$values = func_get_args();

		foreach ($values as $element)
		{
			$this->data[] = $element;
		}
	}

	public function dequeue()
	{
		if(count($this->data) > 0)
		{
			return array_shift($this->data);
		}
		return null;
	}
}

class Queue {

	private $data = [];

	public function enqueue()
	{
		$values = func_get_args();
		foreach ($values as $element)
		{
			array_unshift($this->data, $element);
		}
	}

	public function dequeue()
	{
		if(count($this->data) > 0)
		{
			return array_shift($this->data);
		}
		return null;
	}
}

$a = new Stack();
$b = new Queue();

$a->enqueue(1, 2, 3, 4);
$b->enqueue('dfsdfh', 322, 1488);

echo $a->dequeue(),$a->dequeue(),$a->dequeue(),$a->dequeue(),$a->dequeue();
echo $b->dequeue(),$b->dequeue(),$b->dequeue(),$b->dequeue(),$b->dequeue();
