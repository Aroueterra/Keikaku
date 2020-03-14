<?php

namespace Jikan\Parser\Club;

use Jikan\Model\Club\UserList;
use Jikan\Model\Club\UserProfile;
use Jikan\Parser\ParserInterface;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Class UserListParser
 *
 * @package Jikan\Parser\Club
 */
class UserListParser implements ParserInterface
{

    /**
     * @var Crawler
     */
    private $crawler;

    /**
     * CharacterSearchParser constructor.
     *
     * @param Crawler $crawler
     */
    public function __construct(Crawler $crawler)
    {
        $this->crawler = $crawler;
    }

    /**
     * Return the model
     */
    public function getModel(): UserList
    {
        return UserList::fromParser($this);
    }

    /**
     * @return UserProfile[]
     */
    public function getResults(): array
    {
        return $this->crawler
            ->filterXPath('//*[@id="content"]/table/tr/td')
            ->each(
                function (Crawler $crawler) {
                    return (new UserProfileParser($crawler))->getModel();
                }
            );
    }
}
