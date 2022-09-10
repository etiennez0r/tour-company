# tour-company Test Task
Welcome to the tour-compay test task!

Please follow the next steps to install the tour-company Test Task:<br>

1- Install a fresh Laravel (version 7 or above)<br>
2- Configure the connection to your Postgres database in your .env file located in root folder of your fresh laravel installation<br>
3- Navigate to the root folder of your laravel installation and open a terminal console<br>
4- Execute the following commands:<br>
*php artisan migrate:install* [to confirm that the connection to database is correct]<br>
*git init*<br>
*git remote add origin git@github.com:etiennez0r/tour-company.git*<br>
*git fetch --all*<br>
*git reset --hard origin/master*<br>
*php artisan migrate:fresh --seed*<br>
5- Open a web browser and navigate to the url of your project and see all the available Bookings in /bookings<br>
&nbsp;&nbsp;&nbsp;&nbsp;Eg: http://localhost/bookings<br>
6- To create a new booking send a post request payload to http://localhost/bookings with the following fields (all are required):<br>
&nbsp;&nbsp;&nbsp;&nbsp;client_id: any client id from the table clients, originally a number between 1 and 50.<br>
&nbsp;&nbsp;&nbsp;&nbsp;product_id: any product id from the table products, originally a number between 1 and 100.<br>
&nbsp;&nbsp;&nbsp;&nbsp;booked_on: any date in the format YYYY-mm-dd.<br>
<br>
Payload sample:<br>
<br>
{<br>
&nbsp;"client_id": 1,<br>
&nbsp;"product_id": 1,<br>
&nbsp;"booked_on": "2022-09-20"<br>
}<br>
<br>
For the simplicity of this test VerifyCsrfToken has been disabled in the file app/Http/Middleware/VerifyCsrfToken.php @ line 16.
