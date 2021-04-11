## Contents

This project contains a skeleton for PHP development, includin:
- PHP 8
    - Docker + Docker-compose base environment (based on php-alpine)
- XDebug 3
- Development tools: PHPUnit, php-cs-fixer, phpmd (including configurations)

Additional resources:
- composer script to run composer command inside running containers (lifting them up with docker-compose)
- Shared .idea (PhpStorm) resources:
    - Inspection profile, including PHP EA extension configuration
    - Code Templates for source code and tests, updated with strict_types=1 and other configurations
    - Code Style 

## Setup

The prerequisite to run the project is to have Docker and docker-compose installed. After checking out, you can run:
```
./composer install
```

### Tests and tools

The tools I used under developed are unified on [composer scripts](composer.json)
Relevant pre-commit checks can be run with:
```
./composer pre-commit
```

The commands included in the pre-commit script include the following:

- Tests were written and run with PHP Unit 9.
```
./composer composer phpunit
./composer composer phpunit-coverage
```

- Code style can be normalized before commit using [php-cs-fixer rules](.php_cs.dist):
```
./composer composer php-cs-fixer
```

- For clean code, code size and other checks, use [phpmd rules](phpmd-ruleset.xml):
```
./composer composer phpmd
```

