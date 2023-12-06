<?php
if (!isset($badWords) || empty($badWords)) {
    $badWords = array(
        "badWords" => array(),
        "badWordsLength" => 0,
    );
}
if (!isset($badPhrases) || empty($badPhrases)) {
    $badPhrases = array(
        "badPhrases" => array(),
        "badPhrasesLength" => 0,
    );
}
$badWords['badWords'] = array_merge_recursive($badWords['badWords'], array (
  'ಕಮ್' => true,
  'ಕಾಮ' => true,
  'ಗುದ' => true,
  'ಡಚೆ' => true,
  'ತಿಕ' => true,
  'ನರಕ' => true,
  'ಪತನ' => true,
  'ಪಬ್' => true,
  'ಫಕ್' => true,
  'ಬಟ್' => true,
  'ಕಂಟ್' => true,
  'ಕೂನ್' => true,
  'ಕೋಕ್' => true,
  'ಕೋಳಿ' => true,
  'ಟಿಟ್' => true,
  'ಡಿಕ್' => true,
  'ಡೈಕ್' => true,
  'ನಾಜಿ' => true,
  'ಪುಸಿ' => true,
  'ಪೂಪ್' => true,
  'ಫಕರ್' => true,
  'ಬಿಚ್' => true,
  'ಯೋನಿ' => true,
  'ವೃಷಣ' => true,
  'ಶಾಗ್' => true,
  'ಶಿಟ್' => true,
  'ಷೈಟ್' => true,
  'ಸಿಪಾ' => true,
  'ಸೂಳೆ' => true,
  'ಹೋರ್' => true,
  'ಅಸಹ್ಯ' => true,
  'ಉಬ್ಬು' => true,
  'ಕತ್ತೆ' => true,
  'ಕಾಮುಕ' => true,
  'ಕೊಳೆತ' => true,
  'ಚಿಂಕ್' => true,
  'ಡಿಂಕ್' => true,
  'ತಮಾಷೆ' => true,
  'ನಿಗರ್' => true,
  'ಪಿಸರ್' => true,
  'ಪೆಕರ್' => true,
  'ಮಬ್ಬು' => true,
  'ಯೋನಿಯ' => true,
  'ವಾಂಗ್' => true,
  'ವೀರ್ಯ' => true,
  'ಶಿಶ್ನ' => true,
  'ಹೊಡೆತ' => true,
  'ಅಮೇಧ್ಯ' => true,
  'ಅಶ್ಲೀಲ' => true,
  'ಉದ್ಗಾರ' => true,
  'ಕಾಕ್ಸ್' => true,
  'ಚುಚ್ಚು' => true,
  'ಡ್ಯಾಮ್' => true,
  'ಫಕಿಂಗ್' => true,
  'ಫ್ಯಾನಿ' => true,
  'ಬುಕೆಟಾ' => true,
  'ಮಂದಗತಿ' => true,
  'ಮುಷ್ಕರ' => true,
  'ಮೊನಚಾದ' => true,
  'ವಯಾಗ್ರ' => true,
  'ಶಿಟ್ಸ್' => true,
  'ಶೆಮೇಲ್' => true,
  'ಅಸೋಲೆಸ್' => true,
  'ಅಸ್ಹೋಲ್' => true,
  'ಆಶ್ಫಕರ್' => true,
  'ಒರಾಸಿಮ್' => true,
  'ಕಮ್ಶಾಟ್' => true,
  'ಗರ್ಭಪಾತ' => true,
  'ಗಾಡ್ಡಮ್' => true,
  'ಗುದನಾಳದ' => true,
  'ದುಃಖಗಾರ' => true,
  'ಪುಸಿಗಳು' => true,
  'ಬೂಬಿಗಳು' => true,
  'ಬೆಚಿಂಗ್' => true,
  'ಬೆಲೆಂಡ್' => true,
  'ಸ್ಕಾಂಕ್' => true,
  'ಅತ್ಯಾಚಾರ' => true,
  'ಅಶ್ಲೀಲತೆ' => true,
  'ಗುದದ್ವಾರ' => true,
  'ಚೆಂಡುಗಳು' => true,
  'ಜರ್ಕ್ಆಫ್' => true,
  'ನಾಯಿಫಕರ್' => true,
  'ಪಿಸ್ಸಾಫ್' => true,
  'ಪ್ರಿಕ್ಸ್' => true,
  'ಫಕಿಂಗ್ಸ್' => true,
  'ಬಾಲ್ಬಾಗ್' => true,
  'ಬಿಟ್ಚಿಸ್' => true,
  'ಬೊಲ್ಲೊಕ್' => true,
  'ಬ್ಲೋಜಾಬ್' => true,
  'ಮೃದ್ವಂಗಿ' => true,
  'ರಿಟಾರ್ಡ್' => true,
  'ಲೈಂಗಿಕತೆ' => true,
  'ಸ್ನ್ಯಾಚ್' => true,
  'ಸ್ಫೂರ್ತಿ' => true,
  'ಸ್ಮೆಗ್ಮಾ' => true,
  'ಸ್ಲಟ್ಗಳು' => true,
  'ಅತ್ಯಾಚಾರಿ' => true,
  'ಕುನಿಲ್ಲಸ್' => true,
  'ಚಂದ್ರನಾಡಿ' => true,
  'ಚಾಚುಪಟ್ಟಿ' => true,
  'ಪರಾಕಾಷ್ಠೆ' => true,
  'ಬಾಸ್ಟರ್ಡ್' => true,
  'ಮಗಆಫ್ಬಿಚ್' => true,
  'ರಕ್ತಸಿಕ್ತ' => true,
  'ಶಾಗ್ಗಿಂಗ್' => true,
  'ಸ್ಕ್ರೋಟಮ್' => true,
  'ಹಚ್ಚುವುದು' => true,
  'ಇಜಲಲೇಟಿಂಗ್' => true,
  'ದ್ವಿಧ್ರುವಿ' => true,
  'ನಿಗ್ಗರ್ಗಳು' => true,
  'ಮಾಸೋಚಿಸ್ಟ್' => true,
  'ಸ್ತನಗಳನ್ನು' => true,
  'ಅಲುಗಾಡುವಿಕೆ' => true,
  'ಹೊರಹೊಮ್ಮಿಸು' => true,
  'ತಿರುಗಿಸುವುದು' => true,
  'ನಾಶವಾಗಿದ್ದನು' => true,
  'ಪ್ರಾಣಿಜನ್ಯತೆ' => true,
  'ಮೂತ್ರಪಿಂಡಗಳು' => true,
  'ಇಷ್ಟಪಡುತ್ತಾನೆ' => true,
  'ಎಜಾಕ್ಯುಲೇಟ್ಸ್' => true,
  'ಪರಾಕಾಷ್ಠೆಗಳನ್ನು' => true,
  'ನಿರುತ್ಸಾಹಗೊಂಡಿದೆ' => true,
));

