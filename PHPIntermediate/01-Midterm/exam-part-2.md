PHPIntro Intermediate Midterm - Part 2
======================================

Instructions
------------

This portion of the test is to be completed with full access to your notes and
the internet. Use all of your resources to complete these problems.  Copying and
pasting full solutions to the answer found online, however, is not allowed.

Create a new php file called Firstname_Lastname_Part2.php. For example,
`Joseph_McCullough_Part2.php`. You will place the code that solves the problem
below into this document.

After you have completed this portion of the midterm, attach the php file in an
email and send to:

* samir@austincodingacademy.com
* joe@austincodingacademy.com

Set the email subject as `PHP Intermediate Midterm - Part 2`

If you do not complete this portion of the midterm in class, please turn this
portion in by Thursday before class.

Problem - Set implementation
----------------------------

### Preface

An array is an ordered collection of elements which may contain repeated
values. For example,

    [5,2,3,5,5,2];

Since arrays are ordered, we can sort them, like so

    [2,2,3,5,5,5];

And since arrays are ordered, these two arrays above are not considered equal.

A Set, in contrast, is an unordered collection of unique elements. For example,

    {5,2,3} == {2,3,5} == {3,5,2} == {3,2,5}

The following would not be a valid Set since it contains repeated elements.

    {5,2,3,3}

However, PHP does not contain built in support for Sets. Our notation of {5,2,3}
is hypothetical - it does not actually work in PHP. Your task will be to create
a Set class that uses Arrays to emulate Set behavior.

### Set behavior and operations

Sets are generally used for the following purposes:

* To determine if an element is contained within a Set (containment)
* To determine what element two Sets have in common (intersection)
* To determine what results when two Sets are combined (union)
* To determine what elements exist in one Set but not in another (difference)
* How many elements are in the Set (count)

To demonstrate, consider the following two Sets:

    A = {1,6,8,5,3}
    B = {2,4,6,8}

#### Containment

* Is 1 contained in A? true
* Is 4 contained in A? false
* Is 4 contained in B? true
* Is 5 contained in B? false

#### Intersection

The intersection of two Sets is defined as the Set of elements that both Sets
share.

For our example Sets, the intersection of the Sets A and B is the Set {6, 8},
since those are elements both Sets have in common. (So the result of the
intersection of two Sets is itself a Set)

Note that intersection is commutative - This means the intersection of A and B
is the same as the intersection of B and A.

#### Union

The union of two Sets is defined as the Set of elements that are contained in at
least one of the two Sets.

For our example Sets, the union of the Sets A and B is the Set {1,2,3,4,5,6,8},
since those are elements that are contained in at least one of the two Sets. (So
the result of the union of two Sets is itself a Set)

Note that union is commutative - This means the union of A and B
is the same as the union of B and A.

#### Difference

The difference of two Sets X and Y is the Set of elements in X that that not
exist in Y.

Note that difference is NOT commutative - This means the difference of A and B
is not necessarily the same as the difference of B and A.

For our example Sets:

* The difference of A and B is the Set {1,3,5} (since those are the elements in A that
  do not exist in B)
* The difference of B and A is the Set {2,4} (since those are the elements in B
  that do not exist in A)

#### Count

The count of a Set is how many elements are in the Set.

For our example Sets, the count of A is 5 and the count of B is 4.


### Problem

Since PHP contains no native Set type, we will create one. When using resources
online, please do not look up "PHP Set implementation" or "How to make Sets with
PHP", as that defeats the purpose of the exercise.

Create a Set class that fulfills the following specifications:

* The constructor should optionally take in an Array and create a Set based on
  the array elements. Otherwise the Set should start off empty.
* The class should provide a `has($val)` instance method that returns boolean
  True if the Set contains the value $val, false otherwise.
  a value to the Set.
* The class should provide a `count()` instance method that returns the number
  of elements in the Set.
  the value $val to the Set.
* The class should provide an `add($val)` instance method that allows you to add
  the value $val to the Set.
* The class should provide a `remove($val)` instance method that allows you to
  remove the value $val from the Set.
* The class should provide a `intersection($Set)` instance method that returns a
  new Set representing the intersection of the current Set with $Set
* The class should provide a `union($Set)` instance method that returns a
  new Set representing the union of the current Set with $Set
* The class should provide a `difference($Set)` instance method that returns a
  new Set representing the difference of the current Set with $Set
