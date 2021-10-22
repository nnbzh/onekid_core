<?php

namespace App\Helpers;


use Redis;

class RedisCache
{
    private Redis $storage;

    public function __construct(int $index = 1)
    {
        $this->storage  = new Redis();
        $this->storage->connect(env('REDIS_HOST', 'localhost'), env('REDIS_PORT', 6379));
        $this->storage->select($index);
    }

    public function __destruct()
    {
        $this->storage->close();
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key): mixed
    {
        return json_decode($this->storage->get($key), true);
    }

    /**
     * @param string $key
     * @param $value
     */
    public function set(string $key, $value)
    {
        $this->storage->set($key, json_encode($value));
    }

    /**
     * @param string ...$keys
     * @return int
     */
    public function del(string ...$keys): int
    {
        return $this->storage->del(...$keys);
    }
}