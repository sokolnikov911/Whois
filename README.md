Whois, 'whois' command parser for PHP
=====================================


## How to use


For example for obtaining NetName of IP address:

```php
$whois = new Whois('8.8.8.8');
$answer = $whois->getProperty('netname');
print $answer; // LVLT-GOGL-8-8-8
```

Or, for obtaining 'Admin Email' of domain:

```php
$whois = new Whois('8.8.8.8');
$answer = $whois->getProperty('admin email');
print $answer; // dns-admin@google.com
```

All properties should be in lowercase. 


## Installing Whois


```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of Whois

```bash
php composer.phar require sokolnikov911/whois
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

You can then later update Whois using composer:

 ```bash
composer.phar update
 ```