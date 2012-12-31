# Working examples for the StrokerForm module

This module provides some examples for the [StrokerForm module](https://github.com/bramstroker/zf2-form)

## Requirements
[Zend Framework 2](http://www.github.com/zendframework/zf2)

## Installation

Installation of this module uses composer. For composer documentation, please refer to
[getcomposer.org](http://getcomposer.org/).

#### Installation steps

  1. `cd my/project/directory`
  2. create or edit a `composer.json` file with following contents (minimum stability is required since the module still has
     frequent updates):

     ```json
     {
         "minimum-stability": "dev",
         "require": {
             "stroker/form-sandbox": "*"
         }
     }
     ```
  3. run `php composer.phar install`
  4. open `my/project/directory/config/application.config.php` and add `StrokerForm`, `StrokerFormSandbox` and `DluTwBootstrap` to your `modules`
