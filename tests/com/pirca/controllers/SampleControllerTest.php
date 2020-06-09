<?php
namespace tests\com\pirca\controllers;

use PHPUnit\Framework\TestCase;
use app\com\pirca\controllers\SampleController;

class SampleControllerTest extends TestCase {

    public function testIndex() {

        $controller = new SampleController();

        $result = $controller->index();

        $this->assertNotEmpty($result, "Sample Controller test not empty");
    }

    public function testAbout() {

        $controller = new SampleController();

        $result = $controller->about();

        $this->assertNotEmpty($result, "Sample Controller test not empty");
    }

}