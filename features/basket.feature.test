Feature: Basket
    Permet de vérifier que le panier fonctionne

    Scenario: An empty basket
        Given An empty basket
        Then the basket price is 0 $

    Scenario: Multiple products are added to the basket
        Given An empty basket
        And A product costing 5 $ id added to the basket 
        And A product costing 15 $ id added to the basket
        Then the basket price is 15 $