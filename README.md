# Json
 A PHP Library for Modify JSON

[View on Packagist](https://packagist.org/packages/dinodev/json)

## How to Use
Namespace: `DinoDev\Json\Classes`

Use: `DinoDev\Json\Classes\Json`

### Get JSON File
```php
$Json = new Json();
$Json->getJson(__DIR__ . "/File.json"); //It will Return A Array of Json, or Error.
```

### Write JSON File
```php
$Json = new Json();
$Json->writeJson(__DIR__ . "/File.json", ["New JSON File" => "It's Working"]); //Will Subscribe File.Json to the Array
```
