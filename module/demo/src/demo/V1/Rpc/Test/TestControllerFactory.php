<?php
namespace demo\V1\Rpc\Test;

class TestControllerFactory
{
    public function __invoke($controllers)
    {
        return new TestController();
    }
}
