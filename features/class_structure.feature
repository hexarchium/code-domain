Feature: Class structure

  Scenario: Create class structure
    When I create class "Test" in namespace "Foo\"
    Then I should see new created class "Test" in namespace "Foo\"