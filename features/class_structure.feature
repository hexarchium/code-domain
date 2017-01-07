Feature: Class structure

  Scenario: Create class structure
    When I create class "Test\Foo"
    Then I should see new created class "Test\Foo"