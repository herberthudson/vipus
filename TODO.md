# [VipUS TODO/FIXME]( https://github.com/herberthudson/VipUS#readme )

**Version:** `0.3.0`

> Web Application for salling VIPs services

* * *

## TODO

## src/Controller/ProfilesController.php

-  **TODO** `(line 47)` : improve this method to prevent user to see other profile
-  **TODO** `(line 90)` : improve this method to prevent user to edit other profile
-  **TODO** `(line 98)` : change default image and flash message if user upload image

## src/Controller/UsersController.php

-  **TODO** `(line 55)` : add last login
-  **TODO** `(line 116)` : clear password fields after fail in create account
-  **TODO** `(line 126)` : check if terms is agree
-  **TODO** `(line 129)` : add method to check link for activation of account
-  **TODO** `(line 130)` : send email to active account
-  **TODO** `(line 131)` : change flash mensage to warning about email link
-  **TODO** `(line 189)` : add reset password
-  **TODO** `(line 193)` : add new password method after reset password
-  **TODO** `(line 194)` : remove token_forgot after change password

## src/Model/Table/ProfilesTable.php

-  **TODO** `(line 98)` : improve upload validation

## src/Template/Element/content-header.ctp

-  **TODO** `(line 19)` : improve breadcrumb ?>

## src/Template/Element/main-sidebar.ctp

-  **TODO** `(line 25)` : add status option ?>
-  **TODO** `(line 29)` : add search ?>
-  **TODO** `(line 45)` : add url named route (root) ?>
-  **TODO** `(line 69)` : add news links ?>

## src/Template/Layout/default.ctp

-  **TODO** `(line 28)` : check if css link is on if not show local file ?>
-  **TODO** `(line 34)` : add ionicons only when its used ?>
-  **TODO** `(line 53)` : add option to change skin ?>
-  **TODO** `(line 57)` : add named route (root) ?>
-  **TODO** `(line 59)` : create a config or table for company(logo and name) ?>
-  **TODO** `(line 90)` : format field created ?>
-  **TODO** `(line 104)` : add support page ?>
-  **TODO** `(line 138)` : move to a better place ?>
-  **TODO** `(line 161)` : add script to check if exist or load from CDN ?>
-  **TODO** `(line 165)` : add script to check if exist or load from CDN ?>
-  **TODO** `(line 169)` : add script to check if exist or load from CDN ?>

## src/Template/Layout/login.ctp

-  **TODO** `(line 49)` : add script to check if exist or load from CDN ?>
-  **TODO** `(line 53)` : add script to check if exist or load from CDN ?>

## src/Template/Pages/home.ctp

-  **TODO** `(line 18)` : create page home ?>

## src/Template/Profiles/edit.ctp

-  **TODO** `(line 57)` : change field to i18n ?>
-  **TODO** `(line 64)` : add default images options ?>

## src/Template/Profiles/view.ctp

-  **TODO** `(line 39)` : make a helper and add image from table instead session ?>
-  **TODO** `(line 57)` : show i18n date format ?>
-  **TODO** `(line 77)` : add field title on table addresses ?>

## src/Template/Users/add.ctp

-  **TODO** `(line 17)` : add named route (root) ?>
-  **TODO** `(line 18)` : change vipus for company config ?>
-  **FIXME** `(line 27)` : fix erros not showing on separated input
-  **TODO** `(line 50)` : add terms page, link and internationalization ?>
-  **TODO** `(line 62)` : add social auth links (maybe v2?) ?>

## src/Template/Users/index.ctp

-  **TODO** `(line 52)` : format date D of Month, Y ?>
-  **TODO** `(line 59)` : format date D of Month, Y ?>
-  **TODO** `(line 65)` : add last login ?>
-  **TODO** `(line 67)` : format date D of Month, Y ?>
-  **TODO** `(line 100)` : show in i8n format ?>
-  **TODO** `(line 107)` : add change password form and action ?>
-  **TODO** `(line 123)` : add more information about risk to delete account ?>

## src/Template/Users/login.ctp

-  **TODO** `(line 17)` : add named route (root) ?>
-  **TODO** `(line 18)` : change vipus for company config ?>
-  **TODO** `(line 39)` : add Remember me option ?>
-  **TODO** `(line 51)` : add social auth links (maybe v2?) ?>
-  **TODO** `(line 58)` : create reset password ?>


* * *

Last generated: Sat Nov 19 2016 15:49:38 by [grunt-todo](https://github.com/leny/grunt-todo).
