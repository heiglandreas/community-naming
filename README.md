# Community-Naming

Inspired by the [awesome work from moby](https://github.com/moby/moby/blob/master/pkg/namesgenerator/names-generator.go) 
I thought that the wider PHP-Community should have such a names-generator as well.

[So here it is](https://jcj7wlim4c.execute-api.us-east-2.amazonaws.com)

## Install

Well... thanks to `nifty-nils` and `jolly-jordi` you can include the library via 

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