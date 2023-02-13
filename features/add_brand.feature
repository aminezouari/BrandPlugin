@managing_brands
Feature: Adding a new brand
  In order to be able to associate products with brands
  As an Administrator
  I want to add a new brand to the shop

  Background:
    Given I am logged in as an administrator

  @ui
  Scenario: Adding a new brand
    Given I want to create a new brand
    When I name it "Diesel"
    And I set its code to "diesel"
    And I add it
    Then I should be notified that it has been successfully created
    And the brand "Diesel" should appear in the store