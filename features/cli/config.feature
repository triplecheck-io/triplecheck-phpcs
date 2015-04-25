Feature: A user can set a configuration file to change the behaviour of triple check
  As a developer using triple check from the command line
  I want to be able to configure triple check
  So that I have maximum control over my quality checks

  Scenario: A configuration file is loaded into the system
    Given I have a file located in the root of the project called 'tiplecheck.yml' with the following content:
    """
default:
    standard: ECG
"""
    When I run triple-check against "features/fixtures/ecg-error1.php"
    Then I should see that my modules score is "4"
