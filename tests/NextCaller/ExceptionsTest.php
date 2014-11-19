<?php

namespace NextCaller\Test;

use NextCaller\NextCallerClient;

class ExceptionsTest extends \PHPUnit_Framework_TestCase
{

    const PROFILE_ID = '97d949a413f4ea8b85e9586e1ERROR';

    public function testProfileArray() {
        $client = new NextCallerClient(null, null);
        try {
            $client->getProfile(self::PROFILE_ID);
        } catch (\Guzzle\Http\Exception\ClientErrorResponseException $expected) {
            $this->assertEquals(404,$expected->getResponse()->getStatusCode());
            return;
        }

        $this->fail('An expected exception has not been raised.');
    }

}