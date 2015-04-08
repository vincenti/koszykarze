Feature: Web pages

  Scenario: James
    Given I am on homepage
    When I follow "James"
    Then I should see "Lebron James"