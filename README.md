# placeToPay

placeToPay is a Simple implementation for  Api Place To Pay.

#Instalation

To install this package, add and run the command below and you will get the latest version
```
add in composer.json

   "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bukerllk/placeToPay"
    }
  ],
  "autoload": {
	"classmap": [
	  "vendor/bukerllk/placeToPay/lib/"
	]
  }

run the command

  composer require bukerllk/placeToPay

  composer update

```

```

#Functions in the SDK

```
<?php

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


```


```
<?php

require_once __DIR__ . '/vendor/autoload.php';

$cliente = new \bukerllk\placeToPay\placeToPay();

$p2p=$cliente->getBankList();

print_r($p2p1);




