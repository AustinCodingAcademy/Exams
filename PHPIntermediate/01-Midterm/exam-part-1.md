PHP Intermediate Midterm
========================

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


Consider the following array

    $x = [2,0,1,4,3];

What are the values of the following expressions?


Section 5 - Functions
---------------------

Section 6 - Code Analysis and Debugging
---------------------------------------
