<?php

namespace JikanPHP\Model\User;

use JikanPHP\Model\Common\MalUrl;

/**
 * Class History
 *
 * @package JikanPHP\Model
 */
class History
{

    /**
     * @var MalUrl
     */
    private $malUrl;

    /**
     * @var int
     */
    private $increment;

    /**
     * @var \DateTimeImmutable
     */
    private $date;

    /**
     * @return MalUrl
     */
    public function getMalUrl(): MalUrl
    {
        return $this->malUrl;
    }

    /**
     * @return int
     */
    public function getIncrement(): int
    {
        return $this->increment;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }
}
