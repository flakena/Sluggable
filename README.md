# Slugable
Simple way to generate slug for your URLs.

##What is slug
A slug is a simplified version of a string, typically URL-friendly. The act of "slugging" a string usually involves converting it to one case, and removing any non-URL-friendly characters (spaces, accented letters, ampersands, etc.). The resulting string can then be used as an identifier for a particular resource.

##Installation
>NOTE : Import the Sluggable class into your project.
#####use php require statement :

``
 require('you_path/Sluggable/sluggable.php');
``
#####use php include statement :

``
 include('you_path/Sluggable/sluggable.php');
``
#Usage
After importing class, usage is very simple just execute the function from Sluggable Class:

``
Sluggable::make('String which is for slug');
``
#####Output 
``
string-which-is-for-slug
``


