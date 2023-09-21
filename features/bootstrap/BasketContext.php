<?php

use App\Entity\Basket;
use App\Entity\Product;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Behat\Tester\Exception\PendingException;

/**
 * Defines application features from the specific context.
 */
class BasketContext implements Context
{

    /**
     * @Given An empty basket
     */
    public function anEmptyBasket()
    {
        $this->basket = new Basket() ;

        // throw new PendingException();
    }

    /**
     * @Then the basket price is :price $
     */
    public function theBasketPriceIs($price)
    {
        if( $this->basket->getPrice() == $price ) {
            throw new Exception("Le prix ne correspond pas.");
        };
        
    }

    /**
     * @Given A product costing :price $ id added to the basket
     */
    public function aProductCostingIdAddedToTheBasket($price)
    {
        $product = new Product( $price) ;

        $this->basket->add($product) ;

        throw new PendingException();
    }
}
