<?php


class FirstCest
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
     $I->amOnPage('/?aDateRange%5Barr%5D=2017-08-06&aDateRange%5Bdep%5D=2017-08-07&iPathId=38715&iGeoDistanceItem=0&aCategoryRange=0%2C1%2C2%2C3%2C4%2C5&aOverallLiking=1%2C2%2C3%2C4%2C5&sOrderBy=relevance%20desc&iRoomType=7&cpt=3871503&iViewType=0&bIsSeoPage=false&bIsSitemap=false&miu=f7rdGGWoPHgY&');
     //$I->see('Pesquisar');
     //$I->fillField(' .horus__querytext ', 'London');
     //$I->click(' .horus-btn-search__label ');
     $I->click(' .btn-horus--checkin ');
     $I->see('SEG');
    }
}

