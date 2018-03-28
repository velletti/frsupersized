

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


ChangeLog
---------

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Version
         1.0.2

   Changes
         - Small bugfix (https://forge.typo3.org/issues/70397)


.. container:: table-row

   Version
         1.0.1

   Changes
         - Update this documentation


.. container:: table-row

   Version
         1.0.0

   Changes
         - Cleaned the code a bit.
         - Make it compatible with TYPO3 6.0.0-7.99.99
         - Fixed flickr_URL in supersized
         - Update this documentation
         - set state to 'stable'


.. container:: table-row

   Version
         0.2.0

   Changes
         - Now compatible with TYPO3 branches 6.0 / 6.1: deprecated methods are removed, namespaces are introduced.

         - This version is not anymore compatible with TYPO3 branches 4.x. The last version which is compatible with 4.x is 0.1.2.
         - Replace locallang.xml with locallang.xlf

         - Remove closing php tags

         - Documention now with ReST


.. container:: table-row

   Version
         0.1.2

   Changes
         - Fixed a bug in WizardIcon.php that prevents the use of the content
           element wizard.

         - Fixed a small bug in fluid template Index.html (play/pause button)

         - Now on Forge


.. container:: table-row

   Version
         0.1.1

   Changes
         - Fixed a TYPO3 v.6beta compatibility issue. (deprecated
           t3lib\_div::readLLXMLfile in WizardIcon.php)

         - Fixed two small bugs in fluid template Index.html

         - Remove a leading slash in slides array image path in fluid template
           HeaderData.html

         - Increase 'maxitems' for the slides field from 10 to 30 in flexform.

         - Try to fix line feed problems in manual (online version).


.. container:: table-row

   Version
         0.1.0

   Changes
         Initial release.


.. ###### END~OF~TABLE ######


