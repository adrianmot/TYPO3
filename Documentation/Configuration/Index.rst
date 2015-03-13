.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _configuration:

Configuration Reference
=======================

Set your baseURL in the "fileadmin/page/Configuration/Typoscript/constants.txt"
using the host (line 33). All copied Typoscript and Template files are just examples,
you can add/remove/modify as you need. Just the constants and setup.txt should keep
the default settings like "plugin.tx_page...". They are included from the extension
setup and constants files.

Target group: **Developers**


.. _configuration-typoscript:

TypoScript Reference
--------------------

No reference, the default Typoscript for page and config will be used.


.. _configuration-templates:

Templates & Backend Layouts
--------------------

This extension uses BE Layouts, placed in "fileadmin/easytemplate/Resources/Private/BackendLayouts".
Every file which is created should also have a template file in "fileadmin/easytemplate/Resources/Private/Templates/Page".

I.e.: you create a BE Layout called "Subpages.txt", you need to create the HTML template by the same name "Subpages.html".


.. _configuration-bootstrap:

Bootstrap
--------------------

Bootstrap files are included by compass automaticilly.


.. _configuration-sass:

Sass/Compass
--------------------

After the extension was installed, a script is called to copy all sources.
Theres a file called "config.rb" in your projects root directory, all paths
still are set to the fileadmin.

Just do a "compass watch --poll" in your shell while you are in your projects
root and the extension is installed. Sass/Compass should be running to use it ;)

Credits
^^^^^^^

Marc Scherer (mail@loewenstall.de)
