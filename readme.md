# LaragonSimpleDarkHomepage

LaragonSimpleDarkHomepage is a replacement homepage for

## Installation
1. Rename the initial Laragon's `www/index.php` file to `index.old.php`
2. Download and paste this `index.php` inside your Laragon's `www` folder

## Configuration
The `index.php` has 3 PHP variables to match your server configuration:
```php
$laragon_title = $_SERVER['HTTP_HOST']; // default: localhost
$laragon_baseline = "Where everything starts."; 
$laragon_extension = '.localhost'; // virtual host extension
```

## Screenshot
![LaragonSimpleDarkHomepage responsive screenshot](../assets/screenshot.png?raw=true)

## License
This project is under the MIT License. See the [LICENSE](https://github.com/PierreLebedel/LaragonSimpleDarkHomepage/blob/main/LICENSE) file for the full license text.


