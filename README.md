# Test for Jadu

In this repo is the test for the Jadu Engineer role. The word checker has been created as a simple API
Please follow the steps below for set up.

1. Clone the repository to a location of your choice.
2. Use composer to install the project dependencies.
3. To host the application Symfony web server can be used. Please install Symfony CLI if it is not already installed on your machine.
4. After installing Symfony web server please run symfony server:start. The application will then be accessible at your local host.
5. After install and running the web server the project will have three routes that can be accessed which are as follows:
   1. /check/palindrome/{word}
   2. /check/anagram/{word}/{comparison}
   3. /check/pangram/{phrase}