$badPhrases['badPhrases'] = array_merge_recursive($badPhrases['badPhrases'], array (
  0 => 
  array (
    'badPhrase' => 
    array (
      0 => 'x',
      1 => 'ರೇಟೆಡ್',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'x' => 1,
      'ರೇಟೆಡ್' => 0,
    ),
  ),
  1 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ಕಾರ್ಪೆಟ್',
      1 => 'ಮಂಚರ್',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ಕಾರ್ಪೆಟ್' => 1,
      'ಮಂಚರ್' => 0,
    ),
  ),
  2 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ಕುರುಚಲು',
      1 => 'ಗಿಡ',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ಕುರುಚಲು' => 1,
      'ಗಿಡ' => 0,
    ),
  ),
  3 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ಚೇಕಡಿ',
      1 => 'ಹಕ್ಕಿಗಳು',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ಚೇಕಡಿ' => 1,
      'ಹಕ್ಕಿಗಳು' => 0,
    ),
  ),
  4 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ದೇವರನ್ನು',
      1 => 'ಹಾನಿಗೊಳಗಾಯಿತು',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ದೇವರನ್ನು' => 1,
      'ಹಾನಿಗೊಳಗಾಯಿತು' => 0,
    ),
  ),
  5 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ಮಿಠಾಯಿ',
      1 => 'ಪ್ಯಾಕರ್',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ಮಿಠಾಯಿ' => 1,
      'ಪ್ಯಾಕರ್' => 0,
    ),
  ),
  6 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ಮೂತ್ರ',
      1 => 'ವಿಸರ್ಜಿಸು',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ಮೂತ್ರ' => 1,
      'ವಿಸರ್ಜಿಸು' => 0,
    ),
  ),
  7 => 
  array (
    'badPhrase' => 
    array (
      0 => 'ಹಸ್ತಮೈಥುನ',
      1 => 'ಮಾಡು',
    ),
    'badPhraseLength' => 2,
    'badPhraseArrayTable' => 
    array (
      'ಹಸ್ತಮೈಥುನ' => 1,
      'ಮಾಡು' => 0,
    ),
  ),
));
$badPhrases['badPhrasesLength'] = $badPhrases['badPhrasesLength'] + 8;

