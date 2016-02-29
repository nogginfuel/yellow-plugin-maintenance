Maintenance plugin 0.6.2
==================
Support for maintenance pages.

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).  
2. Download [maintenance.php](maintenance.php?raw=true), copy it into your `system/plugins` folder.  

To uninstall delete the plugin.

How to make a maintenance page?
-------------------------
Set `Status: maintenance` in the settings at the top of a page. The page will no longer be publicly accessible. Leave the maintenance page up until you are done performing maintenance. This lets site visitors know why the page is unavailable.

To use the plugin for a global maintentance setting open file system/config/config.ini, add Status: maintenance

Example
-------
Content file with maintenance status:

    ---
    Title: New page
    Status: maintenance
    ---
    Write text here
