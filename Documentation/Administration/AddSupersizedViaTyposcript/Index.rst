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


Add Supersized via TypoScript
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

You can add Supersized via TypoScript for the whole website or a
website section.


Example
"""""""

Include the static template (see above).

Configure the plugin in your template setup:

::

   plugin.tx_frsupersized {
       settings {
           general {
               # the images have to be in folder /uploads/tx_frsupersized/
               slides = myImage1.jpg,myImage2.jpg,myImage3.jpg
           }
           fullbackground {
               verticalCenter = 1
               horizontalCenter = 1
           }
           slideshow {
               slideshow = 1
               autoplay = 1
               thumbLinks = 1

           }
       }
   }

Define a user function:

::

   lib.supersized = USER
   lib.supersized {
       userFunc = tx_extbase_core_bootstrap->run
       pluginName = Pi1
       extensionName = Frsupersized
       controller = Supersized
       action = index

       settings =< plugin.tx_frsupersized.settings
       persistence =< plugin.tx_frsupersized.persistence
       view =< plugin.tx_frsupersized.view
   }

Include the user function in your page configuration:

::

   page = PAGE
   page {
       ....
       mySupersizedMarker < lib.supersized

       ....
   }

