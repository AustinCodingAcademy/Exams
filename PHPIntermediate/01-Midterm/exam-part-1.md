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

### Problem 1

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

### Problem 2

What is the role of the browser?

Answer:

### Problem 3

What is the role of PHP?

Answer:

### Problem 4

Briefly explain the processes that take place when a php file is requested from
the browser.

Answer:







Section 1 - Basic Data types
----------------------------

### Problem 5

Define the following terms

a) cast

Definition:

b) dynamic typing

Definition:

### Problem 6

List the basic (scalar) data types in PHP. Provide 2 example values for each
type listed.

Answer:

### Problem 7


### Problem 8

When casting from a float to an int, what is the expected behavior?

Answer:

### Problem 9

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


### Problem 10

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

### Problem 11

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


### Problem 12

Come up with an example variable name and value for the following applications.

a). Whether it is raining outside or not

Answer:


b) The user's average typing words per minute is 56

Answer:


c) It's 98.6 degrees outside

Answer:


d) The user's social security number is 555442232

Answer:

### Problem 13

Create 5 separate variables, with each individual variable representing a
component of a date (for example, the day of the week). Provide example values
for these variables.


Section 3 - Conditionals
------------------------

### Problem 14

Describe the general form of an `if`/`else if`/`else` statement

### Problem 15

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

### Problem 16

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

    ?>

Output:

### Problem 17

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

### Problem 18

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






### Problem 19

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

### Problem 20

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

### Problem 21

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

### Problem 22

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

### Problem 23

Define the following terms:

a) element

Answer:


b) index

Answer:


### Problem 24

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


### Problem 25

Assume the array $animals is non-empty. The following questions should be
answered for the array in general terms. You do not need to see the contents
of the array in order to answer the questions.

a) Assign the number of elements in $animals to the variable $x.

Answer:


b) What is the last index of $animals?

Answer:


c) What is the value of the last element of $animals?

Answer:


### Problem 26


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

### Problem 27

Define the following terms


a) key

Answer:


b) key-value pair

Answer:


### Problem 28

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



Section 6 - Loops
-----------------

### Problem 29

Precisely define the structure of a for loop.

Answer:



### Problem 30

Precisely define the structure of a while loop.

Answer:


### Problem 31

a) In general, when would a while loop be preferred over a for loop?

Answer:


b) Provide an example scenario where using a while loop may be preferred over a
using for loop

Answer:


### Problem 32

Precisely define the structure of a foreach loop.

Answer:


### Problem 33

Why is it generally preferred to use a foreach loop to iterate over an array?

Answer:


### Problem 34

Observe the following array definition:

    $nums = [5,3,9,12,6];

Create a foreach loop that would print out each element of $nums on its own line
in the browser.

Answer:




### Problem 35

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
allows us to iterate over each result from the query. How can the return value
of `mysql_fetch_assoc` stop the loop if it's being assigned to `$row`?

Answer:



Section 7 - Functions
---------------------

### Problem 36

Explain the difference between a function definition and a function call

Answer:


### Problem 37

What is the primary purpose of a return statement in a function? Beyond its
primary purpose, what is an additional consequence of using a return statement
in a function?

Answer:


### Problem 38

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




### Problem 39

What will the following program print?


    <?php

        function overwrite($x, $y){
            $x = 10;
            return $x + $y;
        }

        $x = 5;
        $y = 10;

        echo overwrite($x, $y);
        echo "x: $x<br>";
        echo "y: $y<br>";
        

    ?>

Answer:


### Problem 40

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

### Problem 41

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


### Problem 42

a) Explain the difference between an instance method and a static method

Answer:


b) Provide an example use case for a static method

Answer:


c) Provide an example use case for an instance method

Answer:


### Problem 43

Provide an example scenario demonstrating the usefulness of a setter method (as
opposed to directly assigning a value to a property via $obj->property = val)

Answer:



### Problem 44

Explain what `$this` represents in an instance method definition.

Answer:



