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


Reference
^^^^^^^^^

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         \_CSS\_DEFAULT\_STYLE

   Data type
         string

   Description
         CSS default styles which will be included automatically together with
         the default styles from other extensions. Please be aware that the css
         files from section settings.general will be included later. So the
         settings there will override this settings.

   Default
        empty


.. ###### END~OF~TABLE ######

[tsref:plugin.tx\_frsupersized]


Section: settings
"""""""""""""""""

Normally there is no need to change this settings.

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         overrideFlexformSettingsIfEmpty

   Data type
         string

   Description
         The default behaviour of frsupersized and extbase is to override
         settings from TS by the one of the flexforms. This is even valid if
         the setting is left empty in the flexforms.Set a comma seperated list
         of fields which get the value of the TS setting if the setting is not
         defined in the plugin configuration.

   Default
         general.cssCoreFile, general.cssSlideshowFile, general.cssThemeFile,
         general.jQueryFile, general.jQueryEasingFile,
         general.supersizedCoreFile, general.supersizedSlideshowFile,
         general.themeFile, fullbackground.minWidth, fullbackground.minHeight,
         slideshow.navigationImagePath, slideshow.slideInterval,
         slideshow.startSlide, slideshow.transitionSpeed, slideshow.thumbWidth,
         slideshow.thumbHeight, banner.bannerWidth, banner.bannerHeight,
         banner.bannerTop, banner.bannerLeft

.. container:: table-row

   Property
         overrideFlexformSettingsFromTS

   Data type
         string

   Description
         Some select fields in the frontend plugin have an option “from
         TypoScript”. If you choose this option, the setting from TypoScript
         will be taken.

         All boolean fields – normally represented by checkboxes – will –
         normally - not be overridden by TypoScript settings. But if you
         activate “useSelectInsteadCheckbox” in the extension manager, there
         will be select boxes in the frontend plugin with the options “from
         TypoScript, “yes” and “no”.

   Default
         general.jQueryDisable, fullbackground.verticalCenter,
         fullbackground.horizontalCenter, fullbackground.fitAlways,
         fullbackground.fitPortrait, fullbackground.fitLandscape,
         slideshow.slideshow, slideshow.autoplay, slideshow.stopLoop,
         slideshow.random, slideshow.transition, slideshow.newWindow,
         slideshow.performance, slideshow.keyboardNav, slideshow.imageProtect,
         slideshow.slideLinks, slideshow.thumbLinks, slideshow.thumbWidthCrop,
         slideshow.thumbHeightCrop, slideshow.thumbnailNavigation,
         slideshow.pauseHover, slideshow.themeShutterProgressBar,
         slideshow.themeShutterMouseScrub, banner.banner



.. ###### END~OF~TABLE ######

[tsref:plugin.tx\_frsupersized.settings]


Section: settings.general
"""""""""""""""""""""""""

If you want to change the basic css and js files of the Supersized
jQuery plugin, don't change them directly in the extension folder. All
changes will be lost with the next extension update. Copy the file
where ever you want e.g. to
fileadmin/templates/supersized/supersized-3.2.7/ and change this
setting e.g in the constant editor.

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         slides

   Data type
         string

   Description
         A comma seperated list of image files, located in folder
         'uploads/tx\_frsupersized/'.

         Normally you will set this option via flexform in the frontend plugin.
         But if you want to add Supersized via TypoScript you have to set this
         option in your template.

         **Example:**

         ::

            plugin.tx_frsupersized {
              settings {
                general {
                  slides = myImage1.jpg,myImage2.jpg,myImage3.jpg
                }
              }
            }

   Default
        empty


.. container:: table-row

   Property
         slideCaptions

   Data type
         string

   Description
         A list of slide captions - one per line.

         Normally you will set this option via flexform in the frontend plugin.
         But if you want to add Supersized via TypoScript you can set this
         option in your template.

         **Example:**

         ::

            plugin.tx_frsupersized {
              settings {
                general {
                  slideCaptions (
                    slide comment 1
                    slide comment 2
                    slide comment 3
                  )
                }
              }
            }

   Default
        empty

.. container:: table-row

   Property
         slideUrl

   Data type
         string

   Description
         A list of slide url - one per line.

         Normally you will set this option via flexform in the frontend plugin.
         But if you want to add Supersized via TypoScript you can set this
         option in your template.

         **Example:**

         ::

            plugin.tx_frsupersized {
              settings {
                general {
                  slideUrl (
                    http://www.myDomain1.de
                    http://www.myDomain2.de
                    http://www.myDomain3.de
                  )
                }
              }
            }

   Default
        empty

.. container:: table-row

   Property
         cssCoreFile

   Data type
         string

   Description
         Path to the Supersized css core file for full background

   Default
         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         core/css/supersized.core.css


.. container:: table-row

   Property
         cssSlideshowFile

   Data type
         string

   Description
         Path to the Supersized css file for slideshow

   Default
         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         slideshow/css/supersized.css


.. container:: table-row

   Property
         cssThemeFile

   Data type
         string

   Description
         Path to the Supersized css theme file for slideshow

   Default
         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         slideshow/theme/supersized.shutter.css


.. container:: table-row

   Property
         jQueryDisable

   Data type
         boolean

   Description
         Disable including of JQuery files (you have to include them externally
         via TS)

   Default
         0


.. container:: table-row

   Property
         jQueryFile

   Data type
         string

   Description
         Path to the jQuery file

   Default
         EXT:frsupersized/Resources/Public/Scripts/jquery/1.7.2/jquery-1.7.2.mi
         n.js


.. container:: table-row

   Property
         jQueryEasingFile

   Data type
         string

   Description
         Path to the jQuery easing file

   Default
         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         slideshow/js/jquery.easing.min.js


.. container:: table-row

   Property
         supersizedCoreFile

   Data type
         string

   Description
         Path to the Supersized javascript core file for full background

   Default
         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         core/js/supersized.core.3.2.1.min.js


.. container:: table-row

   Property
         supersizedSlideshowFile

   Data type
         string

   Description
         Path to the Supersized javascript file for slideshow

   Default
         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         slideshow/js/supersized.3.2.7.min.js


.. container:: table-row

   Property
         themeFile

   Data type
         string

   Description
         Path to the Supersized javascript theme file for slideshow

         I had to changed the original files a bit. The changed versions are:

         supersized.shutter.changed.min.js

         supersized.shutter.changed.js

         The original files you can find here:

         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         slideshow/theme/supersized.shutter.min.js

         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         slideshow/theme/supersized.shutter.js

   Default
         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         slideshow/theme/supersized.shutter.changed.min.js


.. ###### END~OF~TABLE ######

[tsref:plugin.tx\_frsupersized.settings.general]


Section: settings.fullbackground
""""""""""""""""""""""""""""""""

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         minWidth

   Data type
         integer

   Description
         Minimal width of background image

   Default
         0


.. container:: table-row

   Property
         minHeight

   Data type
         integer

   Description
         Minimal height of background image

   Default
         0


.. container:: table-row

   Property
         verticalCenter

   Data type
         boolean

   Description
         Center images vertically.

   Default
         0


.. container:: table-row

   Property
         horizontalCenter

   Data type
         boolean

   Description
         Center images horizontally.

   Default
         0


.. container:: table-row

   Property
         fitAlways

   Data type
         boolean

   Description
         Image will never exceed browser width or height.

   Default
         0


.. container:: table-row

   Property
         fitPortrait

   Data type
         boolean

   Description
         Portrait images will not exceed browser height.

   Default
         0


.. container:: table-row

   Property
         fitLandscape

   Data type
         boolean

   Description
         Landscape images will not exceed browser width.

   Default
         0


.. ###### END~OF~TABLE ######

[tsref:plugin.tx\_frsupersized.settings.fullbackground]


Section: settings.slideshow
"""""""""""""""""""""""""""

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         slideshow

   Data type
         boolean

   Description
         Activate slideshow.

   Default
         0


