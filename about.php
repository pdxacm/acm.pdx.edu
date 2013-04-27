<?php
$title = "ACM @ PSU - About Us";

// put stuff in here to get added to this specific page's head section
function head_content()
{
?>
  <style type="text/css">
.about_table {border-collapse: separate;
	border-spacing: 10px;}

.about_td {padding: 5px;
	width: 50%;
	background: url(images/bg_td.png) repeat-x #EDEFFF;
	border-radius: 5px;
	border: 1px solid #C9D1FF;
	vertical-align: top;} 
.about_td b {color: #333;}
.about_td td {border: 1px solid #fff;}
.about_td td a {text-decoration: none;}
  </style>

  <script type="text/javascript">
  </script>
<?php
}

// put stuff in here to get it displayed on the page
function main_content()
{
?>
		<h2>About Us</h2>

		<table class="about_table">
		  <tr>
		    <td class="about_td">
		      <b>Our local Chapter</b><br />
		      We are the
		      <a href="http://pdx.edu/">Portland State University</a> 
		      student chapter of the
		      <a href="http://www.acm.org/">Association for Computing Machinery</a>.<br />
		      <br />
		      We also provide CS tutoring during the week in addition to the existing CS tutors.
		      We're open to suggestions for other things we could do as a group.
		      Have an idea? <a href="contact.php">Contact us</a>.
		    </td>
		    <td class="about_td">
		      <b>The ACM</b><br />
		      The Association for Computing Machinery is the largest international organization devoted to science and education related to computing.
		      It is a non-profit organization founded in 1947 that provides its members access to professional publications, conferences, and career resources.
		      The ACM also has student programming competitions.
		    </td>
		  </tr>
		  <tr>
		    <td class="about_td">
		      <b>Official Members</b>
		      <table>
			<tr>
			  <td>Advisor</td>
			  <td><a href="http://web.cecs.pdx.edu/~bart/">Bart Massey</a><!-- - bart at cs.pdx.edu--></td>
			</tr><tr>
			  <td>Chair</td>
			  <td>Lindsay Ergenekan</td>
			</tr><tr>
			  <td>Vice Chair</td>
			  <td>Sean Walsh<!-- - spw2 at pdx.edu--></td>
			</tr><tr>
			  <td>Treasurer</td>
			  <td>Jameson McCowan<!-- - jameson at cecs.pdx.edu--></td>
			</tr><tr>
			  <td>Treasurer</td>
			  <td>Donovan Finch</td>
			</tr><tr> 
			  <td>Secretary</td>
			  <td>Philip Coho</td>
			</tr><tr>
			  <td>Arbiter</td>
			  <td>Alexander Steiert<!-- - asteiert at cs.pdx.edu--></td>
			</tr><tr>
			  <td>Vizier</td>
                          <td>Damon Liang<!-- - damonl at cecs.pdx.edu--></td>
			</tr><tr>
			  <td>Webmaster</td>
                          <td>Harmanpreet Singh</td>
			</tr><tr>
			  <td>Events Coordinator</td>
                          <td>William Van Hevelingen<!--, wvan at cs.pdx.edu--></td>
			</tr>
		      </table>
		    </td>
		    <td class="about_td">
		      <b>PSU</b><br />
		      Portland State University is a university in downtown Portland, Oregon, United States.
		      It was founded in 1946 and is the only public university in the state that is located in a major metropolitan city.
		      <br /><br />
		      Our group often hangs out in the Portland State University Engineering Building, Room 88<br />
                      1900 SW Fourth Avenue<br /> Portland, Oregon 97201
		      (<a href="http://maps.google.com/maps?q=1900+SW+Fourth+Avenue%2C+Portland+Oregon+97201+">map</a>)
		    </td>
		  </tr>
		  <tr>
		    <td class="about_td" colspan="2">
		      <b>Past Members</b><br />
		      <sub>(Sorry for the incomplete record, we've got a lot of history to sort through still to get this list together.)</sub>
		    </td>
		  </tr>
		</table>
<?php
}

include 'scripts/body.php';
?>
