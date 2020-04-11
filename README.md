# IpValidator
A simple ip validator using regex

## Installation
To install the package, put the following in your composer.json:

```json
"require": {
	"wheesnoza/ip-validator": "^1.0"
}
```

## How to use
- To check if the ip is valid
```php
<?php

use Wheesnoza\IpValidator\IpValidator;

$ip = new IpValidator();

$ip->check('198.162.0.1/24'); // true
$ip->check('198.162.0.1'); // true
$ip->check('198.162.0.1/33'); // false
$ip->check('2001:0db8:85a3:0000:0000:8a2e:0370:7334'); // true
```
- When you need to only check if the ip is v4 or v6 use the next code

```php
<?php

use Wheesnoza\IpValidator\IpValidator;

$ip = new IpValidator();

$ip->checkIpv4('198.162.0.1/24'); // true
$ip->checkIpv4('2001:0db8:85a3:0000:0000:8a2e:0370:7334'); // false
$ip->checkIpv6('2001:0db8:85a3:0000:0000:8a2e:0370:7334'); // true
$ip->checkIpv6('198.162.0.1/24'); // false
```