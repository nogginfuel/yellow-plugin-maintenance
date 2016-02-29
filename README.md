Maintenance plugin 0.6.3
==================
Support for maintenance pages.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [maintenance.php](maintenance.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to enable maintenance status?
---------------------------------
To put the entire website into maintenance status open file `system/config/config.ini` and add `Status: maintenance`. To use this on an individual page set `Status: maintenance` in the settings at the top of a page. Leave the maintenance status until you are done performing maintenance. This lets visitors know why your website is unavailable. You can continue to edit your website in a browser and the file system.

Example
-------
Content file with maintenance status:

    ---
    Title: New page
    Status: maintenance
    ---
    Write text here
