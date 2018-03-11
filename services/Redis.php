<?php

use Predis\Client;
class Redis
{
    const CONFIG_FILE = "/config/redis.php";
    protected static $redis;

    public static function init()
    {
        self::$redis = new Client(require BASE_PATH . self::CONFIG_FILE);
    }

    public static function set($key, $value, $time = null, $unit = null)
    {
        self::init();
        if ($time) {
            switch ($unit) {
                case 'h':
                    $time *= 3600;
                    break;
                case 'm':
                    $time *= 60;
                    break;
                case 's':
                case 'ms';
                    break;
                default:
                    throw new InvalidArgumentException('单位只能是 h m s ms')；
            }
        }
    }
}