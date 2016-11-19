Chipmunk Forums Version 1.3

You may use chipmunk scripts for free on any personal or commercial site. You may modify the code and release any hacks or mods of it as long as the copyright notice to chipmunk scripts stays intact and the mods/hacks/skins you release are free.
If you do take off the copyright notice, your liscense to use this software will be terminated. If you continue to violate the agreement after warning, I will contact your host and have them shut you down on copyright infringement.

If you wish to take off the copyright, re-brand, or make your own commercial software off of the code of chipmunk scripts, please contact me at webmaster@java-gaming.com . There is a fee to re-brand the software.

Note: If you are on geocities or any free host, those hosts probably do not support php or mysql so you cannot use this script, sorry.

Requirements:

PHP 4
MYSQL 3




New Feature in 1.4
-------------------
Simple templating engine for users
-------------------------------------------------------------------------------------------------------

To install Chipmunk Forum:
After unzipping the package:
1. Open install.php in notepad, copy and paste the sql structure into phpmyadmin or sqladmin to create the tables for the forum.
2.Open connect.php and admin/connect.php and put your username, password, and database name for the mysql connection.
3. Open admin/var.php and edit the settings there to your liking.
4. Now run admin/register.php and register yourself a head admin name(this is the file in the admin folder, not the register.php file in the root folder).
5. Go into var and edit $boardpath and set it to your board's path.
6. Delete admin/register.php and admin/reguser.php
7. Now go to login.php and log in and the link to the admin panel will appear at the bottom of the page(if you log in with a non-admin account, this link will not appear).
8. In the admin panel you can create categories, forums, define ranks and titles, etc.


To change the look of Chipmunk forums:
There is a stylesheet that controls colors and effects throughout the forum, if you want to edit the way the forum looks edit style.css .


To add the reply-only feature:
upload and run upgrade.php
delete upgrade.php
upload admin/edit.php and admin/addforum.php
upload reply.php and quote.php
Done!

Note: Do not worry about the warning regarding mysql_data_seek and the buffer, as soon as soon actually add a category and a forum, that will go away.

You will either want to edit title.php and erase everything in it if you do not wish to have your logo and banner at the top. Right now these are my logo and ads, please change them.

Explanation of Permission levels:
There are 3 levels above member(really 4 , but there can be only 1 head admin).
Moderators -- Can edit, delete, and move threads
Supermoderators -- Can do what moderators can do and post stickies and ban people
Admin -- All supermod functions plus access to admin cp
Head admin(you) -- Admin function but you are the only one that can delete, edit other admin accounts.

For moving, deleting, and locking threads. Moderators, Supermods, and Admins can only do these actions to posts or threads if the poster is below their permission level or if they are the poster.
For example, a Supermoderator can do these actions to posts by Moderators and members, but to posts by other supermoderators and admininstrators.

All smileys can be found in the images folder.
To add now smilies, open up the file smilies and here are many examples in here to follow, this file also doubles as a bad words filter


Too add new templates:
This requires FTP access
DO not remove the default subfolder in the templates folder, you may replace the images but don't delete it.

To add new template first create the files in another sub-folder under the templates folder. All the files names must be the same as the ones in teh default folder. Then when you are done with the images and style.css in your new template, upload your template folder into the templates sub-folder.
Then go into the admin panel and type the name of the folder you just added.


upgrading

From 1.2 to 1.3
----------------
Go in phpMyAdmin and add 2 fields to the b_users table. Add tsgone as a bigint field and add oldtime as a bigint field
make a new field in the b_forums table called lastposttime also a bigint field
Re-upload newtopic.php, reply.php, poststicky.php, index.php, and quote.php . Also upload the new images folder and you should be upgraded.

From 1.3 to 1.4
---------------
Major new change was the template engine
You need to add a new field to b_users table named templateclass of type bigint with the default value of 1

You need to add a new table called b_templates with 2 fields:
1. templateid which is primary auto-increment bitint
2. templatepath varchar 255
3. Insert a row in the b_templates table of templateid 1 and templatepath of default

Re-upload all files except the install, readme files 

From 1.4 to 1.4.1
---------------------
WYSIWYG editor added
1. Just re-upload everything except, install.php and admin/register.php,admin/reguser.php and you should be fine




If you have any further questions about this board, please go to http://www.chipmunk-scripts.com/board



