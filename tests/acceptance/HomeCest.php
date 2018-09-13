<?php


class HomeCest
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
        $I->wantTo('test our homepage');
        $I->lookForwardTo('see our slogan and an image of us');
        $I->amOnPage('/');
        $I->see('Wir machen Digitalisierung.');
    }

//    public function tryToTestContactForm(AcceptanceTester $I)
//    {
//        $I->wantToTest('our contact form');
//        $I->see('JETZT KONTAKT AUFNEHMEN');
//        $I->fillField('et_pb_contact_name_1', 'Tobias Schifftner');
//        $I->fillField('et_pb_contact_email_1', 'hallo@ambimax.de');
//        $I->fillField('et_pb_contact_unternehmen_1', 'ambimax');
//        $I->fillField('et_pb_contact_message_1', 'Hallo, dies ist eine Email von einem automatisierten Test.');
//        $I->click('Senden');
//    }
}
