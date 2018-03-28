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


Custom configuration
^^^^^^^^^^^^^^^^^^^^

Adapting the fluid templates gives you a wide range of possibilities
to customize the appearance of the Supersized slideshow. Please mind
what is written in Section: view => templateRootPath.


Example
"""""""

In [templateRootPath]/Supersized/ you will find the template file
Headerdata.html.

Add this at the bottom of the file

::

   <style type="text/css">
         #thumb-tray {
               background: none;
               box-shadow: none;
         }
   </style>


You will see that the transparent background under the individual
thumb links bar is missing now.

Another way. Define in your template setup:

::

   plugin.tx_frsupersized {
         settings.slideshow.customCSS = 1
   }

Now you can add this at the bottom of the file Headerdata.html:

::

   <f:if condition="{settings.slideshow.customCSS}">
         <f:then>
   <style type="text/css">
         #thumb-tray {
               background: none;
               box-shadow: none;
         }
   </style>
         </f:then>
   </f:if>


Now you have the same effect. But on sub pages you can switch this
effect off in the template setup:

::

   plugin.tx_frsupersized {
         settings.slideshow.customCSS = 0
   }

The name of this new setting “customCSS” is free. You can use what you
want. But is has to be a sub setting to
plugin.tx\_frsupersized.settings.

A setting “plugin.tx\_frsupersized.settings.yourSetting” corresponds
with the fluid object “{settings.yourSetting}”,
“plugin.tx\_frsupersized.settings.yourSetting.yourSubSetting”
corresponds with “{settings.yourSetting.yourSubSetting}”.

