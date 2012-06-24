<?php

namespace joindin\BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $client->followRedirects();

        $crawler = $client->request('GET', '/blog');

        $this->assertTrue($crawler->filter('html:contains("Not yet implemented")')->count() > 0);
    }
}
