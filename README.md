# PHP Fake Random UK Postcode Generator

## Features
- Generate fake random UK Postcode
- That's it really


## Prerequisites/Requirements
- PHP 4 or greater


## Usage
Copy and paste the function to your PHP file and call it to return a postcode.

An integer (StyleID) can be passed as an argument for a specific Postcode Variation

```php
$Postcode = RandomUKPostcode();
// or
$Postcode = RandomUKPostcode(3);
```

| StyleID  | Variation |
| :---: | :--- |
| `0`  | AA9A 9AA  |
| `1`  | A9A 9AA  |
| `2`  | A9 9AA  |
| `3`  | A99 9AA  |
| `4`  | AA9 9AA  |
| `5`  | AA99 9AA |