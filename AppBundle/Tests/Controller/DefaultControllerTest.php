<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @author Koen Vinken <koen.vinken@wijs.be>
 */
class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains(
            'Welcome to your Symfony Micro-Framework.',
            $client->getResponse()->getContent()
        );
    }
}
