Feature: Ping feature
    Test un ping sur une adresse 

    Scenario: Testing ping 
        When I add "Content-Type" header equal to "application/json"         
        And  I add "Accept" header equal to "application/json"                
        And  I send a "GET" request to "/ping"                                
        Then the response status code should be 200                          
        And  the response should be in JSON                                   
        And  the header "Content-Type" should be equal to "application/json"  
        Then the  should be equal to "pong"
        Then the response should be equal to:
            """
            pong
            """
