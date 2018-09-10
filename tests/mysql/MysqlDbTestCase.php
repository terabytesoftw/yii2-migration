<?php

declare(strict_types=1);

namespace bizley\migration\tests\mysql;

use bizley\migration\tests\DbTestCase;

abstract class MysqlDbTestCase extends DbTestCase
{
    public static function setUpBeforeClass() // BC declaration
    {
        static::$database = static::getParam('mysql');
        parent::setUpBeforeClass();
    }
}
