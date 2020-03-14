<?php

namespace JikanPHP\Model\Top;

use JikanPHP\Model\Common\MalUrl;

/**
 * Class TopCharacter
 *
 * @package JikanPHP\Model
 */
class TopCharacter
{
    /**
     * @var int
     */
    private $malId;

    /**
     * @var int
     */
    private $rank;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string|null
     */
    private $nameKanji;

    /**
     * @var \JikanPHP\Model\Common\MalUrl[]
     */
    private $animeography;

    /**
     * @var MalUrl[]
     */
    private $mangaography;

    /**
     * @var int
     */
    private $favorites;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->getTitle();
    }

    /**
     * @return int
     */
    public function getRank(): int
    {
        return $this->rank;
    }

    /**
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string|null
     */
    public function getNameKanji(): ?string
    {
        return $this->nameKanji;
    }

    /**
     * @return \JikanPHP\Model\Common\MalUrl[]
     */
    public function getAnimeography(): array
    {
        return $this->animeography;
    }

    /**
     * @return MalUrl[]
     */
    public function getMangaography(): array
    {
        return $this->mangaography;
    }

    /**
     * @return int
     */
    public function getFavorites(): int
    {
        return $this->favorites;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}
