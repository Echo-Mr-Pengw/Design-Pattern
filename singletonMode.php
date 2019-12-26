<?php 
/**
 * 单例模式
 * 特点：四私一共（四私：私有实例变量、私有构造方法、私有的clone、私有的wakeup; 公有的获取实例方法）
 * 用途：数据库的连接(不断的创建实例会浪费资源，消耗性能；一个实例还存在，可以继续使用，不需要再次创建)、锁定文件
 * @author  new1024kb
 * @since  2019-12-26
 */

//终结类，防止被继承
final class SingletonMode {

	/**
	 * [$instance 私有的实例变量]
	 * @var [string]
	 */
	private static $instance;

	/**
	 * [__construct 私有的构造方法，防止类的实例化]
	 */
	private function __construct() {}

	/**
	 * [__clone 私有克隆的模式方法，防止对象的clone]
	 * @return [type] [description]
	 */
	private function __clone() {}

	/**
	 * [__wakeup 私有的对象的反序列化]
	 */
	private function __wakeup() {}

	/**
	 * [getInstance 获取实例的静态方法，只能通过此方法获取实例]
	 * @return [type] [description]
	 */
	public static function getInstance() {

		if(self::$instance) {
			return self::$instance;
		}

		return new self;
	}
}

/**
 * 输出： 
 * object(SingletonMode)#1 (0) {
 * }
 */
var_dump(SingletonMode::getInstance());