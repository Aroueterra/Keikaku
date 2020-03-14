<?php

namespace JikanPHP\Model\Common;

/**
 * Class DateProp
 *
 * @package JikanPHP\Model\Common
 */
class DateProp
{
    private $day;
    private $month;
    private $year;

    /**
     * @return int|null
     */
    public function getDay() : ?int
    {
        return $this->day;
    }

    /**
     * @return int|null
     */
    public function getMonth() : ?int
    {
        return $this->month;
    }

    /**
     * @return int|null
     */
    public function getYear() : ?int
    {
        return $this->year;
    }
}
