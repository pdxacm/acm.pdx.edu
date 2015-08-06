# acm.pdx.edu

Website of ACM@PSU [http://acm.pdx.edu](http://acm.pdx.edu)

[![Travis Build Status](https://travis-ci.org/pdxacm/acm.pdx.edu.svg?branch=master)](https://travis-ci.org/pdxacm/acm.pdx.edu/)

#How do I make a new page?

Create a copy of template.php named whatever you want as long as it ends with ".php". Start editing your newly created file with vim or whatever text editor you like. The page is created by running body.php which can be found in the scripts directory, as such make sure the include statement at the bottom of the page points to body.php or the page wont work.

#My page comes up blank?

Make sure the page's permissions are set  to read and executable by all, otherwise the page wont work. If that doesn't work make sure your page's include statement is pointing to body.php and that body.php has the needed permissions to run as well.
