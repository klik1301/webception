<?php
$I = new ApiGuy($scenario);
$I->wantTo('Get list cities by title LIKE "хaрь" ');
$I->sendGet('/api/getCityOblByName/%D1%85%D0%B0%D1%80');
$I->seeCurrentUrlEquals('/api/getCityOblByName/%D1%85%D0%B0%D1%80');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->canSeeResponseContainsJson(array('key' => 'kharkov', 'key' => 'kharkovskaya'
    ,'country' => 'ua'));


