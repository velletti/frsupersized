

.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Configuration
-------------

The configuration settings can be done through the settings of a
plugin. Because of using Extbase every setting can also be done by
using TypoScript but remember that the not empty settings of the
plugin always override the ones from TypoScript. For boolean settings
you have an option in the extension manager to choose select boxes
instead of checkboxes, which provides an option “from TypoScript” in
boolean settings. Further information you can find in chapter
Administration → Extension configuration.

The basic configuration to use this extension is already done within
the default template. If you want to change certain settings e.g. on
more than one page you can change them in your template.


.. toctree::
   :maxdepth: 5
   :titlesonly:
   :glob:

   Reference/Index
   CustomConfiguration/Index

