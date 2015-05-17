Feature: ZadaniaPHP

  Scenario: ShortcutFurtakM
    Given I am on homepage
    When I follow "Shortcut by furtakm"
    And I fill in "Words" with "Lorem Ipsum"
    And I fill in "Lenght" with "5"
    And I press "Result"
    Then I should see "Lorem"
