Feature: Membership
  In order to give privileges to authenticated users
  As an Administrator
  I need authentication and registration for users

  Scenario: Registration new user
    Given I am on Register page
    Then I should be on "register"
    And I should see "Name"
    Then I fill name with "John"
    And I fill email with "john@foobar.com"