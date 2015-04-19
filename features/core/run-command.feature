Feature: As a developer who is passionate about quality
  In order to see how good my extension code is
  As a passionate developer
  I need to be able to run triple check and see a score and info about my Magento extension

  Scenario: I can get a score based on my extension I am developing
    Given I have a module located in "features/fixtures/sample-extension"
    When I run triple-check
    Then I should see that the score for this extension should be scored "4"

