<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->
<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
<input type=hidden name="oid" value="00Dj00000028Fao">
<input type=hidden name="retURL" value="http://hospitalitytrainingcentre.com/registration-submission-thanks">
<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail" value="j.r.s.murph@gmail.com">   -->
<!--  ----------------------------------------------------------------------  -->

<input  id="agree_check" name="agree_check" type="checkbox" value="1" style="margin-right: 10px;"/>You must check this box indicating you have read the terms and conditions noted above to continue.

<div id="form_agree_block">
	<p style="margin-bottom: 0; margin-top: 20px;"><font color="red">*</font> = Required to fill out field</p>
	
	<H2>Eligibility</H2>
	
	Birthdate:<font color="red">*</font><input  id="00N0a00000C0TSS" name="00N0a00000C0TSS" size="12" type="text" required /><a href="javascript:NewCal('00N0a00000C0TSS','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br><br>
	
	Are you eligible to work in Canada?<br/>
	<input type="radio" id="00N0a00000C0TSX-1" name="00N0a00000C0TSX" value="1"> Yes<br>
	<input type="radio" id="00N0a00000C0TSX-2" name="00N0a00000C0TSX" value="0"> No<br>

	<!-- <input id="00N0a00000C0TSX" name="00N0a00000C0TSX" type="checkbox" value="1" style="margin-left: 10px;"/><br> --><br>
	<p id="reveal-note"><strong>If you are not eligible to work in Canada, please contact HWTC directly for further information at <a href="tel:6479309518">647-930-9518</a> ext 305.</strong>
	</p>
	<div id="form-reveal">

		Please select your current status:<font color="red">*</font><select  id="00N0a00000C0TSr" name="00N0a00000C0TSr" title="Immigration Status" required><option value="">--None--</option><option value="Canadian Citizen">Canadian Citizen</option>
		<option value="Permanent Resident">Permanent Resident</option>
		<option value="Working Visa">Working Visa</option>
		<option value="Refugee">Refugee</option>
		<option value="Other">Other</option>
		</select><br>
		If 'other', please provide further details:<input  id="00N0a00000C0TSw" maxlength="255" name="00N0a00000C0TSw" size="20" type="text" /><br><br>


		What is your employment status?<font color="red">*</font><select  id="00N0a00000C0TT6" name="00N0a00000C0TT6" title="Current labor force status" required><option value="">--None--</option><option value="Employed Full-time">Employed Full-time</option>
		<option value="Employed Part-time">Employed Part-time</option>
		<option value="Unemployed">Unemployed</option>
		<option value="Underemployed">Underemployed</option>
		<option value="Self-employed">Self-employed</option>
		<option value="Full-time Student">Full-time Student</option>
		<option value="Part-time Student">Part-time Student</option>
		<option value="Student and employed">Student and employed</option>
		<option value="Not in the labour market (not looking)">Not in the labour market (not looking)</option>
		</select><br>

		Are you currently receiving social assistance? <font color="red">*</font><select  id="00N0a00000C0TT1" name="00N0a00000C0TT1" title="Primary Source of Income" required><option value="">--None--</option><option value="Employment Insurance (EI)">Employment Insurance (EI)</option>
		<option value="Ontario Works (OW)">Ontario Works (OW)</option>
		<option value="Ontario Disabilities Support Program (ODSP)">Ontario Disabilities Support Program (ODSP)</option>
		<option value="Dependent on OW or ODSP">Dependent on OW or ODSP</option>
		<option value="Crown Ward">Crown Ward</option>
		<option value="Workplace Safety &amp; Insurance Board (WSIB)">Workplace Safety &amp; Insurance Board (WSIB)</option>
		<!-- <option value="Employment Income">Employment Income</option>
		<option value="No Source of Income">No Source of Income</option> -->
		<option value="Other">Other</option>
		</select><br>

		<br>
		<strong>Please tell us about your physical abilty to work in the hospitality industry:</strong> <br><br>

		Are you able to be on your feet and work for up to 8 hours?<font color="red">*</font><br/>
		<!-- <input  id="00N0a00000C0TTB" name="00N0a00000C0TTB" type="checkbox" value="1" style="margin-left: 10px;" required/><br> -->
		<input type="radio" id="00N0a00000C0TTB-1" name="00N0a00000C0TTB" value="1"> Yes<br>
		<input type="radio" id="00N0a00000C0TTB-2" name="00N0a00000C0TTB" value="0"> No<br>
		<input type="radio" id="00N0a00000C0TTB-3" name="00N0a00000C0TTB" value="0"> Not sure<br><br>

		<div id="phys_one_block">
			Please provide details <font color="red">*</font>:<textarea  id="00N0a00000C0TTG" name="00N0a00000C0TTG" type="text" wrap="soft"></textarea><br>
		</div>


		Are you comfortable lifting up to 30lbs? <font color="red">*</font><br/>
		<!-- <input  id="00N0a00000C0TTL" name="00N0a00000C0TTL" type="checkbox" value="1" style="margin-left: 10px;" required /><br> -->
		<input type="radio" id="00N0a00000C0TTL-1" name="00N0a00000C0TTL" value="1"> Yes<br>
		<input type="radio" id="00N0a00000C0TTL-2" name="00N0a00000C0TTL" value="0"> No<br>
		<input type="radio" id="00N0a00000C0TTL-3" name="00N0a00000C0TTL" value="0"> Not sure<br><br>

		<div id="phys_two_block">
			Please provide details <font color="red">*</font>:<textarea  id="00N0a00000C0TTQ" name="00N0a00000C0TTQ" type="text" wrap="soft"></textarea><br>
		</div>


		Are you able to bend, reach, push, and twist? <font color="red">*</font> <br/>
		<!-- <input  id="00N0a00000C0TTV" name="00N0a00000C0TTV" type="checkbox" value="1" style="margin-left: 10px;" required/><br> -->
		<input type="radio" id="00N0a00000C0TTV-1" name="00N0a00000C0TTV" value="1"> Yes<br>
		<input type="radio" id="00N0a00000C0TTV-2" name="00N0a00000C0TTV" value="0"> No<br>
		<input type="radio" id="00N0a00000C0TTV-3" name="00N0a00000C0TTV" value="0"> Not sure<br><br>
		
		<div id="phys_three_block">
			Please provide details <font color="red">*</font>:<textarea  id="00N0a00000C0TTa" name="00N0a00000C0TTa" type="text" wrap="soft"></textarea><br>
		</div>
	
	
		<H2>Contact Information</H2>
		<label for="first_name">First Name<font color="red">*</font></label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" required /><br>
		<label for="last_name">Last Name<font color="red">*</font></label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" required /><br>
		<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>
		<label for="phone">Phone<font color="red">*</font></label><input  id="phone" maxlength="40" name="phone" size="20" type="text" required /><br>
		<label for="street">Street</label><textarea name="street"></textarea><br>
		<label for="city">City<font color="red">*</font></label><input  id="city" maxlength="40" name="city" size="20" type="text" required /><br> 
	
	
		<H2>Screening questionnaire</h2>		
		<?php 
		$args = array(
			'post_type'  => 'course',
			'meta_query' => array(
			    array(
			        'key' => '_course_details_course_pause',
			        'value'   => 'on',
			        'compare' => '='
			    )
			)
		);
		// the query
		$the_query = new WP_Query( $args ); ?>

		<?php if ( $the_query->have_posts() ) : ?>
			
			<div class="course-hold">
				<p>These following courses are currently postponed. You can still select them, but please note that they are on hold.</p>
				
				<ul>

			<!-- pagination here -->

			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li><?php the_title();?></li>
			<?php endwhile; ?>
			<!-- end of the loop -->

			<!-- pagination here -->
				</ul>
			</div>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<?php endif; ?>

		Which course(s) are you interested in (press control to select multiple options)?:<font color="red">*</font><select  id="00N0a00000C0TTf" multiple="multiple" name="00N0a00000C0TTf" title="Which courses are you interested in?" required><option value="Banquet Server">Banquet Server</option>
		<option value="Culinary Pre-Apprentice">Culinary Pre-Apprentice</option>
		<option value="Guest Services">Guest Services</option>
		<option value="Kitchen Porter">Kitchen Porter</option>
		<option value="Restaurant Front of House">Restaurant Front of House</option>
		<option value="Room Attendant">Room Attendant</option>
		</select><br>
		How did you hear about HWTC?(press control to select multiple options):<font color="red">*</font><select  id="00N0a00000C0TTk" multiple="multiple" name="00N0a00000C0TTk" title="How did you hear about HWTC?" required><option value="Caseworker">Caseworker</option>
		<option value="Family or friends">Family or friends</option>
		<option value="Someone who has taken a training course">Someone who has taken a training course</option>
		<option value="Website">Website</option>
		<option value="Social Media (Facebook, Twitter, Instagram)">Social Media (Facebook, Twitter, Instagram)</option>
		<option value="Other">Other</option>
		</select><br>
		How did you hear about HWTC - if other, provide details:<textarea  id="00N0a00000C0TTp" name="00N0a00000C0TTp" type="text" wrap="soft"></textarea><br>
		Employment goals:<font color="red">*</font><select  id="00N0a00000C0TTu" name="00N0a00000C0TTu" title="Employment goals" required><option value="">--None--</option><option value="Full-time employment in hospitality industry">Full-time employment in hospitality industry</option>
		<option value="Part-time employment in hospitality industry">Part-time employment in hospitality industry</option>
		<option value="Full-time employment in any industry">Full-time employment in any industry</option>
		<option value="Part-time employment in any industry">Part-time employment in any industry</option>
		<option value="Other">Other</option>
		</select><br>
		Employment goals if other:<textarea  id="00N0a00000C0TTz" name="00N0a00000C0TTz" type="text" wrap="soft"></textarea><br>	
		
		
		<H2>Employment History</H2>
		<Table id="form-employment-history">
		<TR>
		<TD>Last Position #1</TD>
		<TD>Employer:<input  id="00N0a00000C0TU4" maxlength="255" name="00N0a00000C0TU4" size="20" type="text" /><br></TD>
		<TD>Job Title:<input  id="00N0a00000C0TU9" maxlength="255" name="00N0a00000C0TU9" size="20" type="text" /><br></TD>
		<TD>Start Date:<input  id="00N0a00000C0TUE" name="00N0a00000C0TUE" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TUE','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		<TD>End Date:<input  id="00N0a00000C0TUJ" name="00N0a00000C0TUJ" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TUJ','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		</TR>
		<TR>
		<TD>Last Position #2</TD>
		<TD>Employer:<input  id="00N0a00000C0TUO" maxlength="255" name="00N0a00000C0TUO" size="20" type="text" /><br></TD>
		<TD>Job Title:<input  id="00N0a00000C0TUT" maxlength="255" name="00N0a00000C0TUT" size="20" type="text" /><br></TD>
		<TD>Start Date:<input  id="00N0a00000C0TUY" name="00N0a00000C0TUY" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TUY','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		<TD>End Date:<input  id="00N0a00000C0TUd" name="00N0a00000C0TUd" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TUd','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		</TR>
		<TR>
		<TD>Last Position #3</TD>
		
		<TD>Employer:<input  id="00N0a00000C0TUx" maxlength="255" name="00N0a00000C0TUx" size="20" type="text" /><br></TD>
		<TD>Job Title:<input  id="00N0a00000C0TUs" maxlength="255" name="00N0a00000C0TUs" size="20" type="text" /><br></TD>
		<TD>Start Date:<input  id="00N0a00000C0TUi" name="00N0a00000C0TUi" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TUi','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		<TD>End Date:<input  id="00N0a00000C0TUn" name="00N0a00000C0TUn" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TUn','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		</TR>
		<TR>
		<TD>Last Position #4</TD>
		<TD>Employer:<input  id="00N0a00000C0TV2" maxlength="255" name="00N0a00000C0TV2" size="20" type="text" /><br></TD>
		<TD>Job Title:<input  id="00N0a00000C0TV7" maxlength="255" name="00N0a00000C0TV7" size="20" type="text" /><br></TD>
		<TD>Start Date:<input  id="00N0a00000C0TVC" name="00N0a00000C0TVC" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TVC','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		<TD>End Date:<input  id="00N0a00000C0TVH" name="00N0a00000C0TVH" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TVH','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		</TR>
		<TR>
		<TD>Last Position #5</TD>
		<TD>Employer:<input  id="00N0a00000C0TVM" maxlength="255" name="00N0a00000C0TVM" size="20" type="text" /><br></TD>
		<TD>Job Title:<input  id="00N0a00000C0TVR" maxlength="255" name="00N0a00000C0TVR" size="20" type="text" /><br></TD>
		<TD>Start Date:<input  id="00N0a00000C0TVW" name="00N0a00000C0TVW" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TVW','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		<TD>End date:<input  id="00N0a00000C0TVb" name="00N0a00000C0TVb" size="12" type="text" /><a href="javascript:NewCal('00N0a00000C0TVb','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br></TD>
		</TR>
		</Table>
		<H2>Availability</H2>
		<Table>
		<TR>
		<TD>Monday</TD>
		<TD>Start:<font color="red">*</font><select  id="00N0a00000C0TVg" name="00N0a00000C0TVg" title="Monday Availability - Start" required><option value="">--None--</option><option value="Not available">Not available</option>
		<option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		<TD>End:<select  id="00N0a00000C0TVl" name="00N0a00000C0TVl" title="Monday Availability - End"><option value="">--None--</option><option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		</TR>
		<TD>Tuesday</TD>
		<TD>Start:<font color="red">*</font><select  id="00N0a00000C0TVq" name="00N0a00000C0TVq" title="Tuesday Availability - Start" required><option value="">--None--</option><option value="Not available">Not available</option>
		<option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		<TD>End:<select  id="00N0a00000C0TVv" name="00N0a00000C0TVv" title="Tuesday Availability - End"><option value="">--None--</option><option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		</TR>
		<TR>
		<TD>Wednesday</TD>
		<TD>Start:<font color="red">*</font><select  id="00N0a00000C0TW0" name="00N0a00000C0TW0" title="Wednesday Availability - Start" required><option value="">--None--</option><option value="Not available">Not available</option>
		<option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		<TD>End:<select  id="00N0a00000C0TW5" name="00N0a00000C0TW5" title="Wednesday Availability - End"><option value="">--None--</option><option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		</TR>
		<TD>Thursday</TD>
		<TD>Start:<font color="red">*</font><select  id="00N0a00000C0TWA" name="00N0a00000C0TWA" title="Thursday Availability - Start" required><option value="">--None--</option><option value="Not available">Not available</option>
		<option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		<TD>End:<select  id="00N0a00000C0TWF" name="00N0a00000C0TWF" title="Thursday Availability - End"><option value="">--None--</option><option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		</TR>
		<TR>
		<TD>Friday</TD>
		<TD>Start:<font color="red">*</font><select  id="00N0a00000C0TWK" name="00N0a00000C0TWK" title="Friday Availability - Start" required><option value="">--None--</option><option value="Not available">Not available</option>
		<option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		<TD>End:<select  id="00N0a00000C0TWP" name="00N0a00000C0TWP" title="Friday Availability - End"><option value="">--None--</option><option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		</TR>
		<TR>
		<TD>Saturday</TD>
		<TD>Start:<font color="red">*</font><select  id="00N0a00000C0TWZ" name="00N0a00000C0TWZ" title="Saturday Availability - Start" required><option value="">--None--</option><option value="Not available">Not available</option>
		<option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		<TD>End:<select id="00N0a00000C0TWe" name="00N0a00000C0TWe" title="Saturday Availability - End"><option value="">--None--</option><option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		</TR>
		<TR>
		<TD>Sunday</TD>
		<TD>Start:<font color="red">*</font><select  id="00N0a00000C0TWj" name="00N0a00000C0TWj" title="Sunday Availability - Start" required><option value="">--None--</option><option value="Not available">Not available</option>
		<option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		<TD>End:<select  id="00N0a00000C0TWo" name="00N0a00000C0TWo" title="Sunday Availability - End"><option value="">--None--</option><option value="4:00">4:00</option>
		<option value="5:00">5:00</option>
		<option value="6:00">6:00</option>
		<option value="7:00">7:00</option>
		<option value="8:00">8:00</option>
		<option value="9:00">9:00</option>
		<option value="10:00">10:00</option>
		<option value="11:00">11:00</option>
		<option value="12:00">12:00</option>
		<option value="13:00">13:00</option>
		<option value="14:00">14:00</option>
		<option value="15:00">15:00</option>
		<option value="16:00">16:00</option>
		<option value="17:00">17:00</option>
		<option value="18:00">18:00</option>
		<option value="19:00">19:00</option>
		<option value="20:00">20:00</option>
		<option value="21:00">21:00</option>
		<option value="22:00">22:00</option>
		<option value="23:00">23:00</option>
		</select><br>
		</TD>
		</TR>
		</TABLE>
		<input type="submit" name="submit">
	</div>
	</div> 
	<!-- End of full form wrapper -->
</form>
