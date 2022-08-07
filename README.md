# - robot control website 

his code stores the robot control panel instructions in a database and displays it on another PHP file using XAMPP localhost.

This repositery includes index.php file which contains the robot controller once a button is clicked it will be stored in a database
The view.php will read from the database and display it
to run this code :

install XAMPP and create a database called 'robot controller', and a table called 'directions'
create user for the database with the following information : User name: robot, Host name: localhost, password: robot1234

ut the files in 'xampp\htdocs'
run Apache and MySQL in XAMPP

run the file by localhost 



# connect database with arduino

Step 1          Installing and Setting the Xampp
. After opening it, Start the Apache and MySQL services.

tep 2 Creating the Database
hen go to databases tab and create the new database

Step 3 Creating the PHP pages
Step 4 Sending Data from Arduino to Database
Before going forward, you need to check that whether the ethernet shield is working properly or not. So to do this, connect the ethernet wire from the internet router to the ethernet shield.

Next, open up the Arduino IDE, go to Files->Examples->Ethernet->DHCPAdressPrinter. A new window will open up, upload the code and in the serial printer, it will show you the IP Address of the ethernet shield.

Then open the command prompt (cmd) and type in “ipconfig” and it will show you the IPv4 address.


Now, we are ready to send the data to the database from the Arduino.

Make the connections of the DHT22 with the Arduino 

To read more about interfacing DHT22 with Arduino, read this Tutorial | Temperature and Humidity Sensor DHT22 Interfacing with Arduino
Code
Download the DHT22 library . No need to download the Ethernet and SPI library because it comes with the Arduino IDE installation.

Step 5 Displaying the Data


To display the data, you will need to create another PHP file that will read the data from the database and will show it on the webpage.

Create another PHP file with the name “display.php” and place it in the same folder where you have placed the other PHP files (C:\xampp\htdocs\ethernet\).
