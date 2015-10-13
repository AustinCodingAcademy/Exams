PHPIntro Back End MidTerm
=========================

Section 0 - Miscellaneous
-------------------------

### Problem

For each code example, what will the code output when run?

a)

        <?php
        echo "Hello World";
        ?>

Answer:


b)

        <?php
        $which_world = "Earth";
        echo "Hello $which_world";
        ?>

Answer:


c)

        <?php
        $which_world = "Earth";
        echo 'Hello $which_world';
        ?>

Answer:


d)

        <?php
        $name = "Ryan";
        $verb1 = "code";
        $verb2 = "teach";
        $verb3 = "play music";
        echo "My name is $name, and I love to $verb1, $verb2 and $verb3!";
        ?>

Answer:


e)

        <?php
        $name = "James";
        echo "Hello! My name is" . $name;
        ?>

Answer:



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

   ...Given that code sample, what will be the output if the variable `$site` has the value:

   a) `"Javascript"`

   Answer:


   b) `"English"`

   Answer:


   c) `"Spanish"`

   Answer:


### Problem

Write PHP code to assign a value to the following variables (just pick an appropriate value):

   a) `$name`

   b) `$cityOfBirth`

   c) `$hobbies`

   d) `$favoriteMusic`


### Problem

Come up with 2 or 3 example variable names and values for the following applications,
and then use the `echo` command to print out a sentence that uses the variables' values:

   a) A calendar

   b) A discussion forum

   c) An office inventory system

   d) An email spam filter

   e) A fitness or health-monitoring app


### Problem

For the following code excerpts, find and correct the error in each one.

   a)

        <?php
        echo hello world;
        ?>

   b)

        <?php
        $colors = array('purple','brown','blue','orange');
        $favColor = $colors[4];
        echo "My favorite color is $favColor.";
        ?>

   c)

        <?php
        $x = 3;
        if $x > 3 {
            echo 'the variable $x is greater than 3';
        }
        ?>

   d)

        <?php
        $carBrands = array('Honda','Toyota','Ford','VW')
        echo "I drive a $carBrands[0].";
        ?>

   e)

        <?php
        $birthYear = 1983;
        $age = 2015 - $birthYear;
        if ($age = 21) {
            echo "Yay, you can drink alcohol now!";
        }
        ?>

   f)

        <?php
        $todo = array(
            "ASAP" => "pay taxes",
            "later" => "go surfing",
        );

        echo "I want to " . $todo[1] . " but I need to " . $todo[0] . " first!";
        ?>


Section 1 - Data types
----------------------

### Problem

For each of the following data types, provide 2 example values:

a) integer:

    1)
    2)

b) float (aka decimal numbers):

    1)
    2)

c) boolean:

    1)
    2)

d) string:

    1)
    2)

e) array:

    1)
    2)


### Problem

For each of the following situations, select the data type that best represents
the situation:

    Examples:

    Question: "The number of kids a person has"
    Answer: integer

    Question: "The name of a restaurant"
    Answer: string


1. The text of a tweet or status update

   Answer:

2. The number of pizzas to order for the office

   Answer:

3. A list of song genres to choose from for a service like Pandora or Spotify

   Answer:

4. The price of a product after tax

   Answer:



Section 2 - Variables
---------------------

### Problem

What will the following program print?

    <?php

        $x = 8;
        $y = 3;
        $x = $y;

        echo "x is $x<br>";
        echo "y is $y<br>";

    ?>

Answer:



### Problem

For each statement, create a variable assignment that clearly represents the
situation:

1. Joe's favorite hobby is going to the arcade

    <?php

        $joesFavHobby = __________________________;

    ?>

2. The capital of Texas is Austin

    <?php

        $capitals['Massachusetts'] = "Boston";
        __________________________ = "Austin";

    ?>

3. The post got 10 likes

    <?php

        _____________ = ________________;

    ?>

4. The user has 5 unread messages

    <?php

        _____________ = ________________;

    ?>

5. The class's topics include PHP, MySQL and HTML

    <?php

        _____________ = __________________________________________;

    ?>


Section 3 - Operators
---------------------

### Problem

What is the output of the following program?

    <?php

        echo "PHP is a" . "great language for " . "processing text<br>";
        echo "But you need to" . "be careful about" . " whitespace";

    ?>

