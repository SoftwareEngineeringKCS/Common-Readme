<?php

	$page_title = "Kean Career Services";
	include ('includes/header.html');

	echo "<div class='menu_help' id='help' style='display: none;'>";
	echo "<p><b>Staff:</b><br>Administrators can set-up availability periods, maanage appointments, and view statistics. Administrators must login in order to use these features.</p>";
	echo "<p><b>Appointments:</b><br>Students can book appointments and update personal information from previous meetings.</p>";
	echo "<p><b>Check-In:</b><br>Let the office know that you are waiting for counseling. There are two options: (1) By-Appointment, you will need your student id and a confirmation code which was sent to you by email. (2) Walk-In, no appointment is needed (longer waiting time).</p>";
	echo "<center><p><< CLICK HELP TO CLOSE >></p></center>";
	echo "</div>";

?>

<script type="text/javascript">
	function showHelp() {
	    var x = document.getElementById("help");
	    if (x.style.display === "none") {
	        x.style.display = "block";
	    } else {
	        x.style.display = "none";
	    }
	}
</script>

<h1>Welcome to the Appointments Portal of Career Services</h1>
<table>
	<tr>
		<td style="border: 0px; font-size: 1.1em; width: 50%">
			<p>The Office of Career Services assists students in preparing to compete in today's changing job market, offering a multitude of services to assist students on their pathway to success. Career Development and Advancement maintains information on the latest career resources, techniques and strategies designed to meet the needs of our diverse student population. Our services are personalized and serve to empower students through each stage of their career development, from first year through graduation.</p>
			<p>Career Services help students pinpoint their interests and assist in discovering possible career paths and majors.</p> 
			<p>Meet with a Career Counselor to discuss your career objectives, including researching careers, resume critiquing, practice interviews and salary negotiation.</p>
			<p>Have a quick question? Visit during our monthly Career Clinic to speak with a career coordinator. No appointments necessary. Maximum 15 minutes per student on a first-come, first-served basis.</p>
		</td>
		<td style="border: 0px; width: 50%">
			<img class="img1" src="pictures/background_01.jpg" height="350" width="400">
		</td>
	</tr>
</table>
<div style="text-align: center;">
	<div style="display: inline-block; vertical-align: top;">
		<p>
			<b>CAREER SERVICES</b>
			<br>Nancy Thompson Library 145
			<br>T: 908-737-4626
			<br>F: 908-737-4635
			<br>career@kean.edu
		</p>
	</div>
	<div style="display: inline-block; vertical-align: top;">
		<p>
			<b>CAREER COORDINATOR</b>
			<br>Blanca Rosales-Ahn
			<br>T: 908-737-4622
			<br>rosalebl@kean.edu
		</p>
	</div>
</div>

<?php include ('includes/footer.html'); ?>
