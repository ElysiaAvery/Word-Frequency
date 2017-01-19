# Word Frequency
A web app that returns how frequently a word appears in a given string.

#### By _[**Elysia Avery Nason**](https://github.com/elysiaavery)_

## Specs

Input Behavior | Input | Output
---------------|-------|--------
Lowercase input | HELLO | hello
Remove punctuation | Hey. | hey
Can match a word | "She ran up hill." "ran" | "ran" === "ran"
Increases a counter by 1 for every time the searched word is found in a sentence | "She smiled and she laughed." "she" | She appears 2 times.

## Setup/Installation Requirements

* In your terminal window:
  * `$ git clone https://github.com/ElysiaAvery/Word-Frequency` to your Desktop.
* navigate to the project directory: `$ cd Word-Frequency`
* In a new terminal window enter: `$ composer install`
* In a separate terminal window, navigate to the web folder: `$ cd web`
  * `$ php -S localhost:8000`
* Navigate to localhost:8000 in the browser of your choice. (This app was tested in Chrome).

## Known Bugs

None

## Support and contact details

Elysia Nason: _elysia.avery@gmail.com_

## Technologies Used

_PHP,
Silex,
Twig,
PHPUnit_

### License

This webpage is licensed under the GPL license.

Copyright &copy; 2017 **_Elysia Avery Nason_**
