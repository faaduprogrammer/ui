Feature: Modal
  Testing modal view

  Scenario:
    Given I am on "interactive/modal.php"
    And I press button "Open Lorem Ipsum"
    And wait for callback
    Then Modal is open with text "Showing lorem ipsum"