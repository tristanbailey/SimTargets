Feature: Rely on extenal calls
    In order to run this system
    As a server
    I need to be able to rely on these services

    Scenario: User db exisits 
        Given there is no "User"
        When I creat a new "User" object
        Then I should see data from the database
 
    Scenario: MongoDB has data

    Scenario: List 3874681 as 1 opportunity from the api
        Given I am on "X/api/v1/opportunities"
        When I am on "/api/v1/opportunities/3874681"
        Then I should GET "/api/v1/opportunities/3874681" and see JSON:
"""
"""
