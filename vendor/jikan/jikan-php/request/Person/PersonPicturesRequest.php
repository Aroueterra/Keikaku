<?php

namespace JikanPHP\Request\Person;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class PersonPicturesRequest
 *
 * @package JikanPHP\Request
 */
class PersonPicturesRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * PersonPicturesRequest constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/person/%d/pictures', $this->id);
    }
}
