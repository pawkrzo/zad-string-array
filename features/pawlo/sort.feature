Feature: Sortowanie

  Scenario: Sortowanie wg dlugosci slow
    Given I am on homepage
    When I follow "Sortowanie wg dlugosci slow by pawlo"
    And I fill in "Wyrazenie" with "Lubie placki"
    And I press "Sortuj"
    Then I should see "Wynik wynosi: placki - 6 Lubie -5"