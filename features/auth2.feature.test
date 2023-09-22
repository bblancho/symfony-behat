Feature: Authentification
    Test de connexion à son compte
    
        
    Scenario: Login in successfully to my website
        Given I login as "my@email.com" with password "my_password"
        Then I should see "Successfully logged in"

    Scenario: Attempt to login with invalid credentials
        Given I login as "my@email.com" with password "not_my_password"
        Then I should see "Login failed"