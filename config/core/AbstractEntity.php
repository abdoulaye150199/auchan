<?php

namespace Src\config\core;

abstract class AbstractEntity {
    abstract public static function toObject($array = []);
    abstract public function toArray();
    public function toJson() {
        return json_encode(static::toArray($data));
    }
}