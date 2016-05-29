IOT HCPS-HassleFree Car Parking System
Project Description
-----------------------
Now a days we face Problem for finding a car parking in malls and airports.

We need to go to a long distance or search for parking in all floors which may be irritating especially when your are in some emergency.

so i tought t make a Intelligent Car Parking with help of IOT.IOT has solution for everything so lets make use of it and solve the problem.

Basic Functionality
-----------------------
This Project makes use of An Arduino Board and Ultra Sonic sensors.

Each Parking lot is fixed with a Ultra Sonic Sensor which is inturn connected to arduino for communication.The Ultra Sonic Sensor senses the presence of the car in the lot.If it is blocked it tells the ardunio its blocked or tells its free when no car is available in lot.

The Arduino would collect data from all the available sensors and sends the data to the server.

The server keeps the track of information which parking lot is full and which is free.This data will be reflected to a Map of the parking area indicating free parking lot as Green and oocupied as red.

How the user gets information about the parking area
---------------------------------------------------------------------
As soon as user enter the parking area there would be a LED Scren showing "Find a Parking space for your car without any Hassel? Then go to --> www.OurServerPage.com" we can provide an open wifi to make user connected.

So the user visits the website and finds a parking space which is free and parks his car.There would be no Paper print or any token given, the parking time is noted down by the Ultra Sonic Sensor when the car is parked in the lot.

And when user removes the car from the lot the time is again noted down and the parking fee is calculated. Then User is presented with a QR code which has the details regarding the parking charges.At the exit point our personnel would scan the QR and Take the money as quoted by QR.

Additional or Future planned Features
----------------------------------------------
1.Since some places like airports charges parking fee according to the time.We can alert the user about the charge extenstion by sms.

Eg- parking charges for 1 hr = RS 20 parking charges for 2 hr = RS 50 We can sms the user before 15minutes that if he continues to park the car the charges would increase from RS 20 to Rs 50 .This can be done by collecting the mobile number from user before showing the parking area map and verifying the mobile number.

aditionally this mobile number can be used by Shopping mall or airports to give latest offers and discounts to the user(a small act of advertisement)

2.Suppose a Car is parked for more than the usual period liek for 10days or etc then we can notify the mall management about the issue.Which could help us get through the security issues regarding Bomb or something like that.

Why IOT Car Parking istead of Manual old way
----------------------------------------------
The manual old way makes burdern to the users to find the parking space.And if he has a flight to catch and he cannot find a free lot to park the car that would be a big miss..to overcome this problem and save the users time we need to opt this method.

The old way needs Paper printed token which would cost the mall or airport around Rs.1000-Rs.10,000 per month but the IOT method has no printed paper so the monthly maintainence charges are almost NULL.and it also help the environment by GO GREEN method by avoiding the printed papaer.

Even the security related option When a car is parked too long in the parking that way be suspicious.which cannot be detected in the manual way and can be done in old way.

what is the cost
-----------------------
My Cost for sensing 3 parking slots was around Rs-1000

but when we go to bulk Eg- for parking area with 100 parking slots it would cost around 15,000 and for additional 1 unit parking space it costs extra RS.200


Requiremnts:
---------------
Hardware Requirements:
-------------------
1 Ardunio UNO


3 Ultra sonic Sensors


1 set of male to female wires


1 bread board



Software Requirements:
---------------------
Ardunio IDE


Pyhton 2.7 with pySerial


Local Server using XAMMP 


Steps to Run:
-------------
Make connections to Ardunio and Ultra sonic sensors with help of jumo wires and bread board


Dump the ardunio file to the board using IDE


run ArdunioToPythonSQL.py  with python (2.7 only),Make sure the XAMMP is running with APache and MySql running


now the table values gets updated as the sensors input change,and that change would be reflected back to index.php


