Feature: Statystyka powtórzeń wyrazów

  Scenario: Statystyka powtórzeń wyrazów
    Given I am on homepage
    When I follow "kustra88 - zadanie 1"
    And I fill in "Str" with "piotrek piotrek kustra piotrek"
    And I press "Przetwórz"
    Then I should see "piotrek - 3; kustra - 1; "