.. container:: table-row

   Property
         autoplay

   Data type
         boolean

   Description
         Start Slideshow directly.

   Default
         0


.. container:: table-row

   Property
         slideInterval

   Data type
         integer

   Description
         Time between slide changes in milliseconds.

   Default
         5000


.. container:: table-row

   Property
         startSlide

   Data type
         integer

   Description
         Start slide (0 is random)

   Default
         1


.. container:: table-row

   Property
         stopLoop

   Data type
         boolean

   Description
         Pauses slideshow on last slide

   Default
         0


.. container:: table-row

   Property
         random

   Data type
         boolean

   Description
         Randomize slide order. Ignores start slide.

   Default
         0


.. container:: table-row

   Property
         transition

   Data type
         integer

   Description
         Transition Mode

         Allowed values:

         0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide
         Left, 6-Carousel Right, 7-Carousel Left

   Default
         1


.. container:: table-row

   Property
         transitionSpeed

   Data type
         integer

   Description
         Speed of transition in milliseconds.

   Default
         1000


.. container:: table-row

   Property
         newWindow

   Data type
         boolean

   Description
         Image links open in new window/tab

   Default
         0


.. container:: table-row

   Property
         keyboardNav

   Data type
         boolean

   Description
         Activate keyboard navigation.

   Default
         1


