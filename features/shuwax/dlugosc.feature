Feature: Dlugosc

  Scenario: Dlugosc slow
    Given I am on homepage
    When I follow "Dlugosc slow by shuwax"
    And I fill in "Text" with "ja tez tata"
    And I press "Sortuj"
    Then I should see "tata - 4 tez - 3 ja - 2 "