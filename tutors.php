<?php
  $title = "ACM @ PSU - Tutor's Schedule";

// put stuff in here to get added to this specific page's head section
function head_content()
{
?>
  <style type="text/css">
td	{width: 2.0in;}
  </style>

  <script type="text/javascript">
  </script>
<?php
}

// put stuff in here to get it displayed on the page
function main_content()
{
?>
        <h2>ACM Tutors (Spring 2013)</h2>

        <p>The ACM provides supplementary CS tutoring services for the college of engineering.
        Tutors can be found in FAB 88-02.
        Below is a table of names and times the ACM tutors are available.
        If you would like to volunteer to be a tutor, <a href="contact.php">contact us</a>  or show up to one of our <a href="events.php">events</a>.
        Volunteers need to have passed CS 163 (Data Structures) or its equivalent.
        Most volunteers sign up for an hour or two a week, depending on what fits their schedule.</p>

        <table>
          <tr>
            <th></th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
          </tr><tr>
            <td>11-12</td>
            <td>Alex (Bowzr)</td>
            <td></td>
            <td>Alex (Bowrz)</td>
            <td></td>
            <td></td>
          </tr><tr>
            <td>12-1</td>
            <td>Alex (Bowzr)</td>
            <td></td>
            <td>Alex (Bowzr)</td>
            <td></td>
            <td></td>
          </tr><tr>
            <td>1-2</td>
            <td></td>
            <td></td>
            <td>Aaron (Alevar)</td>
            <td></td>
            <td></td>
          </tr><tr>
            <td>2-3</td>
            <td>Hao Wu</td>
            <td>Enigma</td>
            <td></td>
            <td>Stephan</td>
            <td>Max (Slim)</td>
          </tr><tr>
            <td>3-4</td>
            <td>Hao Wu</td>
            <td>Jesse H</td>
            <td></td>
            <td>Stephan</td>
            <td>Max (Slim)</td>
          </tr><tr>
            <td>4-5</td>
            <td></td>
            <td>Jesse H</td>
            <td>Philip (DrBop)</td>
            <td>Lindsay</td>
            <td></td>
          </tr><tr>
            <td>5-6</td>
            <td></td>
            <td>Philip (DrBop)</td>
            <td></td>
            <td>Lindsay</td>
            <td></td>
          </tr>
        </table>
<?php
}

  include 'scripts/body.php';
?>
