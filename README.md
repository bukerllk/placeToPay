# placeToPay

placeToPay is a Simple implementation for  Api Place To Pay.

*Pick a name wisely: Choose a good name for the bookstore, in my case I chose placeToPay.
*Host source openly: Hosting it in an accessible code repository placeToPay is hosted in my github account.
*Autoloader friendly: Use (PSR4) [http://www.php-fig.org/psr/psr-4/] for autoload and host all the code inside a src folder.
*Distribute via Composer: That's what this book is about to create (placeToPay) so you can distribute it via composer.
*Framework agnostic: Independent of a framework
*Follow a coding style: Follow a code standard, in my case I followed PSR2. I have also used PHP Coding Standar Fixed to automate it and we have configured PHPStorm to follow the Standard.
*Write unit tests: Write unit tests of the library, in my case I have reached 100% coverage.
*DocBlock your code: Document the code. Well this one I do not know if I have fulfilled it at all ....
*Use semantic versioning: Use semantic versioning following the MAJOR.MINOR.PATCH system.
*Keep a changelog: Have a "history of changes" file.
*Use continuous integration: Use a continuous integration service to check the tests and the code standard (I have not yet done so).
*Write extensive documentation: Write documentation, at least the github README. Explain the installation requirements and how to use it.
*Include a license: Include a license.
*Welcome contributions: Help and thank the people who contribute.

#Instalation

To install this package, add and run the command below and you will get the latest version
```
add in or create file composer.json
{
  "minimum-stability": "dev",
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bukerllk/placeToPay"
    }
  ],
  "require": {
    "php": ">=5.3.3",
    "bukerllk/placeToPay": "*"
  },
  "autoload": {
    "classmap": [
      "vendor/bukerllk/placeToPay/lib/"
    ]
  }
}
run the command

  composer update
  or
  composer install

```
#Usage


```

change variables in file bukerllk/placeTopay/src/placeToPay.php

protected $wsdl = "Your wsdl";

protected $login = 'Your login';

protected $tranKey = 'Your key';

create file test

<?php

	require_once __DIR__ . '/vendor/autoload.php';

	$client = new \bukerllk\placeToPay\placeToPay();

	$banks=$client->getBankList();

	echo '<pre>';
	print_r($banks);

```
#Functions in the SDK

```

$client->getBankList()

$client->createTransaction($parameters);

$client->createTransactionMultiCredit($parameters)

$client->getTransactionInformation($parameters)

$client->getFunctions()


```