Answer:


### Problem

Create two string variables `$s1` and `$s2`. Assign the concatenation of the two
strings to a variable `$s3`

Answer:


### Extra Credit Problem

Observe the following code:

    <?php
        $x = 3.4;
        $y = 3 . 4;
    ?>

What are the values of `$x` and `$y`? What is the data type of `$x`? What is the
data type of `$y`?  Explain why they are different.

Answer:




Section 4 - Getting in and out of PHP
-------------------------------------

### Problem

What do you have to type to get into PHP mode so you can type PHP code?

Answer:


What happens if you just type stuff directly into a .php file
without typing that?

Answer:


### Problem

Is the following legal PHP code? Why or why not?

    <?php

    $headline = "New iPhone is really boring";
    <h1>echo $headline</h1>

    ?>

Answer:






Section 5 - Arrays
------------------

### Problem

Explain the difference between a sequential array and an associative array

Answer:






### Problem

Define the following terms:

1) array element

Definition:



3) array key

Definition:



4) key-value pair

Definition:



5) foreach loop

Definition:



### Problem

What function can you use to see how many elements are in an array?

Answer:


Write PHP code that uses this function to figure out how many elements are in
an array called `$grades`.

Answer:



### Problem

How do you access an element of an array?

Answer:


So for example, how would you access the first element of an array called `$emails`?

Answer:



### Problem

How can you find the last element of an array?

Answer:


So for example, given an array `$hobbies`, write code that gets the last element of it.

Answer:



### Problem

Consider the following array

    $arr = [5,3,1,2,4,6];

What are the values of the following expressions?


a) `$arr[2]`


b) `$arr[1] + $arr[3]`


c) `$arr[0]`


d) `count($arr)`


e) `$arr[ count($arr)-1 ]`




### Problem

For each of the pieces of data, create an array that best represents the data.
Assign the array to an appropriately named variable.

1) The students in the class are Bob, Jill, Jack, and Jaime.

Answer:


2) In the class, Bob got a 90, Jill got a 92, Jack got an 87 and Jaime got a 95.

Answer:
        
|            
|            
|            
|            
|            
|    

3) When surveyed, the students responded with the following data:

    Bob thought the class was 10/10 effective
    and said "I enjoyed it and learned a lot!".

    Jill thought the class was 8/10 effective
    and said "It was a little easy and slow."

    Jack thought the class was 5/10 effective
    and said "It started great but got confusing."

    Jaime thought the class was 9/10 effective
    and said "It was awesome! I want to take the next class!"

Answer:
        
|            
|            
|            
|            
|            
|    
|            
|            
|    
        
### Problem

For the following array, write code that could be used to
retrieve the requested values within the array:

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

1) 'Sore Throat': ___________________

2) '01:30 AM': ___________________

3) 'Hacker McHackerson': ___________________





Section 6 - Conditionals
------------------------


### Problem

Given the following code snippet...

    <?php
    echo "I am an animal";
    if ($animal == "whale") {
        echo " and I have a spout!";
    }
    else if ($animal == "elephant") {
        echo " and I have a trunk!";
    }
    ?>

...what will it output if the value of $animal is...

* `"whale"` ?

* `"elephant"` ?

* `"dolphin"` ?




### Problem

What will the following code output?

    <?php
    $x = 5
    if ($x > 3) {
        echo "Some say the world will end in fire<br>";
    }
    if ($x < 8) {
        echo "Some say in ice<br>";
    }
    $x += 5;
    if ($x > 8) {
        echo "(Either would suffice)<br>";
    }
    ?>

Answer:



Section 7 - CSVs
----------------

### Problem

What are CSV files?  What are they used for?

Answer:


### Problem

In class, we used 2 different methods to import a CSV file into our PHP code as an array.
The 1st method we used produced a sequential array of sequential arrays.
The 2nd method was a bit more complicated but it produced a sequential array of associative arrays.

Why would we want to use the 2nd method?  Why might the associative arrays be a more useful result?
Give examples if you can.


Section 8 - Functions
---------------------

### Problem

Observe the following function:

    <?php

    function greaterOfTwo($x, $y) {
        if ($x > $y) {
            return $x;
        }
        elseif ($y > $x) {
            return $y;
        }
    }

    ?>

