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

.. include:: Images.txt

Extension configuration
^^^^^^^^^^^^^^^^^^^^^^^

Inside the extension manager you are able to change the following
options in configuration:

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         useSelectInsteadCheckbox

   Data type
         boolean

   Description
         If set, most of checkboxes in the frontend plugin will turn into
         selectboxes, so you can choose "from TypoScript"

         Explanation:

         By default all boolean configuration options are represented by
         checkboxes in the frontend plugin.

         They override always the TypoScript settings via constants/setup. If
         you want to be able to define all the settings (not only the not
         boolean) just once per template e.g. in constant editor, you have to
         set useSelectInsteadCheckbox to 1.

         In this case the default option in the selectbox is "from TypoScript".
         But you can still override the TS settings by choosing one of the
         other options “Yes” or “No”.

         In the screenshots below you can see an example of the difference of
         the output in the frontend plugin.

   Default
         0


.. ###### END~OF~TABLE ######

|img-10|

|

UseSelectInsteadCheckbox = 1 // useSelectInsteadCheckbox = 0

