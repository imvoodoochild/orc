## System Requirements
PHP, Laravel, Docker, MySQL

## Steps to Run the System

Step 1: Unzip the folder named "orc" inside the zipped file to the path of your choice.

Step 2: Open command prompt or any command-line interface and change the directory to go inside the folder.

Step 3: To migrate the database, type the command below: 

php artisan migrate:fresh --seed

Step 4: After migrating the database, type the command below to start the PHP server:

php artisan serve

Step 5: Open another command-prompt window. Type the command below to run the required queues for the project and see the project logs:

php artisan queue:work

Step 5: Once the PHP server has started, type the web URL below on a browser to interact with the website:

http://localhost:8000/
