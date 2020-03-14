<?php

namespace Jikan\Model\Manga;

/**
 * Class Manga
 *
 * @package Jikan\Model
 */

use Jikan\Model\Common\DateRange;
use Jikan\Model\Common\MalUrl;
use Jikan\Parser\Manga\MangaParser;

/**
 * Class Manga
 *
 * @package Jikan\Model
 */
class Manga
{

    /**
     * @var int
     */
    private $malId;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string|null
     */
    private $titleEnglish;

    /**
     * @var string[]
     */
    private $titleSynonyms;

    /**
     * @var string|null
     */
    private $titleJapanese;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var int|null
     */
    private $volumes;

    /**
     * @var int|null
     */
    private $chapters;

    /**
     * @var bool
     */
    private $publishing = false;

    /**
     * @var DateRange
     */
    private $published;

    /**
     * @var int|null
     */
    private $rank;

    /**
     * @var float|null
     */
    private $score;

    /**
     * @var int|null
     */
    private $scoredBy;

    /**
     * @var int|null
     */
    private $popularity;

    /**
     * @var int|null
     */
    private $members;

    /**
     * @var int|null
     */
    private $favorites;

    /**
     * @var string|null
     */
    private $synopsis;

    /**
     * @var string|null
     */
    private $background;

    /**
     * @var MalUrl[]
     */
    private $related = [];

    /**
     * @var MalUrl[]
     */
    private $genres = [];

    /**
     * @var MalUrl[]
     */
    private $authors = [];

    /**
     * @var MalUrl[]
     */
    private $serializations = [];


    /**
     * Create an instance from an MangaParser parser
     *
     * @param MangaParser $parser
     *
     * @return Manga
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     */
    public static function fromParser(MangaParser $parser): Manga
    {
        $instance = new self();

        $instance->title = $parser->getMangaTitle();
        $instance->url = $parser->getMangaURL();
        $instance->malId = $parser->getMangaId();
        $instance->imageUrl = $parser->getMangaImageURL();
        $instance->synopsis = $parser->getMangaSynopsis();
        $instance->titleEnglish = $parser->getMangaTitleEnglish();
        $instance->titleSynonyms = $parser->getMangaTitleSynonyms();
        $instance->titleJapanese = $parser->getMangaTitleJapanese();
        $instance->type = $parser->getMangaType();
        $instance->chapters = $parser->getMangaChapters();
        $instance->volumes = $parser->getMangaVolumes();
        $instance->status = $parser->getMangaStatus();
        $instance->publishing = $instance->status === 'Publishing';
        $instance->published = $parser->getPublished();
        $instance->genres = $parser->getMangaGenre();
        $instance->score = $parser->getMangaScore();
        $instance->scoredBy = $parser->getMangaScoredBy();
        $instance->rank = $parser->getMangaRank();
        $instance->popularity = $parser->getMangaPopularity();
        $instance->members = $parser->getMangaMembers();
        $instance->favorites = $parser->getMangaFavorites();
        $instance->related = $parser->getMangaRelated();
        $instance->background = $parser->getMangaBackground();
        $instance->authors = $parser->getMangaAuthors();
        $instance->serializations = $parser->getMangaSerialization();

        return $instance;
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
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getTitleEnglish(): ?string
    {
        return $this->titleEnglish;
    }

    /**
     * @return string[]
     */
    public function getTitleSynonyms(): array
    {
        return $this->titleSynonyms;
    }

    /**
     * @return string|null
     */
    public function getTitleJapanese(): ?string
    {
        return $this->titleJapanese;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return int|null
     */
    public function getVolumes(): ?int
    {
        return $this->volumes;
    }

    /**
     * @return int|null
     */
    public function getChapters(): ?int
    {
        return $this->chapters;
    }

    /**
     * @return bool
     */
    public function isPublishing(): bool
    {
        return $this->publishing;
    }

    /**
     * @return DateRange
     */
    public function getPublished(): DateRange
    {
        return $this->published;
    }

    /**
     * @return int|null
     */
    public function getRank(): ?int
    {
        return $this->rank;
    }

    /**
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->score;
    }

    /**
     * @return int|null
     */
    public function getScoredBy(): ?int
    {
        return $this->scoredBy;
    }

    /**
     * @return int|null
     */
    public function getPopularity(): ?int
    {
        return $this->popularity;
    }

    /**
     * @return int|null
     */
    public function getMembers(): ?int
    {
        return $this->members;
    }

    /**
     * @return int|null
     */
    public function getFavorites(): ?int
    {
        return $this->favorites;
    }

    /**
     * @return string|null
     */
    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    /**
     * @return string|null
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    /**
     * @return MalUrl[]
     */
    public function getRelated(): array
    {
        return $this->related;
    }

    /**
     * @return MalUrl[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @return MalUrl[]
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }

    /**
     * @return MalUrl[]
     */
    public function getSerializations(): array
    {
        return $this->serializations;
    }
}
