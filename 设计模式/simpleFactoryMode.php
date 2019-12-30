<?php 
/**
 * 简单工厂模式
 * @author  new1024kb
 * @since  2019-12-30
 */

interface DB {
	public function connect();
}

class MySQL implements DB {
	public function connect() {
		echo 'MySQL connection succeed';
	}
}

class Oracle implements DB {
	public function connect() {
		echo 'Oracle connection succeed';
	}
}

class SimpleFactoryMode {

	public static function createDbConnect(string $dbType) {
		return new $dbType;
	}
}

//连接MySQL
$mysql = SimpleFactoryMode::createDbConnect('MySQL');
$mysql->connect();

//连接Oracle
$oracle = SimpleFactoryMode::createDbConnect('Oracle');
$oracle->connect();