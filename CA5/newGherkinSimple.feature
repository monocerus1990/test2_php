#----------------------------------
# Example of Cucumber .feature file
#----------------------------------
    
@RunWith    
Feature: Log in the system
  As a employee, I want to log in the system, so that I can use the functions to work

  Scenario Outline: Login in the system
    Given a web browser is on the our system web page
    When account name "<phrase1>" is entered 
    And password "<phrase2>" is entered
    Then results for "<result>" are shown
    
    Examples: Animals
      | phrase1   | phrase2       | result               |
      | null      | null          | Error                |
      | bo        | null          | Please enter password|
      | bo        | 1             | welcome              |
      | bo        | wrongpassword | WrongPassword        |
      | bo2       | 1             | Invalid User         |
