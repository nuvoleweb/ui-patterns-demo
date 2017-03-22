# UI Patterns demo site

Demo site for the [UI Patterns](https://www.drupal.org/project/ui_patterns) module based on
[Composer template for Drupal projects](https://github.com/drupal-composer/drupal-project).

## Usage

First you need to [install composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx), after that
clone the project and run:

```
composer install
cd web
drush si config_installer -y --db-url=mysql://user:pass@localhost/db config_installer_sync_configure_form.sync_directory=../config/sync
```
