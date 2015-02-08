Basic-PHP-Assignment
====================
In this assignment you will create some basic PHP functions and generate some simple HTML using PHP.

Notation: "Blah [foo|bar] blah" means that the this should either be "Blah foo blah" or "Blah bar blah" depending on context.

Directory Structure
-------------------
You should have the following directory structure:

  - assignment4-part1
    - src //Your files go in here
    - log.txt //Work log file

multtable.php
-------------
This file should accept 4 parameters passed via the URL in a GET request.

  - min-multiplicand
  - max-multiplicand
  - min-multiplier
  - max-multiplier

It should check than the min is in fact less than or equal to the max multiplicand and multiplier respectively. If it is not, it should print the message "Minimum [multiplicand|multiplier] larger than maximum.". It should also check that the values returned are integers for each parameter. If it is not it should print 1 message for each invalid input "[min-multiplicand...max-multiplier] must be an integer.". It should check that all 4 parameters exist for each missing parameter it should print "Missing parameter [min-multiplicand ... max-multiplier].".

If all of the above conditions are met, it should produce a multiplication table that is (max-multiplicand - min-multiplicand + 2) tall and (max-multiplier - min-multiplier + 2) wide. The upper left cell should be empty. The left column should have integers running from min-multiplicand through max-multiplicand inclusive. The top row should have integers running from min-multiplier to max-multiplier inclusive. Every cell within the table should be the product of the corresponding multiplicand and multiplier.

To accomplish the above task you will want to work with loops to dynamically create rows and within each row, loop to create the cells. It should output as a valid HTML5 document.

loopback.php
------------
This file should accept either a GET or POST for input. That GET or POST will have an unknown number of key/value pairs. The page should return a JSON object (remember, this is almost identical to an object literal in JavaScript) of the form `{"Type":"[GET|POST]","parameters":{"key1":"value1", ... ,"keyn":"valuen"}}`. Behavior if a key is passed in and no value is specified is undefined. If no key value pairs are passed it it should return `{"Type":"[GET|POST]", "parameters":null}`. You are welcome to use built in JSON function in PHP to produce this output.

login.php, content1.php and content2.php
-------------------------
login.php should have a form where a user can enter a username. It should have a button that says "Login". Upon clicking the login button the page should POST the username to the page content1.php. The username should be posted via a parameter called `username`. If the username is an empty string or null, content1.php should display the message "A username must be entered. Click here to return to the login screen.". The text 'here' should be a link that links back to login.php. If the username is any other string it should display the text "Hello [username] you have visited this page [n] times before. Click here to logout.". n should display 0 on the first visit, 1 on the 2nd and so on. The text 'here' should log the user out, destroying the session, and return them to the login screen.

If the user navigates away from the page and returns, the session should persist. The user may not navigate back via a POST. This is OK, the count should persist. The POST is only needed for the initial login.

If a user tries to access either content1.php or content2.php without going through the login page at some previous point in time the user should should simply be redirected back to login.php. There are different ways to accomplish this. One might be to set a variable when a session is started the 'correct' way and check if that variable exists when loading the page.

content1.php must have a link to content2.php that is displayed only after a user has logged in (this includes subsequent visits not from login.php). content2.php should have a link back to content1.php. Both content1.php and content2.php should require that a user at some point logged in to access them. Otherwise they should redirect back to login.php.

Work Log
--------
In order to be eligible to receive an A you must submit a work log. It will not contribute points directly to the assignment, but without it the maximum grade you will be eligible for is an 89%. The purpose is to allow me to tune the difficulty of assignments to ensure that you are getting the amount of practice needed without spending too much time on any given topic.

The format is as follows:

```
Start: Wed, 7 Jan 2015 21:42:26 -0800
End: Wed, 7 Jan 2015 22:42:26 -0800
Tasks: During this period I drew a diagram of the classes I will be using to implement the message passing portion of the assignment.

Start: Fri, 9 Jan 2015 18:00:00 -0800
End: Fri, 9 Jan 2015 20:42:26 -0800
Tasks: During this period I debugged for 1 hour to find a type and implement the send function of the cleint.
```

You can get most of this information from the git log if you run:
`git log --pretty=format:"Start: %nEnd: %ad %nTasks: %s" --date=rfc`
You just need to fill in the Start: time. Use the same date format. I would suggest copying and pasting the End time and just editing the time (or day if you went through midnight in a work session).

Have one entry per work session.

Put this log in log.txt.
