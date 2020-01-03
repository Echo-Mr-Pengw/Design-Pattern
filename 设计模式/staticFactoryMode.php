<?php 
/**
 * PHP7 静态工厂模式
 * 定义一个工厂，根据传入不同的参数 实例化不同的类，被创建的实例通常有相同的父类。用于创建实例的方法是静态的。
 * @author  new1024kb
 * @since  2020-01-02
 */

/**
 * 接口 DB
 * 定义数据库公共的方法 connect()
 */
interface DB {
	public function connect();
}

/**
 * MySQL类实现DB
 */
class MySQL implements DB {

	public function connect() {
		echo 'MySQL connection succeed';
	}
}

/**
 * Oracle类实现DB
 */
class Oracle implements DB {

	public function connect() {
		echo 'Oracle connection succeed';
	}
}

/**
 * 类工厂
 */
class StaticFactoryModel {

	/**
	 * [createConnect 静态方法 创建连接的方法]
	 * @param  [type] $dbType [需实例化的数据库]
	 * @return [type]         [description]
	 */
	public static function createConnect($dbType) {
		if($dbType == 'MySQL') {
			return new MySQL();
		}elseif($dbType == 'Oracle') {
			return new Oracle();
		}else{
			return 'DB does not exist.';
		}
	}
}

//连接MySQL
$m = StaticFactoryModel::createConnect('MySQL');
$m->connect();

//连接Oracle
$o = StaticFactoryModel::createConnect('Oracle');
$m->connect();