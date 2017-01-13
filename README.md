# placeToPay

placeToPay is a Simple implementation for  Api Place To Pay.

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

  composer update or composer install

```
#Functions in the SDK

```

getBankList

createTransaction

createTransactionMultiCredit

getTransactionInformation

getFunctions


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







