Feature: Authentification
    Test de connexion à son compte

    Scenario: Login in successfully to my website
        When I am on "/login"
        And I fill in "email" with "my@email.com"
        And I fill in "password" with "my_password"
        And I press "Login"
        Then I should see "Successfully logged in"

    Scenario: Attempt to login with invalid credentials
        When I am on "/login"
        And I fill in "email" with "my@email.com"
        And I fill in "password" with "not_my_password"
        And I press "Login"
        Then I should see "Login failed"