MyComponent Extra for MODx Revolution
=======================================


**Author:** Bob Ray <http://bobsguides.com> [Bob's Guides](http://bobsguides.com)

(outdated) Documentation is available at [Bob's Guides](http://bobsguides.com/mycomponent-tutorial.html)

MyComponent provides a development environment for creating and distributing Extras
for MODX Revolution.


This is a beta version of the new MyComponent 3.0. MyComponent has been completely refactored from the ground up and has very little in common with older versions (in fact, it installs in a different location).

To create a new Extra with MyComponent 3.0, you edit a single project config. file and run the various MyComponent utilities, either directly from their source files or from a UI in the MODX Manager.

Based on the config. file, MyComponent creates all the files and MODX objects necessary for your Extra. The files are automatically placed in the correct directories. In addition, MyComponent will write your lexicon files and the build.transport.php file necessary to create a MODX Transport Package you can submit to the MODX repository for distribution. MyComponent will also create all the resolvers necessary to establish the correct relationships between the objects in your extra (e.g., TV/Template, Resource/Parent, Plugin/Event, etc.).

