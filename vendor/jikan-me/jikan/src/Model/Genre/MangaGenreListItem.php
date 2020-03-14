<?php

namespace Jikan\Model\Genre;

use Jikan\Parser\Genre\MangaGenreListItemParser;
use Jikan\Parser\Genre\MangaGenreListParser;

/**
 * Class MangaGenreListItem
 *
 * @package Jikan\Model
 */
class MangaGenreListItem
{

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $url;
    /**
     * @var int
     */
    private $count;

    /**
     * @param MangaGenreListItemParser $parser
     *
     * @return MangaGenreListItem
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public static function fromParser(MangaGenreListItemParser $parser): self
    {
        $instance = new self();

        $instance->name = $parser->getName();
        $instance->url = $parser->getUrl();
        $instance->count = $parser->getCount();

        return $instance;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
}
