# placeToPay

placeToPay is a Simple implementation for  Api Place To Pay.

#Instalation

To install this package, run the command below and you will get the latest version
```
composer require bukerllk/placeToPay

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

$placeToPay =  new bukerllk\placeToPay\placeToPay();

$placeToPay->getBankLit(); // getBankLit


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

