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

<input id="agree_check" name="agree_check" type="checkbox" value="1" style="margin-right: 10px;"/><strong>You must check this box indicating you have read the terms and conditions noted above to continue.</strong>

<div id="form_agree_block">
	<p style="margin-bottom: 0; margin-top: 20px;"><font color="red">*</font> = Required to fill out field</p>
	
	<H2>Eligibility</H2>
	
	1.	Are you 18+ or older?  Please enter your birthdate: <font color="red">*</font><br/>
	<input id="date-check" type="date"><br/>
	<input id="00N0a00000C0TSS" name="00N0a00000C0TSS" type="text" required style="position:absolute;left: -1000px;" /><br/>

	<p id="reveal-age-note"><strong>If you are not over 18, please contact HWTC directly for further information at <a href="tel:6479309518">647-930-9518</a> ext 305.</strong>
	</p>
	
	<div id="date-check-block">
		Are you eligible to work in Canada?<br/>
		<input type="radio" id="00N0a00000C0TSX-1" name="eli-check" value="1"> Yes<br>
		<input type="radio" id="00N0a00000C0TSX-2" name="eli-check" value="0"> No<br>
		
		<input id="00N0a00000C0TSX" name="00N0a00000C0TSX" type="checkbox" required style="position:absolute;left: -1000px;" /><br>
		<p id="reveal-note"><strong>If you are not eligible to work in Canada, please contact HWTC directly for further information at <a href="tel:6479309518">647-930-9518</a> ext 305.</strong>
		</p>
		<div id="form-reveal">
		
			Please select your current status:<font color="red">*</font>
			<select  id="00N0a00000C0TSr" name="00N0a00000C0TSr" title="Status in Canada">
				<option value="">Select Option</option>
				<option value="Canadian Citizen">Canadian Citizen</option>
				<option value="Permanent Resident">Permanent Resident</option>
				<option value="New Immigrant/Refugee (&lt;5 Years)">New Immigrant/Refugee (&lt;5 Years)</option>
				<option value="Immigrant/Refugee (&gt;5 Years)">Immigrant/Refugee (&gt;5 Years)</option>
				<option value="Working Visa">Working Visa</option>
				<option value="Refugee">Refugee</option>
				<option value="Other">Other</option>
			</select><br>
			<div id="status-other-box">
				Please provide further details:
				<textarea id="00N0a00000C0TSw" maxlength="255" name="00N0a00000C0TSw" size="20" type="text"></textarea>
				<br>
			</div>
			<br/>
		
			What is your employment status?<font color="red">*</font><select  id="00N0a00000C0TT6" name="00N0a00000C0TT6" title="Current labor force status" required><option value="">Select Option</option><option value="Employed Full-time">Employed Full-time (20+ hours a week)</option>
			<option value="Employed Part-time">Employed Part-time (less than 20 hours per week)</option>
			<option value="Unemployed">Unemployed - looking for work</option>
			<option value="Student">College/University Student</option>
			</select><br>
		
			<br>
			<p id="reveal-note-ec"><strong>Please contact HWTC directly for further information at <a href="tel:6479309518">647-930-9518</a> ext 305.</strong>
			</p>
		
		
		
			<div id="employment-status-check">
				Are you currently receiving any of the following services? (<em>press control to select multiple options</em>): <font color="red">*</font>
				<select multiple="multiple" id="00N0a00000C0TT1" name="00N0a00000C0TT1" title="Primary Source of Income" required>
					<option value="Employment Insurance (EI)">Employment Insurance (EI)</option>
					<option value="Ontario Works (OW)">Ontario Works (OW)</option>
					<option value="Ontario Disabilities Support Program (ODSP)">Ontario Disabilities Support Program (ODSP)</option>
					<option value="None">None</option>
					<!-- <option value="Other">Other</option> -->
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
						<p>The following courses are currently postponed.<br/>You can still select them, but please note that they are on hold.</p>
						
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
				
				Which course(s) are you interested in? (<em>press control to select multiple options</em>):<font color="red">*</font><select  id="00N0a00000C0TTf" multiple="multiple" name="00N0a00000C0TTf" title="Which courses are you interested in?" required><option value="Banquet Server">Banquet Server</option>
				<option value="Culinary Pre-Apprentice">Culinary Pre-Apprentice</option>
				<option value="Guest Services">Guest Services</option>
				<option value="Kitchen Porter">Kitchen Porter</option>
				<option value="Restaurant Front of House">Restaurant Front of House</option>
				<option value="Room Attendant">Room Attendant</option>
				<option value="Not sure">Not sure</option>
				</select><br>
				How did you hear about HWTC? (<em>press control to select multiple options</em>):<font color="red">*</font><select  id="00N0a00000C0TTk" multiple="multiple" name="00N0a00000C0TTk" title="How did you hear about HWTC?" required><option value="Caseworker">Caseworker</option>
				<option value="Family or friends">Family or friends</option>
				<option value="Someone who has taken a training course">Someone who has taken a training course</option>
				<option value="Website">Website</option>
				<option value="Social Media (Facebook, Twitter, Instagram)">Social Media (Facebook, Twitter, Instagram)</option>
				<option value="Other">Other</option>
				</select><br>
				<div id="hear-other-box">
					Please provide details:<textarea  id="00N0a00000C0TTp" name="00N0a00000C0TTp" type="text" wrap="soft"></textarea>
				</div>
				<br>
				Employment goals:<font color="red">*</font>
				<select id="00N0a00000C0TTu" name="00N0a00000C0TTu" title="Employment goals" required>
					<option value="">Select Option</option>
					<option value="Full-time employment in hospitality industry">Full-time employment in hospitality industry</option>
					<option value="Part-time employment in hospitality industry">Part-time employment in hospitality industry</option>
					<option value="Full-time employment in any industry">Full-time employment in any industry</option>
					<option value="Part-time employment in any industry">Part-time employment in any industry</option>
					<option value="Other">Other</option>
				</select><br>
				<div id="goals-other-box">
					Please provide details:<textarea  id="00N0a00000C0TTz" name="00N0a00000C0TTz" type="text" wrap="soft"></textarea>
				</div>
				<br>	
				
				<H2>Availability</H2>
		
				<p>Check the box if you are available on the days and at the times ranges stated below:</p>
		
				<div id="availability-section">
					<div>
						<p>Day</p>
						<p>Available 6am-6pm</p>
						<p>Available 12pm-3am</p>
					</div>
					<div>
						<p>Mon</p>
						<div class="availability-a">
							<input id="00N0a00000C0TVg" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TVl" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Tues</p>
						<div class="availability-a">
							<input id="00N0a00000C0TVq" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TVv" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Wed</p>
						<div class="availability-a">
							<input id="00N0a00000C0TW0" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TW5" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Thurs</p>
						<div class="availability-a">
							<input id="00N0a00000C0TWA" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TWF" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Fri</p>
						<div class="availability-a">
							<input id="00N0a00000C0TWK" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TWP" type="checkbox" value="1">
						</div>
					
					</div>
					
					<div>
						<p>Sat</p>
						<div class="availability-a">
							<input id="00N0a00000C0TWZ" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TWe" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Sun</p>
						<div class="availability-a">
							<input id="00N0a00000C0TWj" type="checkbox" value="1">
						</div>
						
						<div class="availability-b">
							<input id="00N0a00000C0TWo" type="checkbox" value="1">
						</div>
					</div>
				</div>

				<h2>Next Steps</h2>
				<p style="margin-bottom: 0;">The next step of the screening process requires that you attend an information session located at:<br><br>

				<a href="https://goo.gl/maps/MCEnQRJme5N2" target="_blank"><strong>60 Richmond St East,<br>Toronto, ON M5C 1N8</strong><br><br></a>

				They take place every <strong>Tuesday (10am – 11:30am)</strong> in the <strong>Second Floor Meeting Room</strong>.<br>

				<em>Please bring a resume if you have one.</em><br><br>

				<strong>Select a date from the dropdown list below</strong>: <font color="red">*</font></p>
				<select  id="tuesday-pick" name="tuesdays" title="Tuesday Picker" required>
					<option value="">Select Option</option>
					<?php 
					$date = date('Y-m-d');
					$weekLater = date("Y-m-d", strtotime($date)) . " +1 week";
					$laterDate = strtotime(date("Y-m-d", strtotime($date)) . " +2 month");
					// echo date('l Y-m-d', $laterDate);
					for($i = strtotime('Tuesday', strtotime($weekLater)); $i <= $laterDate; $i = strtotime('+1 week', $i))
					    echo '<option value='.date('Y-m-d', $i).'>'.date('l, F j, Y', $i).'</option>';
					?>
				</select><br>
				<p style="margin-bottom: 30px;">If you have any questions or are unable to attend the selected date you chose, please call HWTC directly <a href="tel:647930951">647-930-9518</a> ext. 305 or email at <a href="mailto:training@hospitalitytrainingcentre.com">training@hospitalitytrainingcentre.com</a>.</p>
		
				<input type="submit" name="submit">
			</div> <!-- end of employment check block-->
		</div> <!-- form revel -->
	</div> <!-- age check -->
</div> 
	<!-- End of full form wrapper -->
</form>
