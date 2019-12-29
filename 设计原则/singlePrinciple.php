<?php
/**
 * 单一职责原则
 * 一个类只做一样事情
 * @author new1024kb
 * @since  2019-12-29
 */

/**
 * 案例一
 * 这是我们平时的写法
 */
class Vehicle {
	public function run(string $vehicleName) {
		echo $vehicleName . '是在地上运行的交通工具';
	}
}

$v = new Vehicle();
$v->run('自行车');
$v->run('轮船');

/**
 * 案例二
 * 利用单一职责原则，一个类负责一样事情
 */
class Vehicle {
	$b = new GroundTools();
	$s = new WaterTools();
}

//地上工具类
class GroundTools {
	public function run() {
		echo '在地上运行';
	}
}

//水上工具
class WaterTools {
	public function run() {
		echo '在水里面运行';
	}
}

/**
 * 案例三
 * 方法遵守了单一职责原则
 */
class Vehicle {
	$t = new Tools();
	$t->groundrRun();
	$t->waterRun();
}

class Tools {
	public function groundrRun() {
		echo '在水里面运行';
	}

	public function waterRun() {
		echo '在地上运行';
	}
}

