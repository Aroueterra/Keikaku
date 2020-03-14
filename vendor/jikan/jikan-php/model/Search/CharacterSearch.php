<?php

namespace JikanPHP\Model\Search;

/**
 * Class CharacterSearch
 *
 * @package JikanPHP\Model\Search\Search
 */
class CharacterSearch
{

    /**
     * @var CharacterSearchListItem[]
     */
    private $results;

    /**
     * @var int
     */
    private $lastPage;

    /**
     * @return CharacterSearchListItem[]
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @return int
     */
    public function getLastPage(): int
    {
        return $this->lastPage;
    }
}
