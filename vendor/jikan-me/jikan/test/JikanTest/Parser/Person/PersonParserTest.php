<?php

namespace JikanTest\Parser\Person;

use PHPUnit\Framework\TestCase;

/**
 * Class PersonParserTest
 */
class PersonParserTest extends TestCase
{
    /**
     * @var \Jikan\Parser\Person\PersonParser
     */
    private $parser;

    public function setUp()
    {
        $request = new \Jikan\Request\Person\PersonRequest(99);
        $client = new \Goutte\Client();
        $crawler = $client->request('GET', $request->getPath());
        $this->parser = new \Jikan\Parser\Person\PersonParser($crawler);
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_mal_id()
    {
        self::assertEquals(99, $this->parser->getPersonId());
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_Person_url()
    {
        self::assertEquals('https://myanimelist.net/people/99/Miyuki_Sawashiro', $this->parser->getPersonUrl());
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_name()
    {
        self::assertEquals('Miyuki Sawashiro', $this->parser->getPersonName());
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_given_name()
    {
        self::assertEquals('みゆき', $this->parser->getPersonGivenName());
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_family_name()
    {
        self::assertEquals('沢城', $this->parser->getPersonFamilyName());
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_about()
    {
        self::assertContains('She began her voice-acting career in 1999 and has continued her work as a seiyuu for more than a decade.\n', $this->parser->getPersonAbout());
        self::assertContains('Married on June 2, 2014, her 29th birthday.\n', $this->parser->getPersonAbout());
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_member_favorites()
    {
        self::assertEquals(26537, $this->parser->getPersonFavorites());
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_image()
    {
        self::assertEquals(
            'https://myanimelist.cdn-dena.com/images/voiceactors/1/41394.jpg',
            $this->parser->getPersonImageUrl()
        );
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_voice_acting_roles()
    {
        $voiceActingRoles = $this->parser->getPersonVoiceActingRoles();
        self::assertCount(439, $voiceActingRoles);
        self::assertContainsOnlyInstancesOf(\Jikan\Model\Person\VoiceActingRole::class, $voiceActingRoles);
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_anime_staff_positions()
    {
        $animeStaffPositions = $this->parser->getPersonAnimeStaffPositions();
        self::assertCount(42, $animeStaffPositions);
        self::assertContainsOnlyInstancesOf(\Jikan\Model\Person\AnimeStaffPosition::class, $animeStaffPositions);
    }

    /**
     * @test
     * @vcr PersonParserTest.yaml
     */
    public function it_gets_the_published_manga()
    {
        $publishedManga = $this->parser->getPersonPublishedManga();
        self::assertCount(0, $publishedManga);
    }
}
