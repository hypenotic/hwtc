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

<!-- <input id="agree_check" name="agree_check" type="checkbox" value="1" style="margin-right: 10px;"/><strong>You must check this box indicating you have read the terms and conditions noted above to continue.</strong> -->

<div id="form_agree_block">
	<p style="margin-bottom: 0; margin-top: 20px;"><font color="red">*</font> = Required to fill out field</p>
	
	<H2>Eligibility</H2>
	
	Are you 18+ or older?  Please enter your birthdate: <font color="red">*</font><br/>
	<input id="date-check" type="date"><br/>
	<input id="00N0a00000C0TSS" name="00N0a00000C0TSS" type="text" required style="position:absolute;left: -1000px;" /><br/>

	<p id="reveal-age-note"><strong>If you are not over 18, please contact HWTC directly for further information at <a href="tel:6479309518">647-930-9518</a></strong>
	</p>
	
	<div id="date-check-block">
		Are you eligible to work in Canada? <font color="red">*</font><br/>
		<input type="radio" id="00N0a00000C0TSX-1" name="00N0a00000C0TSX" value="1" required> Yes<br>
		<input type="radio" id="00N0a00000C0TSX-2" name="00N0a00000C0TSX" value="0"> No<br>
		
		<input id="00N0a00000C0TSX" name="00N0a00000C0TSX" type="checkbox" required style="position:absolute;left: -1000px;" /><br>
		<p id="reveal-note"><strong>If you are not eligible to work in Canada, please contact HWTC directly for further information at <a href="tel:6479309518">647-930-9518</a></strong>
		</p>
		<div id="form-reveal">
		
			Please select your current status:<font color="red">*</font><br>
			<input type="radio" id="00N0a00000C0TSr-1" name="00N0a00000C0TSr" value="Canadian Citizen" style="margin-bottom: 5px;margin-right: 5px;"> Canadian Citizen<br/>
			<input type="radio" id="00N0a00000C0TSr-2" name="00N0a00000C0TSr" value="Permanent Resident" style="margin-bottom: 5px;margin-right: 5px;"> Permanent Resident<br/>
			<input type="radio" id="00N0a00000C0TSr-3" name="00N0a00000C0TSr" value="New Immigrant/Refugee (&lt;5 Years)" style="margin-bottom: 5px;margin-right: 5px;"> New Immigrant/Refugee (&lt;5 Years)<br/>
			<input type="radio" id="00N0a00000C0TSr-4" name="00N0a00000C0TSr" value="Immigrant/Refugee (&gt;5 Years)" style="margin-bottom: 5px;margin-right: 5px;"> Immigrant/Refugee (&gt;5 Years)<br/>
			<input type="radio" id="00N0a00000C0TSr-5" name="00N0a00000C0TSr" value="Working Visa" style="margin-bottom: 5px;margin-right: 5px;"> Working Visa<br/>
			<input type="radio" id="00N0a00000C0TSr-6" name="00N0a00000C0TSr" value="Refugee" style="margin-bottom: 5px;margin-right: 5px;"> Refugee<br/>
			<input type="radio" id="00N0a00000C0TSr-7" name="00N0a00000C0TSr" value="Other" style="margin-bottom: 5px;margin-right: 5px;"> Other<br>
		<!-- 	<select  id="00N0a00000C0TSr" name="00N0a00000C0TSr" title="Status in Canada">
				<option value="">Select Option</option>
				<option value="Canadian Citizen">Canadian Citizen</option>
				<option value="Permanent Resident">Permanent Resident</option>
				<option value="New Immigrant/Refugee (&lt;5 Years)">New Immigrant/Refugee (&lt;5 Years)</option>
				<option value="Immigrant/Refugee (&gt;5 Years)">Immigrant/Refugee (&gt;5 Years)</option>
				<option value="Working Visa">Working Visa</option>
				<option value="Refugee">Refugee</option>
				<option value="Other">Other</option>
			</select><br> -->
			<div id="status-other-box">
				Please provide further details:
				<textarea id="00N0a00000C0TSw" maxlength="255" name="00N0a00000C0TSw" size="20" type="text"></textarea>
				<br>
			</div>
			<br/>
		
			What is your employment status?<font color="red">*</font><br/>
			<input type="radio" id="00N0a00000C0TT6-1" name="00N0a00000C0TT6" value="Employed Full-time" style="margin-bottom: 5px;margin-right: 5px;"> Employed Full-time (20+ hours a week)<br/>
			<input type="radio" id="00N0a00000C0TT6-2" name="00N0a00000C0TT6" value="Employed Part-time" style="margin-bottom: 5px;margin-right: 5px;"> Employed Part-time (less than 20 hours per week)<br/>
			<input type="radio" id="00N0a00000C0TT6-3" name="00N0a00000C0TT6" value="Unemployed" style="margin-bottom: 5px;margin-right: 5px;"> Unemployed - looking for work<br/>
			<input type="radio" id="00N0a00000C0TT6-4" name="00N0a00000C0TT6" value="Student" style="margin-bottom: 5px;margin-right: 5px;"> College/University Student<br/>
			<!-- <select  id="00N0a00000C0TT6" name="00N0a00000C0TT6" title="Current labor force status" required><option value="">Select Option</option><option value="Employed Full-time">Employed Full-time (20+ hours a week)</option>
			<option value="Employed Part-time">Employed Part-time (less than 20 hours per week)</option>
			<option value="Unemployed">Unemployed - looking for work</option>
			<option value="Student">College/University Student</option>
			</select><br> -->
		
			<br>
			<p id="reveal-note-ec"><strong>Please contact HWTC directly for further information at <a href="tel:6479309518">647-930-9518</a></strong>
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
				<input type="radio" id="00N0a00000C0TTB-1" name="00N0a00000C0TTB" value="Yes" style="margin-bottom: 5px;margin-right: 5px;"> Yes<br>
				<input type="radio" id="00N0a00000C0TTB-2" name="00N0a00000C0TTB" value="No" style="margin-bottom: 5px;margin-right: 5px;"> No<br>
				<input type="radio" id="00N0a00000C0TTB-3" name="00N0a00000C0TTB" value="Not sure" style="margin-bottom: 5px;margin-right: 5px;"> Not sure<br><br>
				<br>
				
				<div id="phys_one_block">
					Please provide details <font color="red">*</font>:<textarea  id="00N0a00000C0TTG" name="00N0a00000C0TTG" type="text" wrap="soft"></textarea><br>
				</div>
				
				
				Are you comfortable lifting up to 30lbs? <font color="red">*</font><br/> 
				<input type="radio" id="00N0a00000C0TTL-1" name="00N0a00000C0TTL" value="Yes" style="margin-bottom: 5px;margin-right: 5px;"> Yes<br>
				<input type="radio" id="00N0a00000C0TTL-2" name="00N0a00000C0TTL" value="No" style="margin-bottom: 5px;margin-right: 5px;"> No<br>
				<input type="radio" id="00N0a00000C0TTL-3" name="00N0a00000C0TTL" value="Not sure" style="margin-bottom: 5px;margin-right: 5px;"> Not sure<br><br>
				<br>
				
				<div id="phys_two_block">
					Please provide details <font color="red">*</font>:<textarea  id="00N0a00000C0TTQ" name="00N0a00000C0TTQ" type="text" wrap="soft"></textarea><br>
				</div>
				
				Do you have any restrictions to bend, reach, push, and twist? <font color="red">*</font> <br/>
				<input type="radio" id="00N0a00000C0TTV-1" name="00N0a00000C0TTV" value="Yes" style="margin-bottom: 5px;margin-right: 5px;"> Yes<br>
				<input type="radio" id="00N0a00000C0TTV-2" name="00N0a00000C0TTV" value="No" style="margin-bottom: 5px;margin-right: 5px;"> No<br>
				<input type="radio" id="00N0a00000C0TTV-3" name="00N0a00000C0TTV" value="Not sure" style="margin-bottom: 5px;margin-right: 5px;"> Not sure<br><br>
				<br>
				
				<div id="phys_three_block">
					Please provide details <font color="red">*</font>:<textarea  id="00N0a00000C0TTa" name="00N0a00000C0TTa" type="text" wrap="soft"></textarea><br>
				</div>
					
					
				<H2>Contact Information</H2>
				<label for="first_name">First Name<font color="red">*</font></label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" required /><br>
				<label for="last_name">Last Name<font color="red">*</font></label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" required /><br>
				<label for="email">Email<font color="red">*</font></label><input  id="email" maxlength="80" name="email" size="20" type="text" required /><br>
				<label for="phone">Phone<font color="red">*</font></label><input  id="phone" maxlength="40" name="phone" size="20" type="text" required /><br>
				<label for="street">Address<font color="red">*</font></label><textarea name="street" required></textarea><br>
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
					
					<div class="course-hold" style="display: none;">
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
				<option value="Culinary Skills Launch at MLSE">Culinary Skills Launch at MLSE</option>
				<option value="Not sure">Not sure</option>
				</select><br>
				How did you hear about HWTC? (<em>press control to select multiple options</em>):<font color="red">*</font><select  id="00N0a00000C0TTk" multiple="multiple" name="00N0a00000C0TTk" title="How did you hear about HWTC?" required><option value="Caseworker">Caseworker</option>
				<option value="Family or friends">Family or friends</option>
				<option value="Someone who has taken a training course">Someone who has taken a training course</option>
				<option value="Website">Website</option>
				<option value="TTC Ad">TTC Ad</option>
				<option value="Social Media (Facebook, Twitter, Instagram)">Social Media (Facebook, Twitter, Instagram)</option>
				<option value="Other">Other</option>
				</select><br>
				<div id="hear-other-box">
					Please provide details:<textarea  id="00N0a00000C0TTp" name="00N0a00000C0TTp" type="text" wrap="soft"></textarea>
				</div>
				<br>
				Employment goals:<font color="red">*</font>
				<br/>
					<input type="radio" id="00N0a00000C0TTu-1" name="00N0a00000C0TTu" value="Full-time employment in hospitality industry" style="margin-bottom: 5px;margin-right: 5px;"> Full-time employment in hospitality industry<br/>
					<input type="radio" id="00N0a00000C0TTu-2" name="00N0a00000C0TTu" value="Part-time employment in hospitality industry" style="margin-bottom: 5px;margin-right: 5px;"> Part-time employment in hospitality industry<br/>
					<input type="radio" id="00N0a00000C0TTu-3" name="00N0a00000C0TTu" value="Full-time employment in any industry" style="margin-bottom: 5px;margin-right: 5px;"> I just want a full-time job<br/>
					<input type="radio" id="00N0a00000C0TTu-4" name="00N0a00000C0TTu" value="Part-time employment in any industry" style="margin-bottom: 5px;margin-right: 5px;"> I just want a part-time job<br/>
					<input type="radio" id="00N0a00000C0TTu-5" name="00N0a00000C0TTu" value="Other" style="margin-bottom: 5px;margin-right: 5px;"> Other<br/>
				</select><br>
				<!-- <select id="00N0a00000C0TTu" name="00N0a00000C0TTu" title="Employment goals" required>
					<option value="">Select Option</option>
					<option value="Full-time employment in hospitality industry">Full-time employment in hospitality industry</option>
					<option value="Part-time employment in hospitality industry">Part-time employment in hospitality industry</option>
					<option value="Full-time employment in any industry">I just want a full-time job</option>
					<option value="Part-time employment in any industry">I just want a part-time job</option>
					<option value="Other">Other</option>
				</select><br> -->
				<div id="goals-other-box">
					Please provide details:<textarea  id="00N0a00000C0TTz" name="00N0a00000C0TTz" type="text" wrap="soft"></textarea>
				</div>
				<br>	
				
				<H2>Availability</H2>
		
				<p>Check the box if you are available on the days and at the times ranges stated below for employment:</p>
		
				<div id="availability-section">
					<div>
						<p>Day</p>
						<p>Available 6am-6pm</p>
						<p>Available 12pm-3am</p>
					</div>
					<div>
						<p>Mon</p>
						<div class="availability-a">
							<input id="00N0a00000C0TVg" name="00N0a00000C0TVg" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TVl" name="00N0a00000C0TVl" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Tues</p>
						<div class="availability-a">
							<input id="00N0a00000C0TVq" name="00N0a00000C0TVq" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TVv" name="00N0a00000C0TVv" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Wed</p>
						<div class="availability-a">
							<input id="00N0a00000C0TW0" name="00N0a00000C0TW0" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TW5" name="00N0a00000C0TW5" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Thurs</p>
						<div class="availability-a">
							<input id="00N0a00000C0TWA" name="00N0a00000C0TWA" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TWF" name="00N0a00000C0TWF" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Fri</p>
						<div class="availability-a">
							<input id="00N0a00000C0TWK" name="00N0a00000C0TWK" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TWP" name="00N0a00000C0TWP" type="checkbox" value="1">
						</div>
					
					</div>
					
					<div>
						<p>Sat</p>
						<div class="availability-a">
							<input id="00N0a00000C0TWZ" name="00N0a00000C0TWZ" type="checkbox" value="1">
						</div>
					
						<div class="availability-b">
							<input id="00N0a00000C0TWe" name="00N0a00000C0TWe" type="checkbox" value="1">
						</div>
					</div>
					
					<div>
						<p>Sun</p>
						<div class="availability-a">
							<input id="00N0a00000C0TWj" name="00N0a00000C0TWj" type="checkbox" value="1">
						</div>
						
						<div class="availability-b">
							<input id="00N0a00000C0TWo" name="00N0a00000C0TWo" type="checkbox" value="1">
						</div>
					</div>
				</div>

				<h2>Next Steps</h2>
				<p style="margin-bottom: 0;">The next step of the screening process requires that you attend an information session located at:<br><br>

				<strong><a href="https://www.google.ca/maps/place/489+Queen+St+E,+Toronto,+ON+M5A+1V1/@43.6567321,-79.3607424,17z/data=!3m1!4b1!4m5!3m4!1s0x89d4cb400f533053:0xfc069597dda4047b!8m2!3d43.6567321!4d-79.3585537" target="_blank">489 Queen St. East, suite 301, Toronto, ON M5A 1V1</a>. They run from 10:30am-12pm every Tuesday.</strong>

				<br><br>

				<em>Please bring a resume if you have one.</em><br><br>

				<strong>Select a date from the dropdown list below</strong>: <font color="red">*</font></p>
				<select id="tuesday-pick" name="00N0a00000BpW2z" title="Tuesday Picker" required>
					<?php 
					$date = date('Y-m-d') . " -1 week";
					$weekLater = date("Y-m-d", strtotime($date)) . " +1 week";
					$laterDate = strtotime(date("Y-m-d", strtotime($date)) . " +2 month");
					// echo date('l Y-m-d', $laterDate);
					for($i = strtotime('Tuesday', strtotime($weekLater)); $i <= $laterDate; $i = strtotime('+1 week', $i))
					    echo "<option value='".date('d/m/Y', $i)."'>".date('l, F j, Y', $i)."</option>";
					?>
				</select><br>
				<!-- <input id="00N0a00000BpW2z" maxlength="100" name="00N0a00000BpW2z" size="20" type="text" required style="position:absolute;left: -1000px;"> -->
				<br>
				<p style="margin-bottom: 30px;">If you have any questions or are unable to attend the selected date you chose, please call HWTC directly <a href="tel:647930951">647-930-9518</a> or email at <a href="mailto:training@hospitalitytrainingcentre.com">training@hospitalitytrainingcentre.com</a>.</p>

				<p>By submitting this form, you consent to the collection of this information by HWTC in accordance with our Personal Information Protection Policy. Information collected will only be used to gather background information and completion of this form does not guarantee acceptance into our training programs.</p>

				<input id="agree_check" name="agree_check" type="checkbox" value="1" style="margin-right: 10px;" required/><strong>You must check this box indicating you have read the terms and conditions noted above to continue.</strong>

				<br/><br/>
		
				<input type="submit" name="submit">
			</div> <!-- end of employment check block-->
		</div> <!-- form revel -->
	</div> <!-- age check -->
</div> 
	<!-- End of full form wrapper -->
</form>
