# website_translator
This script helps translate your website on other langs.

## Installing files
Add translate.php and translates.json IN ONE FOLDER

## Setting
Open translates.json to set up translations.

What should the hierarchy look like
- translates.json
    - "2 first characters of the same language (lower case)"
        - "Element name": "Element translation"

*note that if you have multiple languages, then in each of them you need to use the same element names that are in the language in all the others, otherwise this will lead to an error: "NOT TRANSLATED". Which will be displayed instead of the translation.*


Example
```json
{
    "ru": {
        "HEADER_login": "Войти",
        "Text_on_main_page": "Привет"
    },
    "en": {
        "HEADER_login": "Login",
        "Text_on_main_page": "hello"
    }
}
```

## Using
Add this at the top of your file page (file permission should be .php).
```php
<?php include "translation/translate.php"; ?>
```

For translate use:
```php
translate("ELEMENT NAME");
```

Example
```php
<button><?php translate("HEADER_login"); ?></button>
```

## Set using langs
By default, the script supports two languages: ru, en
When a person enters from another country, the script automatically resets him to en

Note that all languages in the script only use the first 2 letters so we can look here: 
- en = English
- ru = Russian
- fr = France
- ....

And so to change, go to translate.php
And change the list of used languages on the first line
```php
$langs = ['ru', 'en'];
```

For example on this:
```php
$langs = ['ru', 'fr', 'au'];
```

Now the script supports languages "Russian, France, Australia". And now we just need to configure them in translates.json. But we know that if a person enters from another country, the translation to "en" will be used. But we don't have this language so let's change the default language which will be set when no language is added.

find it in translate.php
```php
if (!in_array($lang, $langs, FALSE)) {
    $lang = 'en';
}
```

And change $lang in your preferred language.
For example on this
```php
$lang = 'fr';
```

### Good luck