a) What are the inputs (a.k.a. the arguments or parameters)?

Answer:

b) What are the possible return values?

Answer:

c) What does this function do?

Answer:

d) (Extra Credit) What is the return value of `greaterOfTwo(5,5)`?

Answer:


### Problem

Given the following code snippets, create a function out of them with an appropriate name
based on what the code snippet does (a.k.a. write a Function Definition).

Then, after you've created the function definition, write an extra
line of code that actually *uses* the function (a.k.a. a Function Call).

a)

    <?php
    if ($age >= 21) {
        echo "Congrats, you can drink alcohol!\n";
    }
    else {
        echo "Congrats, you can drink chocolate milk!\n";
    }
    ?>

    Function Definition:







    Function Call:






b)

    <?php
    if (count($array) > 10) {
        echo "That's a big array!";
    }
    elseif (count($array) > 5) {
        echo "Meh, that array is kinda medium";
    }
    else {
        echo "That array is small potatoes...";
    }
    ?>

    Function Definition:




    Function Call:



Section 9: Free-Response Programming Problems
=============================================

This section can be done on a computer.  Email the answers to
`ryan@austincodingacademy.com`, `joe@austincodingacademy.com` and `clofton@austincodingacademy.com`.


### Coding Problem 1

Write PHP Code that takes an array `$greetings = array("hello", "howdy", "yo!", "what up!")`
and prints out each greeting on its own line.


### Coding Problem 2

Write PHP Code that takes an array `$nums = array(5,3,1,2,5,8);` calculates the sum,
(without using the builtin `array_sum` function), and prints out the result.


Section 10: Extra Credit
========================

### Extra Credit Problem 1

Suppose we are given the following user information from querying a social
network database:

Query results:

    USER table
    +----+------------+------------------+--------------+
    | id | profile_id | email            | join_date    |
    +----+------------+------------------+--------------+
    |  1 |          5 | john@example.com | Feb 13, 2012 |
    |  4 |         15 | jack12@yahoo.com | Mar 01, 2013 |
    | 10 |         97 | meghan@yahoo.com | Sep 22, 2015 |
    +----+------------+------------------+--------------+

We can read the first row as "The user with id 1 has a profile_id of 5, an
email of john@example.com, and a join_date of Feb 13, 2012"


a) Create an array $users representing the information contained in the query
results. If your array is structured correctly, the following expressions
will be true:

* $users[4]['email'] == 'jack12@yahoo.com'
* $users[10]['profile_id'] == 97

Answer:



b) Suppose we are making a more complex query to the same social network
database. In addition to results from the USER table, we have also been
provided with data from a related PROFILE table.

Query results:

    USER table
    +----+------------+------------------+--------------+
    | id | profile_id | email            | join_date    |
    +----+------------+------------------+--------------+
    |  1 |          5 | john@example.com | Feb 13, 2012 |
    |  4 |         15 | jack12@yahoo.com | Mar 01, 2013 |
    | 10 |         97 | meghan@yahoo.com | Sep 22, 2015 |
    +----+------------+------------------+--------------+

    PROFILE table
    +----+------------+-----------+--------------+
    | id | first_name | last_name | phone_number |
    +----+------------+-----------+--------------+
    |  5 |       John |       Doe | 512-111-2211 |
    | 15 |       Jack |   Daniels | 512-555-2323 |
    | 97 |     Meghan | McDaniels | 512-987-5434 |
    +----+------------+------------------+-------+

The two tables are structured such that the profile_id in the USER table is
associated with the id in the PROFILE table. According to this structure, the
last name of the user with id 10 is "McDaniels".

Create an array $users representing the information contained in the query
results. Each individual user in the $users array should have a 'profile' key
containing their information from the PROFILE table.

Answer:



c) Write a SQL query that gets just the first and last name out of the profile table.

Answer:


d) Write a SQL query that gets the user John Doe's profile joined with his user record.

Answer:



### Extra Credit Problem 2

Given an `$nums = array(10,7,8,3,2,7,7,4,3,7)`, write PHP code that calculates the
*mode* of the array - that is, the number most commonly occurring in the array.

*Extra extra* credit if you don't use the builtin functions `array_count_values()`
or `array_search()`!

(You can do this one on the computer and submit it via email)

