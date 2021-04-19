# petfinder
2014 Proof of Concept of a very simple app to show experience in Wordpress, PHP, HTML, CSS, AngularJS, MySQL and MVC patterns.

## How to setup the project:
1. Import the MySQL database in your database manager.
The database is dumped in the "petfinder.sql" file, included in the root folder.

DB name: petfinder
User: root
Password: dba

2. Go to /localhost/petfinder to access the web app.
3. To login, press the login button in the top-right corner.

The administrator credentials are:

User: admin
Password: admin

4. When you're logged in, you can press the "Logoff" button at the top-right corner for logging off.

The "retrieve", "submit" and "update" services are functional, so new lost dogs can be added as an admin and
the lost dogs that are added to the database can be displayed in the main page. Also, if a dog has been found, its
status can be changed to "Found", and if an error has been made, it can be change again to "Lost".

Only the administrators can submit new lost dogs to the database or change a lost dog status.

All the project files are located in the /wp-content/themes/petfinder/ directory, with exception of the PHP handlers
for database management (retrieve.php, submit.php, update.php), which are located in the main /petfinder/ directory.

*******************************************************************************************************************

## Used Tools:
* Sublime Text 2 for coding.
* WAMP as application server platform. MyPHPAdmin was used for server-side managing
* Wordpress 4.0 as the Content Manager System and to provide back-end access and administrator privileges
* Bootstrap 3.2.0 as a front-end workframe
* AngularJS as a client-side model-view-controller
* JQuery as a client-side scripting language
* JQuery Datepicker for picking dates in the submit view
