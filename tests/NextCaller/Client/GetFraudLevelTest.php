<?php

namespace NextCaller\Test\Client;

use NextCaller\NextCallerClient;

class GetFraudLevelTest extends \PHPUnit_Framework_TestCase
{
    const JSON_RESPONSE = '{"spoofed": "unknown","fraud_risk": "medium"}';

    const PROFILE_PHONE = '2125558383';

    public function testGetFraudLevel() {
        $client = new NextCallerClient(null, null, true);
        $profile = $client->getFraudLevel(self::PROFILE_PHONE);
        $this->assertEquals($profile, json_decode(self::JSON_RESPONSE, true));
    }

}