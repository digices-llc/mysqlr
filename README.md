# MySQLr #

_Simple MySQL Wrapper_

- *Author:* Roderic Linguri <linguri@digices.com>
- *Version:* pre-release
- *Copyright:* 2018 Digices LLC

### Installing with Composer ###

_Include the following in the root level of your composer.json:_

```JSON
{
    "repositories": [
        {
            "url": "https://github.com/digices-llc/mysqlr",
            "type": "vcs"
        }
    ],
    "require": {
        "digices/paqure": "dev-master"
    },
    "autoload": {
        "psr-4": {
            "digices\\mysqlr\\": "src"
        }
    }
}

```
