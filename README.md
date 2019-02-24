# Slug
Converts easily a string to a slug.
## 1. Install the package via Composer:

```
composer require oukhennicheabdelkrim/slug
````

## 2. Usage
### 2.1. Simple usage

```php
<?php

include 'vendor/autoload.php';

use  oukhennicheabdelkrim\slug\Slug;

$title = 'my title';
$titleId = 3;

$mySlug = Slug::getSlug($title); // my-title

$mySlug = Slug::getSlug($title,$titleId); // my-title-3

```
## 2.2. Configuration

Configuration was designed to be as flexible as possible,you can change the delimiter and position of id in the configuration class ```oukhennicheabdelkrim\slug\Conf```.

### 2.2.1. Example of configuration:

```php

class Conf
{
    /**
     * string Delimiter
     */
    const DELIMITER = '.';
    /**
     * string position of id (right or left)
     */
    const ID_POSITION = 'left';
}
```

```php
<?php

include 'vendor/autoload.php';

use  oukhennicheabdelkrim\slug\Slug;

$title = 'my title';
$titleId = 3;

$mySlug = Slug::getSlug($title); // my.title

$mySlug = Slug::getSlug($title,$titleId); // 3.my.title
```


