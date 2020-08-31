# Community-Naming

Inspired by the [awesome work from moby](https://github.com/moby/moby/blob/master/pkg/namesgenerator/names-generator.go) 
I thought that the wider PHP-Community should have such a names-generator as well.

So here it is

## Install

Well... thanks to `amazing-aderman` and `brilliant-boggiano` you can include the librasry via 

```bash
composer require org_heigl/community-names
```

## Usage

```php
use Org_Heigl\CommunityNaming\Generator;

echo Generator::generate();
// Something like emerald-evans ;-)
```

## Thanks

Thanks to [Damien Seguy](https://twitter.com/faguo) and his implementation in exakat!