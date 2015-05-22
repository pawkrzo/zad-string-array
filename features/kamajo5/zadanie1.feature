Feature: Statystyka powtórzeń wyrazów

  Scenario: Statystyka powtórzeń wyrazów
    Given I am on homepage
    When I follow "kamajo5 - zadanie 1"
    And I fill in "Str" with "kamil kamil jonaszko kamil"
    And I press "Przetwórz"
    Then I should see "kamil - 3; jonaszko - 1; " 
