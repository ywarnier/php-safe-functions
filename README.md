php-safe-functions
==================

This is a re-usable, PHP array format, whitelist of server-safe functions to generate a PHP sandbox.
"server-safe" means it should be safe for the server, with the specific focus of building a sandbox and avoid people to attack the server or go around deleting or simply reading sensible files.
Obviously, some functions like "echo" could still be used to generate XSS attacks. I'm not preventing these functions to be part of the whitelist.

This is not meant to be a "stable" project. I'll try to update the list and release tags as soon as more server-safe functions are added.

Warning
-------

This is still meant as a test project, there is no way I can be held responsible if you use it and everything goes wrong. Check the license (GNU/LGPLv3) for more information.

Building process
----------------

This process is still in its early stage and, at this point, it is NOT safe yet.
To build this list, for now, I first get a list of all available functions on my computer with get_defined_functions(), then I check them one by one and add only those for which I see no security risk related to the server.
I
References
----------

It is based on several sources found on the net, which have, themselves, used varied sources of information:
* http://stackoverflow.com/questions/10225791/un-exploitable-php-functions-whitelist
* http://stackoverflow.com/questions/3115559/exploitable-php-functions
* http://sandbox.onlinephpfunctions.com/ (comments section)
