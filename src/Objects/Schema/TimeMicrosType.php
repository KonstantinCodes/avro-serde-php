<?php

declare(strict_types=1);

namespace FlixTech\AvroSerializer\Objects\Schema;

class TimeMicrosType extends LogicalType
{
    public function __construct()
    {
        parent::__construct(TypeName::TIME_MICROS, TypeName::LONG);
    }
}
