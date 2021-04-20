# SSO Boilerplate for logout workflow

Single Sign On boilerplate template to implementing SSO in Live Helper Chat. There can be many ways to do it with `simplesamlphp` it's just one of the option.

# Instructions

Download https://simplesamlphp.org project to `extension/simplesamlphp` you will have to create this folder.

Modify `.htaccess` so you can point directly to `simplesamlphp` folder
```
RewriteRule ^extension/simplesamlphp/www/module.php - [L]
RewriteRule ^extension/simplesamlphp/www/index.php - [L]
RewriteRule ^extension/simplesamlphp/www/logout.php - [L]
```

In `simplesamlphp` project config file set to something like below

```
'baseurlpath' => 'https://demo.livehelperchat/extension/simplesamlphp/www/',
```

Modify `singlesignon/modules/lhuser/logout.php` to point to correct SSO logout URL

Modify `extension/singlesignon/settings/settings.ini.php` and set a proper path to `sso_location` should be like `extension/simplesamlphp/lib/_autoload.php`