#!/usr/bin/python

import serial 
import MySQLdb

#establish connection to MySQL. You'll have to change this for your database.
dbConn = MySQLdb.connect("localhost","root","sk123sk123","test") or die ("could not connect to database")
#open a cursor to the database
cursor = dbConn.cursor()

device = 'COM10' #this will have to be changed to the serial port you are using
try:
  print "Trying...",device 
  arduino = serial.Serial(device, 9600) 
except: 
  print "Failed to connect on",device    
while(1):
  try: 
    data = arduino.readline()  #read the data from the arduino
    set1 = (data[0])

   # pieces = data.split("\t")  #split the data by the tab
    #Here we are going to insert the data into the Database
    try:
      cursor.execute("update test.lotdata set status=%s where id='1'",(set1))
      print ("Inserted",data[0])
      dbConn.commit() #commit the insert
    except MySQLdb.IntegrityError:
      print "failed to insert data"
  except Exception as e:
    print "Failed to get data from Arduino!\n",e

arduino.close()