.. container:: table-row

   Property
         performance

   Data type
         integer

   Description
         The Performance.

         Allowed values:

         0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality,
         3-Optimizes transition speed (Only works for Firefox/IE, not Webkit)

   Default
         1


.. container:: table-row

   Property
         imageProtect

   Data type
         boolean

   Description
         Disables image dragging and right click with Javascript.

   Default
         0


.. container:: table-row

   Property
         slideLinks

   Data type
         string

   Description
         Individual links for each slide

         Allowed values:

         false, num, name, blank

   Default
         blank


.. container:: table-row

   Property
         pauseHover

   Data type
         boolean

   Description
         Pauses slideshow while current image hovered over.

   Default
         0


.. container:: table-row

   Property
         thumbLinks

   Data type
         boolean

   Description
         Individual thumb links for each slide

   Default
         0


.. container:: table-row

   Property
         thumbWidth

   Data type
         integer

   Description
         Thumb width

   Default
         150


.. container:: table-row

   Property
         thumbWidthCrop

   Data type
         boolean

   Description
         Activate horzontal cropping of thumb

   Default
         0


.. container:: table-row

   Property
         thumbHeight

   Data type
         integer

   Description
         Thumb height

   Default
         108


.. container:: table-row

   Property
         thumbHeightCrop

   Data type
         boolean

   Description
         Activate vertikal cropping of thumb

   Default
         0


.. container:: table-row

   Property
         thumbnailNavigation

   Data type
         boolean

   Description
         Thumbnail navigation - previous and next thumbs

   Default
         0


.. container:: table-row

   Property
         navigation

   Data type
         boolean

   Description
         Arrow navigation

   Default
         0


.. container:: table-row

   Property
         navigationImagePath

   Data type
         string

   Description
         Path to folder of image files for navigation.

   Default
         EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/
         slideshow/img/


.. container:: table-row

   Property
         controlBar

   Data type
         boolean

   Description
         Activate the Supersized control bar

   Default
         0


.. container:: table-row

   Property
         slideCounter

   Data type
         boolean

   Description
         Enable the slide counter.

   Default
         0


.. container:: table-row

   Property
         slideCaptions

   Data type
         boolean

   Description
         Enable slide captions.

   Default
         0


.. container:: table-row

   Property
         themeShutterProgressBar

   Data type
         boolean

   Description
         Theme shutter option: Progress bar that runs based on the the slide
         interval.

   Default
         0


.. container:: table-row

   Property
         themeShutterMouseScrub

   Data type
         boolean

   Description
         Theme shutter option: Makes the thumbnail list navigate left or right
         based on the mouse location.

   Default
         0


.. ###### END~OF~TABLE ######

[tsref:plugin.tx\_frsupersized.settings.slideshow]


Section: settings.banner
""""""""""""""""""""""""

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         banner

   Data type
         boolean

   Description
         Activate banner

   Default
         0


