Word Count

Word Count App, 07/07/17

By Jacob Ruleaux

Description

The Word Count App allows a user to enter a word and then a phrase, sentence, paragraph, etc. The program will count the frequency of the word entered in the phrase, etc. The program will return to the user the number of times the word entered occurs in the entered phrase, etc.

Specs for Word Count App


* The program will allow a user to enter a word and a phrase, sentence, paragraph, etc. The program will compare the word entered to the phrase, etc. and count the frequency of occurrences of the word in the phrase, etc. The program will return a numerical value for the amount of times the word occurs in the phrase, etc.

The program will:

  * Allow a user to input a search word in a Twig file;
    * input: 'word'
  * The program will convert inputted search word into lowercase to prevent case sensitivity errors;
    * input: 'Word'
    * output: 'word'
  * The program will allow the user to input a series of words to search through in a Twig file;
    * input:'These are words'
  * The program will convert inputted phrase into lowercase to prevent case sensitivity errors.
    * input: 'These Are Words'
    * output: 'these are words'
  * The program will ignore fragments of words that are similar to the inputted word (key word 'word');
     * input: 'these words, wordy, world are almost a word'
     * output: 'word'
  * The program will count the frequency of the inputted search words in inputted phrase (key word 'word');
    * input: 'These are words'
    * output: 'these are words'
  * The program will display on a separate Twig file the number of times the inputted search word occurs in the inputted phrase (key word 'word');
    * input: 'these are words'
    * output: '1'
  * The program will identify multiple instances of the same word and return a total of all words in the inputted phrase, etc. (key word 'word');
    * input: 'this is a word and here is another word'
    * output: '2'



Setup/Installation Requirements

Open GitHub site on your browser: https://github.com/jakeruleaux/Word-Count
Select the dropdown (green box) "Clone or download"
Copy the link for the GitHub repository
Open Terminal on your computer
In Terminal, perform the following steps:
type 'cd desktop' and press enter.
type 'git clone' then copy the repository link and press enter.
type 'cd php-address-book' to access the path on your computer
type 'php -S localhost:8000' to open local server.
in your Address Bar type 'localhost:8000/Word-Count' to view app

Known Bugs

No known bugs in current version.

Support and contact details

Feel free to contact the author with questions or concerns at jakeruleaux@hotmail.com

Technologies Used

The application relies on PHP, Silex, Twig with some Bootstrap for styling and basic HTML for display.

License

MIT

Copyright (c) 2017 Jacob Ruleaux
