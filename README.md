# supermarket-php

To run the php index.php file in local server
Place the supermarket folder in the xampp/htdocs folder
run http://localhost/supermarket/index.php

For unit testing 
Place the UnitTestFiles folder in the D drive

Then install composer , open command prompt
Enter "composer" command to check composer installed or not.
In Command prompt ,change your working directory path like D: or E:
Run this command in the command prompt "composer require --dev phpunit/phpunit"
Then enter this command "phpunit --version" to know phpunit installed or not.It will return the phpunit version.
Then in SSH terminal to run the testcase .change your directory path .For Ex: D:
Run this command "./vendor/bin/phpunit"
Test case will run
