<?php


class ThirdCest
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
     $I->amOnPage('?iPathId=3577&bDispMoreFilter=false&aDateRange%5Barr%5D=2017-08-06&aDateRange%5Bdep%5D=2017-08-07&aCategoryRange=0%2C1%2C2%2C3%2C4%2C5&iRoomType=1&sOrderBy=relevance%20desc&aPartner=&aOverallLiking=1%2C2%2C3%2C4%2C5&iOffset=0&iLimit=25&iIncludeAll=0&bTopDealsOnly=false&iViewType=0&aPriceRange%5Bfrom%5D=2328&aPriceRange%5Bto%5D=22106&aPathList=3577&aGeoCode%5Blng%5D=11.5759&aGeoCode%5Blat%5D=48.137798&bIsSeoPage=false&aHotelTestClassifier=&bSharedRooms=false&bIsSitemap=false&rp=&cpt=357703&iFilterTab=0&miu=f7rdGGWoPHgY&');
     //$I->see('Pesquisar');
     //$I->fillField(' .horus__querytext ', 'munich');
     $I->click(' .horus-btn-search__label ');
     $I->click(' .js-main ,.main-wrap ');
        }
}
