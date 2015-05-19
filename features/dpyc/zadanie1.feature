Feature: Statystyka powtórzeń wyrazów

  Scenario: Statystyka powtórzeń wyrazów
    Given I am on homepage
    When I follow "Zadanie 1 by dpyc"
    And I fill in "Str" with "damian ma kota damian ma"
    And I press "Przetwórz"
    Then I should see "damian - 2; ma - 2; kota - 1; "