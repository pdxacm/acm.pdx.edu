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
.about_td td {border: 1px solid #fff;}
.about_td td a {text-decoration: none;}

.about_left	{float: left;}
.about_right	{float: left; margin-left: 1cm;}
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
		      <a href="http://www.pdx.edu/">Portland State University</a> 
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
		      Our group often hangs out in the Portland State University Fourth Avenue Building (FAB), Room 88<br />
		      1900 SW Fourth Avenue<br /> Portland, Oregon 97201<br />
		      (<a href="http://maps.google.com/maps?q=1900+SW+Fourth+Avenue%2C+Portland+Oregon+97201+">Google map</a>)
		      (<a href="http://www.fap.pdx.edu/floorplans/detail2.php?buildingID=12">FAB maps</a>)
		    </td>
		  </tr>

		  <tr>
		    <td class="about_td" colspan="2">
		      <b>Past Members</b><br />
		      <br />

		      <div class="about_left">
		      <b>ACM officers for 2011-2012</b>
		      <table>
		        <tr>
		          <td>Chair</td>
		          <td>Thomas Schreiber<!-- - AKA Ubiquill --></td>
		        </tr><tr>
		          <td>Chair</td>
		          <td>Damon Liang<!-- - AKA Lycopene --></td>
		        </tr><tr>
		          <td>Chair</td>
		          <td>Isaac Archer <!-- proxy.of.the.void at gmail.com --></td>
		        </tr><tr>
		          <td>Vice Chair</td>
		          <td>Alexander Steiert<!-- - AKA Magic --></td>
		        </tr><tr>
		          <td>Treasurer</td>
		          <td>Jameson McCowan<!-- AKA jameson --></td>
		        </tr><tr>
		          <td>Secretary</td>
		          <td>Joseph Lee<!-- - AKA monleezy --></td>
		        </tr><tr>
		          <td>Events</td>
		          <td>William Van Hevelingen<!-- AKA blkperl --></td>
		        </tr>
		      </table><br />
		      <br />

		      <b>ACM officers for 2010-2011</b>
		      <table>
		        <tr>
		          <td>President</td>
		          <td>Cory Kolbeck<!-- - AKA cbeck--></td>
		        </tr><tr>
		          <td>Vice President</td>
		          <td>Dan Colish<!-- - AKA dcolish--></td>
		        </tr><tr>
		          <td>Secretary</td>
		          <td>Oscar Sanabria<!-- - AKA carrbs--></td>
		        </tr><tr>
		          <td>Treasurer</td>
		          <td>Jon Harker<!-- - AKA jesusaurus--></td>
		        </tr><tr>
		          <td>Activities Coordinator</td>
		          <td>Spencer Krum<!-- - AKA nibalizer--></td>
		        </tr>
		      </table><br />
		      </div>

		      <div class="about_right">
		      <b>ACM officers for 2009-2010</b>
		      <table>
		        <tr>
		          <td>President</td>
		          <td>Reid Vandewiele</td>
		        </tr><tr>
		          <td>Vice-President</td>
		          <td>Keith Parker</td>
		        </tr><tr>
		          <td>Secretary</td>
		          <td>Louis Ledesma</td>
		        </tr><tr>
		          <td>Treasurer</td>
		          <td>David Stelter</td>
		        </tr>
		      </table><br />
		      <br />

		      <b>ACM officers for 2008-2009</b>
		      <table>
		        <tr>
		          <td>President</td>
		          <td>Hunter Haugen</td>
		        </tr><tr>
		          <td>Vice-President</td>
		          <td>Cody Herriges</td>
		        </tr><tr>
		          <td>Treasurer</td>
		          <td>Loren Davis</td>
		        </tr><tr>
		          <td>Secretary</td>
		          <td>Aaron Fellin</td>
		        </tr>
		      </table><br />
		      </div>

		      <div style="clear: both;">
		        <sub>(This record is incomplete as the chapter has existed since time immemorial.)</sub>
		      </div>
		    </td>
		  </tr>
		</table>
<?php
}

include 'scripts/body.php';
?>
