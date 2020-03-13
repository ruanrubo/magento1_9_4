<?php

/*
 * 我的测试接口控制器类
 */

class Mytest_NewApi_FooController extends Mage_Core_Controller_Front_Action {
    /*
     * 主控制器
     */

    public function indexAction() {
        echo "你好，世界！";
    }

    public function addAction() {
        echo 'Foo add Action';
    }

}
