PHPIntro Intermediate Midterm - Part 1
======================================

Instructions
------------

Copy this text file to a file named YourName_Midterm_Part1.txt.
For example, JoeMcCullough_Midterm_Part1.txt. You will provide your answers to
the problems in the "Answer:" sections indicated.

This portion of the test is to be completed **without notes**. Notes include

* previous assignments
* examples from in class
* anything from the internet
* etc

You are not allowed to execute php code in any form while taking this portion of
the test. This includes

* from the browser
* from the command line
* from PHPStorm

After you have completed this portion of the midterm, attach the .txt file
in an email to the following addresses:

* samir@austincodingacademy.com
* joe@austincodingacademy.com

Set the email subject as `PHP Intermediate Midterm - Part 1`

Notify a TA or the instructor when you have submitted Part 1. Part 2 will then
be emailed to you.

!!!! WARNING !!!! - You will not be able to make revisions to your answers on
Part 1 after you have started Part 2.


* Student name:

Section 0 - PHP Basics
----------------------------

### Problem

Define the following terms

a) variable

Definition:

b) constant

Definition:

c) operator

Definition:

d) operand

Definition:

e) statement

Definition:

f) expression

Definition:

g) syntax error

Definition:

h) relative path

Definition:

i) absolute path

Definition:

j) static website

Definition:

k) dynamic website:

Definition:

### Problem

What is the role of the browser?

Answer:

### Problem

What is the role of PHP?

Answer:

### Problem

Briefly explain the processes that take place when a php file is requested from
the browser.

Answer:







Section 1 - Basic Data types
----------------------------

### Problem

Define the following terms

a) cast

Definition:

b) dynamic typing

Definition:

### Problem

List the basic (scalar) data types in PHP. Provide 2 example values for each
type listed.

Answer:

### Problem


### Problem

When casting from a float to an int, what is the expected behavior?

Answer:

### Problem

What is the basic data type that best represents each object/scenario?

a) contents of an email

Answer:

b) boxes of pizza

Answer:

c) number of donations a non-profit has received

Answer:

d) miles driven -

Answer:

e) is the account balance larger than the charge requested?

Answer:

f) number of students in a class

Answer:

g) is it raining outside?

Answer:

h) percent increase in stock value

Answer:


### Problem

For each of the following expressions, list the value of the expression and the
data type of the value.

a) 5 + 10

Answer:

b) (int) $x == $x

Answer:

c) 5.0 + 10

Answer:

d) "Number of siblings: " . $num_siblings

Answer:

e) 5 >= 2

Answer:

f) (int) 5.5 + 3.9

Answer:

f) (int) (5.5 + 3.9)

Answer:

g) "joe" == "JOE"

Answer:

Section 2 - Variables
---------------------

### Problem

Observe the following expression

    <?php

    $y = 10 + ($x = 5);

    ?>

a) What is the value of $x?

Answer:


b) What is the value of $y?

Answer:


c) Explain this behavior

Answer:


### Problem

Come up with an example variable name and value for the following applications.

a). Whether it is raining outside or not

Answer:


b) The user's average typing words per minute is 56

Answer:


c) It's 98.6 degrees outside

Answer:


d) The user's social security number is 555442232

Answer:

### Problem

Create 5 separate variables, with each individual variable representing a
component of a date (for example, the day of the week). Provide example values
for these variables.


Section 3 - Conditionals
------------------------

### Problem

Describe the general form of an `if`/`else if`/`else` statement

### Problem

What will the following code print to the screen?

    <?php

    $x = 10;
    $y = true;

    if($x > 10){
        if($x == 10 && $x % 2 == 0){
            echo "$x is even and equal to 10";
        }
    }
    else if($y){
        echo '$y was true';
    }
    else if($x == 10){
        echo '$x was 10';
    }
    else{
        echo "Nothing happened";
    }

    ?>

Output:

### Problem

What will the following code print to the screen?

    <?php

    $x = 10;
    $y = true;

    if($x == 10 && $x % 2 == 0){
        if($x > 10){
            echo "$x is even and equal to 10";
        }
    }
    else if($y){
        echo '$y was true';
    }
    else if($x == 10){
        echo '$x was 10';
    }
    else{
        echo "Nothing happened";
    }

    ?>

Output:

### Problem