.. container:: table-row

   Property
         bannerWidth

   Data type
         integer

   Description
         Banner width

   Default
        empty

.. container:: table-row

   Property
         bannerHeight

   Data type
         integer

   Description
         Banner height

   Default
        empty

.. container:: table-row

   Property
         bannerTop

   Data type
         integer

   Description
         Distance of the banner from the top of the window in pixels (css: top)

   Default
        empty

.. container:: table-row

   Property
         bannerLeft

   Data type
         integer

   Description
         Distance of the banner from the left edge of the window (css: left)

   Default
        empty

.. ###### END~OF~TABLE ######

[tsref:plugin.tx\_frsupersized.settings.banner]


Section: view
"""""""""""""

.. ### BEGIN~OF~TABLE ###

.. container:: table-row

   Property
         templateRootPath

   Data type
         string

   Description
         In the sub folder Supersized of the default templateRootPath you will
         find the fluid templates.

         If you want to change this templates, don't change them directly in
         the default extension folder. All changes will be lost with the next
         extension update. Copy the sub folder Supersized where ever you want
         e.g. to fileadmin/templates/ and change this setting e.g in the
         constant editor.

         **Example:**

         ::

            plugin.tx_frsupersized.view.templateRootPath =  fileadmin/templates/

   Default
         EXT:frsupersized/Resources/Private/Templates/


.. container:: table-row

   Property
         partialRootPath

   Data type
         string

   Description
         The folder for the partial fluid templates.

   Default
         EXT:frsupersized/Resources/Private/Partials/


.. container:: table-row

   Property
         layoutRootPath

   Data type
         string

   Description
         The folder for the layout fluid templates.

   Default
         EXT:frsupersized/Resources/Private/Layouts/


.. ###### END~OF~TABLE ######

[tsref:plugin.tx\_frsupersized.view]


Example
"""""""

Here is the whole default configuration of the extension frsupersized:

::

   plugin.tx_frsupersized {
     settings {
       general {
         cssCoreFile = EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/core/css/supersized.core.css
         cssSlideshowFile = EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/slideshow/css/supersized.css
         cssThemeFile = EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/slideshow/theme/supersized.shutter.css
         jQueryDisable = 0
         jQueryFile = EXT:frsupersized/Resources/Public/Scripts/jquery/1.7.2/jquery-1.7.2.min.js
         jQueryEasingFile = EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/slideshow/js/jquery.easing.min.js
         supersizedCoreFile = EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/core/js/supersized.core.3.2.1.min.js
         supersizedSlideshowFile = EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/slideshow/js/supersized.3.2.7.min.js
         themeFile = EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/slideshow/theme/supersized.shutter.js
       }
       fullbackground {
         minWidth = 0
         minHeight = 0
         verticalCenter = 0
         horizontalCenter = 0
         fitAlways = 0
         fitPortrait = 0
         fitLandscape = 0
       }
       slideshow {
         slideshow = 0
         autoplay = 0
         slideInterval = 5000
         startSlide = 1
         stopLoop = 0
         random = 0
         transition = 1
         transitionSpeed = 1000
         newWindow = 0
         keyboardNav = 1
         performance = 1
         imageProtect = 0
         slideLinks = blank
         pauseHover = 0
         thumbLinks = 0
         thumbWidth = 150
         thumbWidthCrop = 0
         thumbHeight = 108
         thumbHeightCrop = 0
         thumbnailNavigation = 0
         navigation = 0
         navigationImagePath = EXT:frsupersized/Resources/Public/Scripts/supersized/supersized-3.2.7/slideshow/img/
         controlBar = 0
         slideCounter = 0
         slideCaptions = 0
         themeShutterProgressBar = 0
         themeShutterMouseScrub = 0
       }
       banner {
         banner = 0
         bannerWidth =
         bannerHeight =
         bannerTop =
         bannerLeft =
       }
     }
     view {
       templateRootPath = EXT:frsupersized/Resources/Private/Templates/
       partialRootPath = EXT:frsupersized/Resources/Private/Partials/
       layoutRootPath = EXT:frsupersized/Resources/Private/Layouts/
     }
   }

