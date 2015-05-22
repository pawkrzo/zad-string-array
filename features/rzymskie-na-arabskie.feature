Feature: Konwersja

  Scenario: Rzymskie na arabskie
    Given I am on homepage
    When I follow "Rzymskie na arabskie by annabiala94"
    And I fill in "Podaj liczbę" with "I"
    And I press "Przetwórz"
    Then I should see "Wynik: 1"