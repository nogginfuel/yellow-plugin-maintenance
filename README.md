Maintenance plugin 0.6.3
========================
Maintenance status for entire site or single page.

How do I install this?
----------------------
1. [Download and install Yellow](https://github.com/datenstrom/yellow/).
2. [Download plugin](https://github.com/nogginfuel/yellow-plugin-maintenance/archive/master.zip). If you are using Safari, right click and select 'Download file as'.
3. Copy `master.zip` into your `system/plugins` folder.

To uninstall delete the plugin files.

How to enable maintenance status?
---------------------------------
To use this plugin open file `system/config/config.ini` and add `Status: maintenance`. An individual maintenance status can be defined in the settings at the top of each page. Leave the maintenance status until you are done performing maintenance. This lets visitors know why your website is unavailable.

Example
-------
Content file with maintenance status:

    ---
    Title: New page
    Status: maintenance
    ---
    Write text here
