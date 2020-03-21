# field-nova-password-show-hide
Install
```php
composer require normanhuth/field-nova-password-show-hide
```

Usage
```php
use NormanHuth\PlainFieldNovaPasswordShowHide\PlainFieldNovaPasswordShowHide;
...
public function fields(Request $request)
{
    return [
        PlainFieldNovaPasswordShowHide::make('Password')->onlyOnForms();
    ];
}
```

Preview

![18_02_2019](https://thumbs.gfycat.com/DrearyImperturbableDachshund-size_restricted.gif)
