<p align="center"><a href="https://www.php.net/" target="_blank"><img src="https://www.php.net/images/logos/php-logo.svg" width="100" alt="PHP Logo"></a></p>

## About PHP Version 8.3

#### 1. json_validate() function

##### PHP < 8.3

````
$jsonString = '{"name" : "Karan"}';
$arr = json_decode($jsonString,true);
$isValid = json_last_error() === JSON_ERROR_NONE;
var_dump($isValid);
````

##### PHP=8.3

````
$jsonString = '{"name" : "Karan"}';
$isValid = json_validate($jsonString);
var_dump($isValid); // return true on correct condition false if no json data.
````

#### 2. Dynamic class constant fetch

- PHP 8.3 allows you to fetch constants with a more dynamic syntax:

##### PHP < 8.3

````
class Foo 
{
    const BAR = 'bar';
}
$name = 'BAR';
constant(Foo::class . '::' . $name);
````

##### PHP=8.3

````
class Foo 
{
    const BAR = 'bar';
}
$name = 'BAR';
Foo::{$name};
````
