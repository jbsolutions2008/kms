## Ash Renovations (WordPress)

| SITE  | URL                                      |
|-------|------------------------------------------|
| DEV   | https://ashrenovations.telegraphdev.com  |
| LIVE  | https://ashrenovations.com             |

### Features

* Based on [Bedrock](https://roots.io/bedrock/)
* Dependency management with [Composer](http://getcomposer.org)
* WordPress configuration with environment specific files
* Environment variables with [Dotenv](https://github.com/vlucas/phpdotenv)
* Autoloader for mu-plugins (use regular plugins as mu-plugins)
* Enhanced security (separated web root and secure passwords with [wp-password-bcrypt](https://github.com/roots/wp-password-bcrypt))

### Prerequisites

* PHP >= 7.0
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
* Node JS - [Install](https://nodejs.org/en/)

### Local Install & Build

1. Ensure that your local vhost docroot (apache/nginx document root) is set to `web`
2. Create `.env` file matching your environment details. Put this file into the root of the project. Please use `.env.example` file for reference.
3. Start terminal and navigate to project root.
4. Run `composer install`
5. Navigate to theme directory `cd web/app/themes/ash-reno`
6. Run `npm install`
7. Make style updates here: `web/app/themes/ash-reno/sass/theme/_theme.scss`
8. Add custom scripts here: `web/app/themes/ash-reno/src/js/main.js` - NOT IN INDIVIDUAL PHP FILES
9. Compile your Sass changes with Gulp by running: `gulp watch`
10. If you want to use BrowserSync, edit the proxy value at the top of `web/app/themes/ash-reno/gulpconfig.json` (`"proxy": "http://wp-starter.test/",`) so your browser will auto reload on update if you run `gulp watch-bs` instead of `gulp watch`
11. Read theme documentation here for more tips [Understrap.github.io](https://understrap.github.io/#developing)

### Updating WordPress Core and Free Plugins

Both WordPres Core and most non-premium plugins are tracked by composer so updates should be done in the root `composer.json` file. To update:

1. Confirm the latest version is available on [WP Packagist](https://wpackagist.org/)
2. Update `composer.json` with new packagist requirements
3. Run `composer update` to get new versions which will update `composer.lock`
4. Commit the updated composer files to the repo

### Adding External JS, CSS & Font Files

1. Add any externally hosted JS & CSS assets to the `web/app/themes/inc/enqueue.php` file
2. Any Google Fonts should be includes as `@import` statements within `web/app/themes/sass/theme.scss` -- see example on line 19

### Custom Post Types

1. Add new CPT references here: `web/app/mu-plugins/tele-custom/index.php`
2. Add new CPT defintion file here: `web/app/mu-plugins/tele-custom/cpt/cpt-[name].php`

### Deploying

1. A Jenkins project will be set up for this project

### API Keys

1. Email sends are setup through a SendGrid API Key and utilize the WP Sendmail plugin. You will need to request a client SendGrid account.
2. If the site includes maps or geocoding, a Google Maps/Geocode API Key will need to be set up.

### Updating Naming

This starter uses generic text in several places both for descriptions and file names (such as theme name). This needs to be updated to match project naming. Some known replacements:

1. `.gitignore` : update "tele-start" theme name to actual theme name
2. `composer.json` : update project name, details, URL, etc
3. `.env (from .env.example)`: update WP_HOME global
4. `web/app/themes/ash-reno/gulpconfig.json`: update proxy to local test env
