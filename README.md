# Week 5 Lab
Clone this repo into your www folder under laragon. In the command prompt cd into the \laragon\www folder. Make sure that you are in the correct folder and that laragon\www appears in the command prompt. Type git clone your-repo-url (Get your repo url from github after creating the repo). Then ***cd*** into the folder you have just cloned by typing ***cd week5Lab-yourgithubid***. Once you are in the correct folder, keep this command window open so you can type in your git commands as required.

This lab includes a number of steps to create a new booking in the Tennisclub database. By the end of this lab students will be able to:
- use the PHP include statement to incorporate code from another file
- use a loop to create a HTML dropdown based on data from a database
- create a UI that allows for capturing data to be stored in a DB based on dynamically changing data from the DB

# Part 1
Make three modifications to the newBooking.html form. 
- Change the method on the form from GET to POST. 
- Change the action on the form so that when the Submit button is pushed the form data will be submitted to a PHP file called createNewBooking.php. 
- Add two input boxes to the HTML form one which gets the members ID for the booking and a second which gets the court ID make sure these input boxes use the names memberID and courtID respectively. Note the capitalisation on these names.
- Modify the createBooking.php file so that it contains an include statement which pulls in code from a file called dbcon.php. This file should contain your database credentials.
When you have completed these changes try to create a new tennisclub booking. Use memberID = 2 and courtID = 3. To see if it worked type ***Select * from booking*** in the HeidiSQL database application. Is your booking there? Try it again with values memberID = 13 and courtID = 15. What happened? Why was these. Write a comment in the PHP code of createNewBooking.php which explains why these numbers don't work. Commit and push your changes.

# Part 2
Copy the file called showAllMembers.php and rename the new file createMemberDropdown.php. Replace the credentials and the database connection lines of code in the file with a single line that includes all this code from the pre-existing file in your repo called dbcon.php. Modify this code so that rather than producing a HTML table, the code produces a HTML dropdown using the **&lt;SELECT&gt;** tag. Make sure that your that your select tag uses the name ***memberID***. To test and see your dropdown visit http://localhost/week5lab-yourghithubid/createMemberDropdown.php. You should see a dropdown list of the members in the database.






