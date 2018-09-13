<?php


class GoogleTestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantToTest('search for ambimax');
        $I->amOnUrl('https://www.google.de');
        $I->seeElement('input[name=q]');
        $I->fillField('input[name=q]', 'ambimax');
        $I->pressKey('input[name=q]',WebDriverKeys::ENTER);
        $I->see('www.ambimax.de');
        $I->see('ambimax® GmbH');
        $I->see('Konrad-Zuse-Str.');
    }
}
