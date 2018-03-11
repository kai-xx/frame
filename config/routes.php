<?php
use NoahBuscher\Macaw\Macaw;
Macaw::get("", "HomeController@home");
Macaw::get("test",function () {
    echo "test" . PHP_EOL;
});

Macaw::$error_callback = function () {
    throw new Exception("路由无效 404 Not Found");
};
Macaw::dispatch();