How are the following conditional statements different? What is the significance
of this difference?

    if($cond1){
        // Do stuff if $cond1 is true
    }
    else if($cond2){
        // Do stuff if $cond2 is true
    }

vs


    if($cond1){
        // Do stuff if $cond1 is true
    }
    if($cond2){
        // Do stuff if $cond2 is true
    }

Answer:

### Problem

Observe the following code:

    <?php

    $grade = 69;
    if($grade >= 90){
        echo "A";
    }
    else if($grade >= 80 && $grade < 90){
        echo "B";
    }
    else if($grade >= 70 && $grade < 80){
        echo "C";
    }
    else{
        echo "F";
    }

    ?>

Rewrite this code, removing the redundancies currently present but retaining the
current behavior. Explain why you were able to eliminate the sections of code
you did.

Answer:






### Problem

Observe the following code:

    <?php

    $x = 15;
    if($x > 10){
        if($x % 2 == 1){
            echo '$x is even and greater than 10';
        }
    }

    ?>

Rewrite this code, removing the nested if statements but retaining the same behavior.

### Problem

Consider the following if statement:

    <?php

    if($current_balance >= $charge_amount || $overdraft_allowed){
        // do something
    }
    else{
        // do something else
    }

    ?>

If the condition of the if-statement is false, what assumptions can we make
within the else block regarding $current_balance, $charge_amount, and
$overdraft_allowed?

### Problem

Consider the following if statement:

    <?php

    if($temperature >= 80 && $condition == "sunny"){
        // do something
    }
    else{
        // do something else
    }

    ?>

If the condition of the if-statement is false, what assumptions can we make
within the else block regarding $temperature and $condition?

### Problem

Look at the below code sample.

        <?php
        if ($language == "PHP") {
            $what = "server-side scripting language";
        }
        else if ($language == "Javascript") {
            $what = "client-side scripting language";
        }
        else if ($language == "English") {
            $what = "human language";
        }
        else {
            $what = "unknown value";
        }

        echo "$language is a $what.";
        ?>

   ...Given that code sample, what will be the output if the variable `$language` has the value:

   a) "Javascript"

   Answer:


   b) "English"

   Answer:


   c) "Piglatin"

   Answer:


Section 4 - Arrays
------------------

### Problem

Define the following terms:

a) element

Answer:


b) index

Answer:


### Problem

A coworker of yours has written code of the following form:

    <?php

    $user_id_1 = 10;
    $user_id_2 = 30;
    $user_id_3 = 20;
    $user_id_4 = 90;
    $user_id_5 = 70;

    send_welcome_email($user_id_1);
    send_welcome_email($user_id_2);
    send_welcome_email($user_id_3);
    send_welcome_email($user_id_4);
    send_welcome_email($user_id_5);

    ?>

What arguments would you use to convince the coworker to implement a $user_ids
array instead of using individual $user_id_ variables?

Answer:


### Problem

Assume the array $animals is non-empty.

a) Assign the number of elements in $animals to the variable $x.

Answer:


b) What is the last index of $animals?

Answer:


c) What is the value of the last element of $animals?

Answer:


### Problem


Consider the following array

    $x = [2,0,1,4,3];

What are the values of the following expressions?

a) 2 * $x[0]

Answer:


b) $x[0] * $x[0]

Answer:


c) $x[count($x)-1]

Answer:


d) $x[count($x)-2] + $x[count($x) - count($x)]

Answer:


e) $x[$x[0]]

Answer:


Section 5 - Associative Arrays
------------------------------

### Problem

Define the following terms


a) key

Answer:


b) key-value pair

Answer:


### Problem

For the following array, write code that could be used to retrieve the requested values within the array:

    $patients = array(
        array(
            'name' => 'Kurt Vonnegut',
            'illness' => 'Sore Throat',
            'admittance_time' => '04:30 PM'
        ),
        array(
            'name' => 'Noam Chomsky',
            'illness' => 'Twisted Ankle',
            'admittance_time' => '01:30 AM'
        ),
        array(
            'name' => 'Hacker McHackerson',
            'illness' => 'Carpel Tunnel',
            'admittance_time' => '10:30 PM'
        )
    )

a) 'Sore Throat'

Answer:


b) '01:30 AM':

Answer:


c) 'Hacker McHackerson':

