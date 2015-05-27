Feature: Statystyka powtórzeń wyrazów

  Scenario: Statystyka powtórzeń wyrazów
    Given I am on homepage
    When I follow "pawkrzo - zadanie 1"
    And I fill in "Str" with "zdam zdam sesje zdam"
    And I press "Przetwórz"
    Then I should see "zdam - 3; sesje - 1; "