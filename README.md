

Installation
---------------

### Requirements

`_s` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'alpha'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `alpha_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: alpha` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `alpha-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `ALPHA_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_s.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

To start using all the tools that come with `_s`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

### Available CLI commands

`_s` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!

If someone else needs to add more ACF fields. By default, "Custom Fields" menu is hidden (for live/dev sites). 
And all field configs are loaded from PHP files. On the local environment, please add to wp-config.php:

define( 'ACF_SHOW_ADMIN', true ); // Will display "Custom Fields" menu in the admin dashboard
define( 'ACF_FROM_DB', true ); // Will use custom fields from the database instead of files (dynamically)

To import/export ACF between JSON/PHP to Database, use wp cli commands:
wp acf import
wp acf export

First will load all fields configs from JSON files into database (and you will be able to edit/add/delete fields). 
Second command will save fields config to JSON/PHP (you can commit them to Git, and fields will be loaded from files on live/dev site)

To compile SASS into theme style.css, refer to npm commands from /themes/alpha/package.json , and not forget to run npm install in the beginning of development. (edited) 


## Deploying a new version
The parent theme can be deployed using a combination of branch name and version number. These are specified in the style.css file. The parent theme is version controlled in Github and in Azure. Azure is our canonical repo and github is just used for deployments/versioning. The git-updater plugin uses the github url to look for updates.
```
Primary Branch: pre-release
Version: 1.0.1
```
The primary branch should match the environment you want to deploy to. 

```
main --> production
pre-release --> staging
develop --> development
```

Ensure your branch name matches the right environment - if you push to main, every installation linking to this in production will receive that update so take your time - if you dont know what you are doing - then dont touch it.

An update in any environment is triggered by the version number in the style.css file under the `Version` title to be higher in the repo than in the WordPress site. if it is an update will be triggered.

To perform an update:

1. Bump the version number in style.scss, run `npm run build` and commit your changes to the Azure repo.  
2. merge into pre-release and tag the branch with the version number.
3. ensure the github repo is added as a new remote `git remote add deploy git@github.com:alpha-global/alpha-marketing-theme.git`
4. push the changes to github git push deploy {pre-release or another branch name}
5. **always** ensure the branch name matches the target branch in style.css