Answer:


### Problem

Suppose we are given the following user information from querying a social network database:

Query results:

    app_user Table
    +----+------------+------------------+--------------+
    | id | profile_id | email            | join_date    |
    +----+------------+------------------+--------------+
    |  1 |          5 | john@example.com | Feb 13, 2012 |
    |  4 |         15 | jack12@yahoo.com | Mar 01, 2013 |
    | 10 |         97 | meghan@yahoo.com | Sep 22, 2015 |
    +----+------------+------------------+--------------+

We can read the first row as "The user with id 1 has a profile_id of 5, an email
of john@example.com, and a join_date of Feb 13, 2012"

Define an array $users representing the information contained in the query
results. If your array is structured correctly, the following expressions will
be true:

* $users[4]['email'] == 'jack12@yahoo.com'
* $users[10]['profile_id'] == 97

Answer:







Section 6 - Loops
-----------------

### Problem

Precisely define the structure of a for loop.

Answer:



### Problem

Precisely define the structure of a while loop.

Answer:


### Problem

a) In general, when would a while loop be preferred over a for loop?

Answer:


b) Provide an example scenario where using a while loop may be preferred over a
using for loop

Answer:


### Problem

Precisely define the structure of a foreach loop.

Answer:


### Problem

Why is it generally preferred to use a foreach loop to iterate over an array?

Answer:


### Problem

Observe the following array definition:

    $nums = [5,3,9,12,6];

Create a foreach loop that would print out each element of $nums on its own line
in the browser.

Answer:




### Problem

Provide an example scenario where iterating over an array with a for loop may
be preferred over iterating over an array with a foreach loop.


### Problem

The built in php function `mysql_fetch_assoc` will fetch a row from a query
result and return the row as an associative array. If no more rows are available
to be fetched from the query result, the `mysql_fetch_assoc` function returns
boolean FALSE.

Observe the following PHP code, which demonstrates a common idiom for iterating
through a query result.

    <?php

    // Make a MySQL Connection
    $query = "SELECT * FROM example";

    $result = mysql_query($query) or die(mysql_error());


    while($row = mysql_fetch_assoc($result)){
        echo $row['name']. " - ". $row['age'];
        echo "<br />";
    }

    ?>

Explain precisely how the loop header `while($row = mysql_fetch_assoc($result))`
allows us to iterate over each result from the query.

Answer:



Section 7 - Functions
---------------------

### Problem

Explain the difference between a function definition and a function call

Answer:


### Problem

What is the primary purpose of a return statement in a function? Beyond its
primary purpose, what is an additional consequence of using a return statement
in a function?

Answer:


### Problem

What will the following program print?

    <?php

        function say_a(){
            echo "A";
        }
        function say_b(){
            say_a();
            echo "B";
        }
        function say_c(){
            say_a();
            say_b();
            echo "C";
        }

        say_c();
        say_c();

    ?>

Answer:




### Problem

What will the following program print?


    <?php

        function overwrite($x, $y){
            $x = 10;
            return $x + $y;
        }

        $x = 5;
        $y = 10;

        echo "x: $x<br>";
        echo "y: $y<br>";
        echo overwrite($x, $y);

    ?>

Answer:


### Problem

Observe the following true PHP expressions:

* 1 % 2 == 1
* 2 % 2 == 0
* 3 % 2 == 1
* 4 % 2 == 0
* 5 % 2 == 1
* 6 % 2 == 0
* 7 % 2 == 1
* 8 % 2 == 0

With these expressions in mind, create a function called is_even that meets
the following conditions:

1. The function takes a single argument, which will be an integer
2. The function should return true if that integer is even
3. The function should return false if that integer is odd

Answer:






Section 8 - Object Oriented Programming
---------------------------------------

### Problem

Define the following terms

a) constructor

Definition:


b) object

Definition:


c) property

Definition:


d) method

Definition:


e) member

Definition:


### Problem

a) Explain the difference between an instance method and a static method

Answer:


b) Provide an example use case for a static method

Answer:


c) Provide an example use case for an instance method

Answer:


### Problem

Provide an example scenario demonstrating the usefulness of a setter method (as
opposed to directly assigning a value to a property via $obj->property = val)

Answer:



### Problem

Explain what `$this` represents in an instance method definition.

Answer:



