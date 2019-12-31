<?php 
/**
 * 简单工厂模式
 * @author  new1024kb
 * @since  2019-12-30
 */

class MySQL {
	public function connect() {
		echo 'MySQL connection succeed';
	}
}

class Oracle {
	public function connect() {
		echo 'Oracle connection succeed';
	}
}

class SimpleFactoryMode {

	public function createDbConnect(string $dbType) {
		return new $dbType;
	}
}

//连接MySQL
$mysql = new SimpleFactoryMode();
$mysql->createDbConnect('MySQL')->connect();

//连接Oracle
$oracle = new SimpleFactoryMode();
$oracle->createDbConnect('Oracle')->connect();