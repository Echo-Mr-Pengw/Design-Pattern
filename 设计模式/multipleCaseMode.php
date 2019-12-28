<?php 
/**
 * PHP7 多例模式
 * 一个类有多个相同的实例，每个实例自身创建和管理
 */

//终结类 不能被继承
final class multipleCaseMode {

	/**
	 * [$instance 私有的 保存多个实例的数组]
	 * @var array
	 */
	private static $instance = [];

	/**
	 * [__construct 私有的构造方法，防止类外new]
	 */
	private function __construct() {}

	/**
	 * [__clone 私有的魔术方法， 防止类外对象的克隆]
	 * @return [type] [description]
	 */
	private function __clone() {}

	/**
	 * [__wakeup 私有的构造方法，防止类外对象的反序列化]
	 */
	private function __wakeup() {}

	/**
	 * [getInstance 获取实例的唯一入口]
	 * @param  string $instanceName [实例名]
	 * @return [object]             [返回对象]
	 */
	public static function getInstance(string $instanceName) {

		if(!isset(self::$instance[$instanceName])) {
			self::$instance[$instanceName] = new self;
		}
		return self::$instance[$instanceName];
	}
}

/*object(multipleCaseMode)#1 (0) {
}*/
var_dump(multipleCaseMode::getInstance(1));

/*object(multipleCaseMode)#2 (0) {
}*/
var_dump(multipleCaseMode::getInstance(2));

