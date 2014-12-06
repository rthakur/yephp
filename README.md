## Yephp

Yephp is open-sourced group of classes help developer easy to code.



## Requirements

- PHP >=5.3


## Installation

Install using composer:

Add in composer.json

```
	{
		"require": {
			 "rthakur/yephp": "dev-master"
		}
	}
```

## Code Examples In Core PHP

```php
<?php

//Call Autoload classes
include('vendor/autoload.php');

use Yephp\Helpers;
		
echo Helpers::randString(6);
?>
```


### License

Yephp is licensed under the [MIT License](http://opensource.org/licenses/MIT).


Copyright 2014 [Rajender Thakur](http://rthakur.me/)
