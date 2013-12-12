-- Load the rational numbers library
:module + Data.Ratio

-- Do some arithmetic
2 + 2 is the same as (+) 2 2
3 / 5 is the same as (/) 3 5

-- To do exponents, use the following:
5 ^ 2, which evaluates to 25
-- Exercise: How would you find the area of a triangle with sides b = 5
-- and h = 10? Remember that area of a triangle is A = 1/2 * b * h


-- Dealing with negative numbers:
-- 5 + 2 evaluates to 7.
-- In C++, 5 + -2 evaluates to 3
-- In Haskell, use 5 + (-2)
-- Exercise: Try playing with negative numbers in Haskell.

--Similar to Java and C++ is the notion of boolean values.
-- Try to fill in the values of an AND truth table as follows:
-- ^ | T F
----------
-- T | T F
-- F | F F

-- How about an OR table?
-- v | T F
----------
-- T | T F
-- F | F F

-- Baffled? Try this:
-- True && True
-- False && False
-- True && False
-- False && True

-- The same goes for OR
-- True || True
-- False || False
-- True || False
-- False || True

-- What should the following evaluate to?
-- (True || False) && True
-- Try it for yourself.

-- Exercise: Try some other relational operators from C++ or Java, such
-- as ==, !=, >, >=, <, <=, and see what works on integers and 
-- booleans.
-- What works? What breaks?

-- Creating a list:
let a = [1, 3, 5, 7, 9]
-- This will give a list of the first 5 odd numbers.
-- Similarly, 
let b = [2, 4, 6, 8, 10]
-- will give a list of the first 5 even numbers.

-- Can you make a union of these two lists? SURE.
-- a ++ b OR b ++ a
-- The first will put all of a in the front of b, and the other will do -- just the opposite.

-- ExplicitTypes (declaration and initialization)
3 :: Double
-- Yields a decimal type containing a value of 3.0
-- Whereas
3 :: Int
-- Yields an integer type containing a value of 3
-- Other examples
True :: Bool
c :: Char
s :: String

-- Recalling the last interpreted result
-- You can recall the last result using 'it'
-- Exercise: Using it
-- Enter the following lines of code into Haskell
5
it + 2
-- This will yield 7

-- Exercise: Using it for analysis (Enter the following code)
True
it && True
it && False
it || False
it || True

-- Notice that this is inadvertently making a truth table like we did
-- previously.

-- That's all that I have for this brief introductory tutorial. 
-- Please consider signing up for Mark Jones' CS457/557 class
-- to learn more about Haskell programming or consider joining an
-- ACM Open Hack group on Friday afternoons at 4:30PM in the
-- ACM lounge.
-- More questions? Ask Erik, and he can offer more tutorials.