<?php 
/**
 * 抽象工厂模式
 * @author  new1024kb
 * @since  2020-01-07
 */

interface Log {
	/**
	 * [writeLog 写入日志]
	 * @return [string]
	 */
	public function writeLog(): string;
}

//数据库请求日志
class DbRquestLog implements Log {

	/**
	 * [writeLog 写入日志]
	 * @return [string]
	 */
	public function writeLog(): string {
		return 'Db request log written successfully.';
	}
}

//数据库返回日志
class DbResponseLog implements Log {

	/**
	 * [writeLog 写入日志]
	 * @return [string]
	 */
	public function writeLog(): string {
		return 'Db response log written successfully.';
	}
}

//服务器请求日志
class WebServerRquestLog implements Log {

	/**
	 * [writeLog 写入日志]
	 * @return [string]
	 */
	public function writeLog(): string {
		return 'WebServer request log written successfully.';
	}
}

//服务器返回日志
class WebServerResponseLog implements Log {

	/**
	 * [writeLog 写入日志]
	 * @return [string]
	 */
	public function writeLog(): string {
		return 'WebServer response log written successfully.';
	}
}

//抽象工厂
interface LogFactory {

	/**
	 * [createRequestLog 创建请求日志的方法]
	 */
	public function createRequestLog();

	/**
	 * [createResponseLog 创建返回日志的方法]
	 */
	public function createResponseLog();
}

//数据库种类工厂
class DbFactory implements LogFactory {

	/**
	 * [createRequestLog 实现创建请求日志]
	 * @return [DbRquestLog实例]
	 */
	public function createRequestLog(): DbRquestLog {
		return new DbRquestLog();
	}

	/**
	 * [createResponseLog 实现创建返回日志]
	 * @return [createResponseLog实例]
	 */
	public function createResponseLog(): DbResponseLog {
		return new DbResponseLog();
	}
}

//服务器种类工厂
class WebServerFactory implements LogFactory {

	/**
	 * [createRequestLog 实现创建请求日志]
	 * @return [WebServerRquestLog实例]
	 */
	public function createRequestLog(): WebServerRquestLog {
		return new WebServerRquestLog();
	}

	/**
	 * [createResponseLog 实现创建返回日志]
	 * @return [WebServerResponseLog实例]
	 */
	public function createResponseLog(): WebServerResponseLog {
		return new WebServerResponseLog();
	}
}

$db = new DbFactory();
echo $db->createRequestLog()->writeLog();    //Db request log written successfully.
echo $db->createResponseLog()->writeLog();   //Db response log written successfully.

$web = new WebServerFactory();
echo $web->createRequestLog()->writeLog();    //WebServer request log written successfully.
echo $web->createResponseLog()->writeLog();   //WebServer response log written successfully.