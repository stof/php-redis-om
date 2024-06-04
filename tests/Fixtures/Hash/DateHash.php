<?php

declare(strict_types=1);

namespace Talleu\RedisOm\Tests\Fixtures\Hash;

use Talleu\RedisOm\Om\Mapping as RedisOm;
use Talleu\RedisOm\Tests\Fixtures\AbstractDates;

#[RedisOm\Entity(options: ['host' => 'redis'])]
class DateHash extends AbstractDates
{
}
