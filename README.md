# Profanity PHP 🚀

[![CodeFactor](https://www.codefactor.io/repository/github/friendshipking/profanity_php/badge?style=for-the-badge)](https://www.codefactor.io/repository/github/friendshipking/profanity_php)
![GitHub License](https://img.shields.io/github/license/friendshipking/profanity_php?style=for-the-badge&color=blue)
![GitHub Repo stars](https://img.shields.io/github/stars/friendshipking/profanity_php?style=for-the-badge&logo=github)

Welcome to Profanity PHP, the vibrant library designed to keep your text sparkling clean! 🌟 This lightweight and efficient tool is your go-to solution for detecting profanity in text using a comprehensive list of naughty words from [List of Dirty, Naughty, Obscene, and Otherwise Bad Words](https://github.com/LDNOOBW/List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words.git).

## Table of Contents 📜

- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
- [Function](#function)
- [Global Variables](#global-variables)
- [Contribution](#contribution)
- [License](#license)

## Features 🌈

1. Detect profane words in a string using a comprehensive list of profane words as a Hash Table.
2. Uncover naughty phrases in a string using a comprehensive list of profane phrases. This uses the Boyer-Moore algorithm to find phrases, treating each word as a character.

## Getting Started 🚀

These instructions will help you set up the library in your project.

### Prerequisites 🛠️

Ensure you have the following installed:

- PHP 7.4 or higher
- Git

### Installation 🚚

1. Clone the repository or add it as a submodule to your project.

   ```sh
   git clone https://github.com/friendshipking/profanity_php.git
   # OR
   git submodule add https://github.com/friendshipking/profanity_php.git
   ```

2. Follow these instructions if there is a new commit in the [List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words_V2](https://github.com/LDNOOBWV2/List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words_V2.git):

   - Run the [step_1.php](https://github.com/friendshipking/profanity_php/blob/main/build/step_1.php) to create the `languages` directory and files.
   - Run the [step_2.php](https://github.com/friendshipking/profanity_php/blob/main/build/step_2.php) to create the `countryToSupportedLanguageCodes` array.
   - Run the [step_3.php](https://github.com/friendshipking/profanity_php/blob/main/build/step_3.php) to list all the three-letter codes that are not added to the `countryToSupportedLanguageCodes` array. If there is no output, you are good to go. Otherwise:
   - Use the AI prompt inside [three_letter_codes.php](https://github.com/friendshipking/profanity_php/blob/main/build/three_letter_codes.php) file to generate the array. Replace the existing array in the file. If Bing is unable to get the language, use this [link](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) to get the language code. After adding the array, run [step_2.php](https://github.com/friendshipking/profanity_php/blob/main/build/step_2.php) again.
   - All required files are successfully generated.
   - Test the setup by running the [test.php](https://github.com/friendshipking/profanity_php/blob/main/test.php) file.
   - Commit the changes and create a pull request to the main repo. This ensures that the library is up to date with the latest changes in [List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words_V2](https://github.com/LDNOOBWV2/List-of-Dirty-Naughty-Obscene-and-Otherwise-Bad-Words_V2.git).

## Usage 🛠️

Include the library in your project and let the magic begin! 🧙 Refer to the code comments for detailed information on each function.

```php
include 'profanity_php/main.php';
```

### Function ⚙️

#### `isProfanity(&$text, $detectedLanguages = [], &$exploded = [], &$explodedLength = 0, $all = false): bool`

Check if a string contains profanity.

- `$text`: The string to check. Optional, If not provided, then $exploded must be provided.
- `$detectedLanguages`: An array of detected languages. Optional. Languages are automatically detected based on the user's country (using HTTP_CF_IPCOUNTRY header from Cloudflare) , ACCEPT_LANGUAGE header if this is not set.
- `$exploded`: The exploded and cleaned string to remove punctuations and emojis. Optional. If you are already creating an exploded string, pass it to the function to avoid creating it again. If not provided, then $text must be provided.
- `$explodedLength`: The length of the exploded string. Optional. Must be provided if $exploded is provided.
- `$all`: If true, check for all available languages. Optional. When set, all the languages are checked for profanity. If false, only the languages in `$detectedLanguages` or auto-detected languages are checked.

### Global Variables 🌐

When you include this file, the following global variables are available:

1. `$supportedLanguages`: After the function `isProfanity()` is called, it will contain all the language the profanity in the text was checked for.

### Contribution 🤝

Join the community and contribute to the project by submitting issues or pull requests. Your positivity and contributions are always welcome! 🎉

## License 📜

This project is licensed under the [Creative Commons Zero v1.0 Universal](LICENSE.md) - see the [LICENSE](LICENSE.md) file for details.
