# Gravatar URL Class
[![MIT License](https://img.shields.io/badge/license-MIT-green?style=plastic "MIT License" )](./LICENSE)
[![ PHP 7.4](https://img.shields.io/badge/PHP%207.4-777bb4?labelColor=ffffff&style=plastic&logo=php 'PHP Home Page')](https://php.net)
[![ PHPUnit v9.5.20](https://img.shields.io/badge/PHPUnit%20v9.5.20-777bb4?style=plastic&logo=phpunit 'PHPUnit Documentation')](https://phpunit.de/documentation.html)

A super simple class that creates a URL for your Gravatar URL.  I created this class 
in 2019 for a much bigger project.  I was getting some code samples together and 
figured I would go ahead and post this on GitHub if anyone wants to use it. The unit 
tests are created under PHP v8.1 so nothing is broken.

## Table Of Contents

- [Installation](#installation)
  - [Clone](#clone)
  - [Zip](#zip)
- [Testing](#testing)
- [Usage/Example](#usageexample)
- [Contact Me](#contact-me)
- [License](#license)

## Installation

### Clone
Assuming you have Node and NPM you can clone this GitHub repo, go into the directory,
and install the package.json file with NPM.
```bash
git clone https://github.com/DevJonTaylor/sweaty-shell-gravatar.git
cd cd sweaty-shell-gravatar
composer i
composer dump-autoload -o psr-4
```
### Zip
Another method is to download the zip file, unzip the contents to a specific directory
and install the package.json file.

These commands that work on all three. (Windows, macOS, Linux) assuming they have
curl & tar.  Which newer version of Windows have.
```bash
curl -L -o sweaty-shell-gravatar.zip https://github.com/DevJonTaylor/sweaty-shell-gravatar/archive/refs/heads/main.zip
unzip sweaty-shell-gravatar.zip
cd cd sweaty-shell-gravatar
composer i
composer dump-autoload -o psr-4
```

## Testing

It includes two tests to ensure that it is still using the md5 hash for the email and 
creating the url.
```bash
./vender/bin/phpunit

# Below is the output
PHPUnit 9.5.20 #StandWithUkraine

Runtime:       PHP 8.1.3
Configuration: C:\Coding\PHP\sweaty-shell-gravatar\phpunit.xml

..                                                                  2 / 2 (100%)

Time: 00:00.004, Memory: 6.00 MB

OK (2 tests, 2 assertions)
```

## Usage/Example

```php
<?php

use SweatyShell\Gravatar;

include_once(__DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');

$gravatar = new Gravatar;
$gravatar->setEmail('jonnytest1101@icloud.com');

echo $gravatar; // https://www.gravatar.com/avatar/588cd72d8f5aebcbe98201e20c9af7b0
```

## Contact Me

- **Phone/SMS**: [(512)740-9784](tel:+15127409784/ 'Jon Taylor\'s Phone Number')
- **Email**: [jonnytest1101@icloud.com](mailto:jonnytest1101@icloud.com 'Jon Taylor\'s Email Address')
- **GitHub**: [@DevJonTaylor](https://www.github.com/devjontaylor 'Jon Taylor\'s GitHub Profile')
- **Portfolio**: [DevJonTaylor](https://www.devjontaylor.com 'Jon Taylor\'s Portfolio')
- **LinkedIn**: [Vue-Shell](https://www.linkedin.com/in/vue-shell 'Jon Taylor\'s LinkedIn Profile')

## License
[![MIT License](https://img.shields.io/badge/license-MIT-green?style=plastic "MIT License" )](./LICENSE)
