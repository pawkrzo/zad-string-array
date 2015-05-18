Feature: Sortowanie

  Scenario: Sortowanie slow
    Given I am on homepage
    When I follow "Sortowanie slow by shuwax"
    And I fill in "Text" with "ala ma ala"
    And I press "Sortuj"
    Then I should see "ala - 2 ma - 1 "