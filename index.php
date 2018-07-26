<?php

/**
 * Class dataSource
 * gives raw data - it mocks data flow from sensor
 */
class dataSource{
	private $piTag;
	/**
	 * @return mixed
	 */
	public function getPiTag()
	{
		//$arr = ['tagName'=>$this->piTag];

		//return json_encode($arr);
		return $this->piTag;
	}
	/**
	 * @param mixed $piTag
	 */
	public function setPiTag()
	{
		$this->piTag = rand(0, 100);
	}
	public function __construct()
	{
		$this->setPiTag();
	}
}

class connector{
	private $dataSource;

	/**
	 * @param mixed $dataSource
	 */
	public function setDataSource($dataSource)
	{
		$this->dataSource = $dataSource;
	}
	//public function
}
$mytag = new dataSource;
$current = $mytag->getPiTag();
//echo $current;
//json_encode($current);
echo $mytag->getPiTag();