<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
<!--  ----------------------------------------------------------------------  -->
<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
<input type=hidden name="oid" value="00Dj00000028Fao">
<input type=hidden name="retURL" value="http://hospitalitytrainingcentre.com/registration-submission-thanks">
<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment -->
<!--  these lines if you wish to test in debug mode. -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail" value="j.r.s.murph@gmail.com">   -->
<!--  ----------------------------------------------------------------------  -->

<input id="agree_check" name="agree_check" type="checkbox" value="1" style="margin-right: 10px;"/>You must check this box indicating you have read the terms and conditions noted above to continue.

<div id="form_agree_block">
	<p style="margin-bottom: 0; margin-top: 20px;"><font color="red">*</font> = Required to fill out field</p>
	
	<H2>Eligibility</H2>
	
	Birthdate:<font color="red">*</font><input  id="00N0a00000C0TSS" name="00N0a00000C0TSS" size="12" type="text" required /><a href="javascript:NewCal('00N0a00000C0TSS','ddmmyyyy')"><img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br><br>

	Between 18-29?:<select  id="00N0a00000BpW34" name="00N0a00000BpW34" title="Between 18-29?">
	<option value="">--None--</option>
	<option value="Yes - Ages 18-25">Yes - Ages 18-25</option>
	<option value="Yes - Ages 26-29">Yes - Ages 26-29</option>
	<option value="No">No</option>
	<option value="N/A - unknown">N/A - unknown</option>
	</select><br>
	
	Are you eligible to work in Canada?<br/>
	<input type="radio" id="00N0a00000C0TSX-1" name="00N0a00000C0TSX-1" value="1"> Yes<br>
	<input type="radio" id="00N0a00000C0TSX-2" name="00N0a00000C0TSX-2" value="0"> No<br>

	<!-- <input id="00N0a00000C0TSX" name="00N0a00000C0TSX" type="checkbox" value="1" style="margin-left: 10px;"/><br> -->
	<br>
	<p id="reveal-note"><strong>If you are not eligible to work in Canada, please contact HWTC directly for further information at <a href="tel:6479309518">647-930-9518</a> ext 305.</strong>
	</p>
	<div id="form-reveal">

		Status in Canada:<select  id="00N0a00000C0TSr" name="00N0a00000C0TSr" title="Status in Canada"><option value="">--None--</option><option value="Canadian Citizen">Canadian Citizen</option>
		<option value="Permanent Resident">Permanent Resident</option>
		<option value="New Immigrant/Refugee (&lt;5 Years)">New Immigrant/Refugee (&lt;5 Years)</option>
		<option value="Immigrant/Refugee (&gt;5 Years)">Immigrant/Refugee (&gt;5 Years)</option>
		<option value="Working Visa">Working Visa</option>
		<option value="Refugee">Refugee</option>
		<option value="Other">Other</option>
		</select><br>
		If 'other', please provide further details:<input  id="00N0a00000C0TSw" maxlength="255" name="00N0a00000C0TSw" size="20" type="text" /><br><br>


		What is your employment status?<font color="red">*</font><select  id="00N0a00000C0TT6" name="00N0a00000C0TT6" title="Current labor force status" required><option value="">--None--</option><option value="Employed Full-time">Employed Full-time (20+ hours a week)</option>
		<option value="Employed Part-time">Employed Part-time (less than 20 hours per week)</option>
		<option value="Unemployed">Unemployed - looking for work</option>
		<option value="Student">College/University Student</option>
		</select><br>

		<br>
		<p id="reveal-note-ec"><strong>Please contact HWTC directly for further information at <a href="tel:6479309518">647-930-9518</a> ext 305.</strong>
		</p>



		<div id="employment-status-check">
			Are you currently receiving any of the following services? (press control to select multiple options): <font color="red">*</font><select multiple="multiple" id="00N0a00000C0TT1" name="00N0a00000C0TT1" title="Primary Source of Income" required><option value="">--None--</option><option value="Employment Insurance (EI)">Employment Insurance (EI)</option>
			<option value="Ontario Works (OW)">Ontario Works (OW)</option>
			<option value="Ontario Disabilities Support Program (ODSP)">Ontario Disabilities Support Program (ODSP)</option>
			<option value="None">None</option>
			<option value="Other">Other</option>
			</select><br>
			
			<br>
			<strong>Please tell us about your physical abilty to work in the hospitality industry:</strong> <br><br>
			
			Are you able to be on your feet and work for up to 8 hours?<font color="red">*</font><br/>
			<!-- <input  id="00N0a00000C0TTB" name="00N0a00000C0TTB" type="checkbox" value="1" style="margin-left: 10px;" required/><br> -->
			<input type="radio" id="00N0a00000C0TTB-1" name="on-your-feet" value="1"> Yes<br>
			<input type="radio" id="00N0a00000C0TTB-2" name="on-your-feet" value="0"> No<br>
			<input type="radio" id="00N0a00000C0TTB-3" name="on-your-feet" value="0"> Not sure<br><br>

			<select  id="00N0a00000C0TTB" name="00N0a00000C0TTB" required style="position:absolute;left: -1000px;">
			<option value="Yes">Yes</option>
			<option value="No">No</option>
			<option value="Not sure">Not sure</option>
			</select><br>
			
			<div id="phys_one_block">
				Please provide details <font color="red">*</font>:<textarea  id="00N0a00000C0TTG" name="00N0a00000C0TTG" type="text" wrap="soft"></textarea><br>
			</div>
			
			
			Are you comfortable lifting up to 30lbs? <font color="red">*</font><br/> 
			<!-- <input  id="00N0a00000C0TTL" name="00N0a00000C0TTL" type="checkbox" value="1" style="margin-left: 10px;" required /><br> -->
			<input type="radio" id="00N0a00000C0TTL-1" name="lift-check" value="1"> Yes<br>
			<input type="radio" id="00N0a00000C0TTL-2" name="lift-check" value="0"> No<br>
			<input type="radio" id="00N0a00000C0TTL-3" name="lift-check" value="0"> Not sure<br><br>

			<select id="00N0a00000C0TTL" name="00N0a00000C0TTL" required style="position:absolute;left: -1000px;">
			<option value="Yes">Yes</option>
			<option value="No">No</option>
			<option value="Not sure">Not sure</option>
			</select><br>
			
			<div id="phys_two_block">
				Please provide details <font color="red">*</font>:<textarea  id="00N0a00000C0TTQ" name="00N0a00000C0TTQ" type="text" wrap="soft"></textarea><br>
			</div>
			
			
			Are you able to bend, reach, push, and twist? <font color="red">*</font> <br/>
			<!-- <input  id="00N0a00000C0TTV" name="00N0a00000C0TTV" type="checkbox" value="1" style="margin-left: 10px;" required/><br> -->
			<input type="radio" id="00N0a00000C0TTV-1" name="move-check" value="1"> Yes<br>
			<input type="radio" id="00N0a00000C0TTV-2" name="move-check" value="0"> No<br>
			<input type="radio" id="00N0a00000C0TTV-3" name="move-check" value="0"> Not sure<br><br>

			<select id="00N0a00000C0TTV" name="00N0a00000C0TTV" required style="position:absolute;left: -1000px;">
			<option value="Yes">Yes</option>
			<option value="No">No</option>
			<option value="Not sure">Not sure</option>
			</select><br>
			
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
				
				
			<H2>Screening Questionnaire</h2>		
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
			
			<H2>Availability</H2>

			<p>Check the box if you are avaialble on the days and at the times ranges stated below:</p>

			<div id="availability-section">
				<div>
					<p>Day</p>
					<p>Available 6am-6pm</p>
					<p>Available 12pm-3am</p>
				</div>
				<div>
					<p>Mon</p>
					<div class="availability-a">
						<input id="00N0a00000C0TVg" type="checkbox" value="1" required>
						<select id="00N0a00000C0TVg" name="00N0a00000C0TVg" title="Monday Availability - Start" required>
							<option value="">--None--</option>
							<option value="Not available">Not available</option>
							<option value="4:00">4:00</option>
						</select>
					</div>
				
					<div class="availability-b">
						<input id="00N0a00000C0TVl" type="checkbox" value="1" required>
						<select id="00N0a00000C0TVl" name="00N0a00000C0TVl" title="Monday Availability - End">
							<option value="">--None--</option>
							<option value="4:00">4:00</option>
							<option value="5:00">5:00</option>
						</select>
					</div>
				</div>
				
				<div>
					<p>Tues</p>
					<div class="availability-a">
						<input id="00N0a00000C0TVq" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TVq" name="00N0a00000C0TVq" title="Tuesday Availability - Start" required>
							<option value="">--None--</option>
							<option value="Not available">Not available</option>
							<option value="4:00">4:00</option>
						</select>
					</div>
				
					<div class="availability-b">
						<input id="00N0a00000C0TVv" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TVv" name="00N0a00000C0TVv" title="Tuesday Availability - End">
							<option value="">--None--</option>
							<option value="4:00">4:00</option>
							<option value="5:00">5:00</option>
						</select>
					</div>
				</div>
				
				<div>
					<p>Wed</p>
					<div class="availability-a">
						<input id="00N0a00000C0TW0" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TW0" name="00N0a00000C0TW0" title="Wednesday Availability - Start" required>
							<option value="">--None--</option>
							<option value="Not available">Not available</option>
							<option value="4:00">4:00</option>
						</select>
					</div>
				
					<div class="availability-b">
						<input id="00N0a00000C0TW5" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TW5" name="00N0a00000C0TW5" title="Wednesday Availability - End">
							<option value="">--None--</option>
							<option value="4:00">4:00</option>
							<option value="5:00">5:00</option>
						</select>
					</div>
				</div>
				
				<div>
					<p>Thurs</p>
					<div class="availability-a">
						<input id="00N0a00000C0TWA" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TWA" name="00N0a00000C0TWA" title="Thursday Availability - Start" required>
							<option value="">--None--</option>
							<option value="Not available">Not available</option>
							<option value="4:00">4:00</option>
						</select>
					</div>
				
					<div class="availability-b">
						<input id="00N0a00000C0TWF" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TWF" name="00N0a00000C0TWF" title="Thursday Availability - End">
							<option value="">--None--</option>
							<option value="4:00">4:00</option>
							<option value="5:00">5:00</option>
						</select>
					</div>
				</div>
				
				<div>
					<p>Fri</p>
					<div class="availability-a">
						<input id="00N0a00000C0TWK" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TWK" name="00N0a00000C0TWK" title="Friday Availability - Start" required>
							<option value="">--None--</option>
							<option value="Not available">Not available</option>
							<option value="4:00">4:00</option>
						</select>
					</div>
				
					<div class="availability-b">
						<input id="00N0a00000C0TWP" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TWP" name="00N0a00000C0TWP" title="Friday Availability - End">
							<option value="">--None--</option>
							<option value="4:00">4:00</option>
							<option value="5:00">5:00</option>
						</select>
					</div>
				
				</div>
				
				<div>
					<p>Sat</p>
					<div class="availability-a">
						<input id="00N0a00000C0TWZ" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TWZ" name="00N0a00000C0TWZ" title="Saturday Availability - Start" required>
							<option value="">--None--</option>
							<option value="Not available">Not available</option>
							<option value="4:00">4:00</option>
						</select>
					</div>
				
					<div class="availability-b">
						<input id="00N0a00000C0TWe" type="checkbox" value="1" required>
						<select id="00N0a00000C0TWe" name="00N0a00000C0TWe" title="Saturday Availability - End">
							<option value="">--None--</option>
							<option value="4:00">4:00</option>
							<option value="5:00">5:00</option>
						</select>
					</div>
				</div>
				
				<div>
					<p>Sun</p>
					<div class="availability-a">
						<input id="00N0a00000C0TWj" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TWj" name="00N0a00000C0TWj" title="Sunday Availability - Start" required>
							<option value="">--None--</option>
							<option value="Not available">Not available</option>
							<option value="4:00">4:00</option>
						</select>
					</div>
					
					<div class="availability-b">
						<input id="00N0a00000C0TWo" type="checkbox" value="1" required>
						<select  id="00N0a00000C0TWo" name="00N0a00000C0TWo" title="Sunday Availability - End">
							<option value="">--None--</option>
							<option value="4:00">4:00</option>
							<option value="5:00">5:00</option>
						</select>
					</div>
				</div>
			</div>

			<input type="submit" name="submit">
		</div> <!-- end of employment check block-->
	</div>
	</div> 
	<!-- End of full form wrapper -->
</form>
