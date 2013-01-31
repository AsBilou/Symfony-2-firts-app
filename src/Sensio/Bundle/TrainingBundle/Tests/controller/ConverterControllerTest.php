<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bilou
 * Date: 31/01/13
 * Time: 11:08
 * To change this template use File | Settings | File Templates.
 */

namespace Sensio\Bundle\TrainingBundle\Test\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConverterControllerTest extends WebTestCase{
    public function testIndex(){

        $client = static::createClient();

        $crawler = $client->request('GET','/convert/10/fahrenheit.xml');

        $this->assertTrue($crawler->filter('celsius:contains("10")')->count()>0);
    }
}