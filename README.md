# PlaceHolderImage
 
```php
<?php
require 'vendor/autoload.php';

$params = [
	'size' => '200x200.png',
	'background' => '000',
	'text_color' => 'fff',
	'text' => 'Bella questa libreria'
];
$link_image = PlaceHolderImage\PlaceHolderImage::PlaceImage ($params);
echo $link_image;
```
