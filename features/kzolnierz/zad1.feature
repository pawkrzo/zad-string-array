Feature: Statystyka powtorzen wyrazow

  Scenario: Statystyka powtorzen wyrazow
    Given I am on homepage
    When I follow "Statystyka powtorzen wyrazow by kzolnierz"
    And I fill in "Str" with "kici kici mial mial mial"
    And I press "Przetwórz"
    Then I should see "kici - 2; mial - 3; "