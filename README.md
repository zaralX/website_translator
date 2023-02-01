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
