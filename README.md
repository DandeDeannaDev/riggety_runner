riggety_runner
==============

Simple Race application with database acces using the CRUD method. 

We are to do this project like the Mid-Term project. The only exception
being- we are to design the project using php-sql-html-css-scripting technologies ..ect 
INSTEAD of Visual Studio as is stated in the directions 


Complete all requirements listed below for the mid-term exam.

You are to create a road race web application. This application will allow the runner to add themselves to the race. The runner can also update their information. Finally the runner can also delete themselves from the race.

1)The database will contain the following information: table: youridRace, fields:  youridRaceID (int field), youridFirstname, youridLastname, youridphone, youridemail, youridage, youridtshirtsize. (you must use these exact field names). yourid is your ftp userid for uploading the project onto the demo web server. All fields are Text fields (except the youridRaceID field, which is int).

You can use an Access database to create and test your program. However, you must convert your code to use a SQL database before uploading it to the demo server. Your connection string must exist within your web config file with the name "myconnection". When uploading the files, do not upload your web config file. This will allow your program to use the connection string provided on the demo site.

2) When the user goes to the web site, they will have the choice of "enter race", "update my information", and "remove my information". Each of these choices can be a button.

3) A dropdown list is also present on the homepage showing all the current runners in the database. This dropdown list is populated using the same technique shown in the mid-term examples under the lessons tab. The code is placed in the page_load section as shown in the examples. The "text" field in the dropdown list will be the "Lastname" field in the database. The "value" field in the dropdown list will be the "RaceID" field. Review the mid-term examples in the lessons section to see how the program code detects what the user has selected.

4) If the user wants to be added to the race, they do not need to select anything from the dropdown box (just ignore it if they do). However, textboxes are shown on the homepage for the user to enter the required information (do not include a RaceID field that is automatically generated) before they click the add me to the race button. This information in the textboxes are placed into the database and a message is displayed indicating "Your record has been added to the race, don't forget your $25 on race day!". Make sure to include your try catch block in case there are problems.

5) If the user wants to update their information, they select the last name from the dropdown box. They then enter all the information into the textboxes (same boxes as for step 4). Once they hit the update button the information is updated in the database. The selectedvalue in the dropdown box is used in the Where clause of the SQL statement to update the correct record (see mid-term examples under lessons for an example of how this works). Make sure to display "We have updated your information. See you on race day" if the information gets updated. Include the try and catch blocks in case there is a problem.

6) If the user wants to be removed from the race, they wll select their last name from the dropdown box. They do not need to enter any information into the textboxes since only the information from the dropdown box is needed to determine the record to delete. Once they hit the delete button the selectedvalue from the dropdown box is used in the where clause of the SQL statement to delete the correct record. When the correct record is deleted, display "Your record has been deleted. Sorry you are not joining us on race day". Include a Try and Catch block in case their are errors.

7) Make sure to completely test your program and remove all errors. If you can not get a section to work correctly, and it has errors, place that code as comments. If the program does not compile (has errors) you will get more points taken off (because it is assumed that you did not properly test your program).

Do different pieces at a time, DO NOT try to write all the code for this program at one time. For example, make sure that the connection object works first (the string MUST be in the web.config file). Then code the insert method (make sure it works), then code the update method..etc.

Once you are happy with the results place ALL the files (except the web.config file) into a Assignment7 folder on the demonstration web server.

GOOD LUCK!
