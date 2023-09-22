Feature: Google
    Test de connexion à son compte
 
    Scenario: homepage
        Given I am on the Homepage
        Then  I should see "Recherche Google"

    
    Scenario: Search
        Given I am on the homepage
        When  I fill "APjFqb" with "maxifoot"
        Then I should see "https://www.google.fr/"