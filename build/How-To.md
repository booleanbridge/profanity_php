## Steps to pre setup the language files and pre compute as many things as possible.

Follow these instructions if there is a new commit in the [List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words_V2](https://github.com/LDNOOBWV2/List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words_V2.git):

- Run the [step_1.php](https://github.com/friendshipking/profanity_php/blob/main/build/step_1.php) to create the `languages` directory and files.
- Run the [step_2.php](https://github.com/friendshipking/profanity_php/blob/main/build/step_2.php) to create the `countryToSupportedLanguageCodes` array.
- Run the [step_3.php](https://github.com/friendshipking/profanity_php/blob/main/build/step_3.php) to list all the three-letter codes that are not added to the `countryToSupportedLanguageCodes` array. If there is no output, you are good to go. Otherwise:
- Use the AI prompt inside [three_letter_codes.php](https://github.com/friendshipking/profanity_php/blob/main/build/three_letter_codes.php) file to generate the array. Replace the existing array in the file. If Bing is unable to get the language, use this [link](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) to get the language code. After adding the array, run [step_2.php](https://github.com/friendshipking/profanity_php/blob/main/build/step_2.php) again.
- All required files are successfully generated.
- Test the setup by running the [test.php](https://github.com/friendshipking/profanity_php/blob/main/test.php) file.
- Commit the changes and create a pull request to the main repo. This ensures that the library is up to date with the latest changes in [List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words_V2](https://github.com/LDNOOBWV2/List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words_V2.git).
