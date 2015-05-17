Feature: Sortowanie

  Scenario: Sortowanie wg dlugosci slow
    Given I am on homepage
    When I follow "Sortowanie wg dlugosci slow by pawlo"
    And I fill in "Wyrazenie" with "kurczak ryz i kreatyna"
    And I press "Sortuj"
    Then I should see "Wynik wynosi: kreatyna - 8 kurczak - 7 ryz - 3 i - 1 "