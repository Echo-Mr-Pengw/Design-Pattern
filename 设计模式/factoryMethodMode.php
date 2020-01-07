<?php 
/**
 * 工厂方法模式
 * @author  new1024kb
 * @since  2020-01-07
 */

//日志接口类
interface Log {
	/**
	 * [writeLog 写日志方法]
	 */
	public function writeLog();
}

//数据库日志
class DbLog implements Log {
	/**
	 * [writeLog 写入日志]
	 */
	public function writeLog() {
		echo 'Database log written successfully.';
	}
}

//Nginx日志
class NginxLog implements Log {
	/**
	 * [writeLog 写入日志]
	 */
	public function writeLog() {
		echo 'Nginx log written successfully.';
	}
}

//日志工厂接口类
interface LogFactory {
	/**
	 * [createLog 创建日志]
	 */
	public function createLog();
}

//数据库日志工厂创建
class DbLogFactory implements LogFactory {
	/**
	 * [createLog 创建数据库日志的方法]
	 */
	public function createLog() {
		return new DbLog();
	}
}

//Nginx日志工厂创建
class NginxLogFactory implements LogFactory {
	/**
	 * [createLog 创建Nginx日志的方法]
	 */
	public function createLog() {
		return new NginxLog();
	}
}

//模拟客户端测试
//实例化数据库日志工厂
$db = new DbLogFactory();
$db->createLog()->writeLog();           //输出：Database log written successfully.

//实例化Nginx日志工厂
$nginx = new NginxLogFactory();
$nginx->createLog()->writeLog();        //输出：Nginx log written successfully.






