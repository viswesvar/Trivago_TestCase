<?php


class SecondCest
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
    $I->amOnPage('/login#/sign-up');
    //$I->fillField('input.js_tlgEmail[id=\'emailRegister\']', 'vsekar2@pentaho.com');
    //$I->fillField('input[id=\'register-pass\']', 'password');
    //$I->click('.js_tlgSignupSubmit');
    //$I->see('Obrigado por iniciar sessão!');
    //$I->fillField(' .horus__querytext ', 'Lisbon');
    //$I->click(' .horus-btn-search__label ');
    //$I->see(' .item__image--has-gallery ');
    //$I->seeImage('/path_to/image_file.jpg');
    //$I->seeElement('//img[@src="///imgec.trivago.com/itemimages/34/75/34754_v13_isq.jpeg"]');
    }
}
