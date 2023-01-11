## System Requirements
PHP, Laravel, Docker, MySQL

## Steps to Run the System

Step 1: Clone "orc" to the path of your choice. Then, create a .env file in this folder and copy the contents of .env.example file to .env file. Next, set up MySQL with the configurations given in file and create a new schema called 'orc'. Make sure that MySQL server is running. 

Step 2: Open Docker Desktop and ensure that the Docker daemon status is running. 

Step 3: Open command prompt or any command-line interface and change the directory to go inside the folder. To migrate the database, type the command below: 

php artisan migrate:fresh --seed

Step 4: After migrating the database, type the command below to start the PHP server:

php artisan serve

Step 5: Open another command-prompt window. Type the command below to run the required queues for the project and see the project logs:

php artisan queue:work

Step 5: Once the PHP server has started, type the web URL below on a browser to interact with the website:

http://localhost:8000/
