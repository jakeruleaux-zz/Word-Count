Word Count

Word Count App, 07/07/17

By Jacob Ruleaux

Description

The Word Count App allows a user to enter a word and then a phrase, sentence, paragraph, etc. The program will count the frequency of the word entered in the phrase, etc. The program will return to the user the number of times the word entered occurs in the entered phrase, etc.

Specs for Word Count App


* The program will allow a user to enter a word and a phrase, sentence, paragraph, etc. The program will compare the word entered to the phrase, etc. and count the frequency of occurrences of the word in the phrase, etc. The program will return a numerical value for the amount of times the word occurs in the phrase, etc.

The program will:

* The program will identify an inputted search word and compare it to an inputted phrase, sentence, etc. If there is no match of the search word in the phrase an error will occur.
  * inputted search word: 'word'
  * inputted phrase: 'these are plums'
  * output: error
* The program will identify a single occurrence of an inputted search word in an inputted phrase, etc. and return a value of one.
  * inputted search word: 'word'
  * inputted phrase: 'this is a word'
  * output: '1'  
* The program will count the frequency of the inputted search word in inputted phrase, etc.
  * inputted search word: 'word'
  * inputted phrase: 'this is a word and this is a word too'
  * output: '2'
* The program will ignore fragments of words that are similar to the inputted search word within the phrase and count only true matches.
  * inputted search word: 'word'
  * input_phrase: 'these wordy word are almost world wordiness of word'
  * output: '1'



Setup/Installation Requirements

* Open GitHub site on your browser:                  https://github.com/jakeruleaux/Word-Count
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
* type 'cd desktop' and press enter.
* type 'git clone' then copy the repository link and press enter.
* type 'cd php-address-book' to access the path on your computer
* type 'php -S localhost:8000' to open local server.
* in your Address Bar type 'localhost:8000/Word-Count' to view app

Known Bugs

No known bugs in current version.

Support and contact details

Feel free to contact the author with questions or concerns at jakeruleaux@hotmail.com

Technologies Used

The application relies on PHP, Silex, Twig with some Bootstrap for styling and basic HTML for display.

License

MIT

Copyright (c) 2017 Jacob Ruleaux
