<?php
  $title = "ACM @ PSU - Events Schedule";

// put stuff in here to get added to this specific page's head section
function head_content()
{
?>
  <style type="text/css">
.small	{font-size: 8pt;}
  </style>

  <script type="text/javascript">
  </script>
<?php
}

// put stuff in here to get it displayed on the page
function main_content()
{
?>
    <h2>Events Schedule</h2>

    <!--<p>This Friday (2/15/2013):<br />
    <b>12 Hours with Google Dart</b></p>

    <p><b>Description</b><br />
A high-level overview of the characteristics of Google's new web scripting language, from the perspective of a student who learned to use the language in under 12 hours. Does Dart have a chance to become a viable and heavily adopted alternative to JavaScript? The history, philosophy and intended purpose of the language will be discussed, and comparisons will be made to other languages and frameworks.</p>

    <p><b>About the speaker:</b><br />
Devin Quirozoliver is a senior undergraduate student in the Computer Science program at Portland State University. His interests include languages, user interface and wearable computing.</p>-->

    <!--<p>This Friday (2/22/2013):<br />
    <b>Hadoop Hears a Who</b></p>

    <p><b>Description</b><br />
Hadoop is an important batch data processing framework in use by companies of all sizes. It has a very approachable architecture and can be applied to a large group of modern computing problems. In addition, the framework supports an implementation of mapreduce which allows users to run jobs on any size cluster to fit their data size. Come learn about the architecture of this framework, management of the cluster, and how to develop mapreduce jobs.</p>

    <p><b>About the speaker</b><br />
Dan Colish is a Core Data Engineer at Urban Airship. He is also a maintainer and active open source developer for Xapian and other smaller projects. He resides in Portland with his family and enjoys snowshoeing and hiking around Mt. Hood.</p>-->

    <!--<p>This Friday (3/1/2013):<br />
    <b>Write your own Bayesian Classifier: An Introduction to Machine Learning</b></p>

    <p><b>Description</b><br />
    Through the implementation of an honest-to-goodness Bayesian classifier, we'll tour the major topics of supervised machine learning: tokenization, feature selection and vectorization, model training and tuning, and execution. Time permitting, we'll touch on other techniques and topics.</p>

    <p><b>About the speaker:</b><br />
    John Melesky's been programming on the web since gopher was a legitimate competitor. He is the team lead for the Analytics team at Janrain, where he gets to get his hands covered in all sorts of interesting data.</p>-->

    
    <!--<p>This Friday (3/8/2013):<br />
    <b>Overview of .NET C# 4.5</b></p>

    <p><b>Description</b><br />
    This is a high-level overview of the capabilities and uses of C# 4.5 and the .NET framework, from a student, for students. Topics covered will include concurrency and multi-threading, lambda expressions and anonymous functions, LINQ, a basic GUI demonstration, regular expressions, and more. Comparisons to C++ will be made as well. Some mathematical models will be shown if time permits.</p>

    <p><b>About the speaker:</b><br />
    Sean Walsh (AKA Azadi) is a senior undergraduate student in the Computer Science program at Portland State University. His interests include systems programming, databases, and machine learning.</p>-->

    <p>This Friday (3/15/2013) is at the end of dead week. We will have pizza, but no tech talk.</p>


    <iframe src="https://www.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=psuacm%40cs.pdx.edu&amp;color=%23B1440E&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="600" height="400" frameborder="0" scrolling="no"></iframe>

    <p>
      Sign up for the
      <a href="https://mailhost.cecs.pdx.edu/cgi-bin/mailman/listinfo/acm-members">ACM Mailing List</a>
      to get messages about upcoming events.
    </p>
<?php
}
  include 'scripts/body.php';
?>
