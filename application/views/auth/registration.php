<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css"/>
</head>
<body>
	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Peronal Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Peronal Infomation</h3>
									<p>Please enter your infomation and proceed to the next step so we can build your accounts.  </p>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Participant Name</legend>
											<input type="text" class="form-control" id="first-name" name="fullname" placeholder="Enter your name" id="fullname" required>
										</fieldset>
									</div>	
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Your Email</legend>
											<input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Gender</legend>
											<select name="gender" id="gender">
												<option value="female">Female</option>
												<option value="male">Male</option>
											</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Phone Number</legend>
											<input type="text" class="form-control" id="phone" name="phone" placeholder="+62 812 18463506" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Birth Date</legend>
											<div class="form-row">
												<input type="date" name="birthdate" class="form-control" id="birthdate" style="color: black;" required>
											</div>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Address</legend>
											<input type="text" class="form-control" id="address" name="address" style="height:100px" placeholder="Enter your complete address" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Birth Date</legend>
											<div class="form-row">
												<input type="date" name="birthdate" class="form-control" id="birthdate" style="color: black;" required>
											</div>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="special-label">Nationality</label>
										<select style="color: black;" name="nationality" class="form-control" id="nationality">
											<?php foreach ($countries as $s) : ?>
												<option value="<?php echo $s['name'] . ' (' . $s['sortname'] . ')';; ?>"><?php echo $s['name'] . ' (' . $s['sortname'] . ')'; ?>  </option>

											<?php endforeach ?>			
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Occupation</legend>
											<input type="text" class="form-control" id="occupation" name="occupation" placeholder="Ex: Student" required>
										</fieldset>
									</div>	
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Field of Study</legend>
											<input type="text" class="form-control" id="field" name="field" placeholder="Ex: Informatics Engineering" required>
										</fieldset>
									</div>	
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Institution</legend>
											<input type="text" class="form-control" id="institution" name="institution" placeholder="Ex: Universitas Islam Negeri Sunan Gunung Djati Bandung" required>
										</fieldset>
									</div>	
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Emergency Contact</legend>
											<input type="text" class="form-control" id="emergency" name="emergency" placeholder="+62 812 18463506" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Whatsapp</legend>
											<input type="text" class="form-control" id="wa" name="wa" placeholder="+62 812 18463506" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Instagram Account</legend>
											<input type="text" class="form-control" id="ig" name="ig" placeholder="Enter Your Instagram Account" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>T-Shirt</legend>		
											<select name="tshirt" id="tshirt">
												<option value="s">S</option>
												<option value="m">M</option>
												<option value="l">L</option>
												<option value="xl">XL</option>
												<option value="xxl">XXL</option>
											</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Disease History</legend>
											<input type="text" class="form-control" id="disease" name="disease" placeholder="Enter '-' if you any disease history" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Contact Relation</legend>
											<input type="text" class="form-control" id="relation" name="relation" placeholder="Exp: Father/Sibligs" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Vegetarian</legend>		
											<select name="tshirt" id="tshirt">
												<option value="1">Yes</option>
												<option value="0">No</option>
											</select>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Other Information</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Other Informations</h3>
									<p>Please complete these information </p>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Experiences</legend>
											<input type="text" class="form-control" id="experiences" name="experiences" style="height:100px" placeholder="Enter your experience" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Achievements</legend>
											<input type="text" class="form-control" id="achievements" name="achievements" style="height:100px" placeholder="Enter your achievements" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Social Projects</legend>
											<input type="text" class="form-control" id="social" name="social" style="height:100px" placeholder="Enter your complete address" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Talents</legend>
											<input type="text" class="form-control" id="talents" name="talents" style="height:100px" placeholder="Enter your complete address" required>
										</fieldset>
									</div>
								</div>			
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>03</span></p>
			            	<span class="step-text">Essay</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Essay</h3>
									<p>Your essay length must be between 200 to 300 words. It is recommended that you write your essay on other platforms and paste it here</p>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Sub Theme</legend>		
											<select name="subtheme" id="subtheme">
												<option value="mentalhealth">Mental Health</option>
												<option value="eduaction">Education</option>
												<option value="publicpolicy">Public Policy</option>
												<option value="Public Health">Public Health</option>
												<option value="economy">Economy</option>
											</select>
										</div>
									</div>	
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Essay</legend>
												<input type="text" class="form-control" id="essay" name="essay" style="height:300px" placeholder="Enter your complete address" required>
											</fieldset>
									</div>	
								</div>
							</div>
			            </section>
						<!-- SECTION 4 -->
			            <h2>
			            	<p class="step-icon"><span>04</span></p>
			            	<span class="step-text">Program Information</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Program Informations</h3>
									<p></p>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>How do you know about this programs</legend>		
											<select name="subtheme" id="subtheme">
												<option value="instagram">Instagram</option>
												<option value="whatsapp">Whatsapp</option>
												<option value="facebook">Facebook</option>
												<option value="friends">Friends</option>
												<option value="others">Others</option>
											</select>
										</div>
									</div>	
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Source Account/Name</legend>
												<input type="text" class="form-control" id="source" name="source" placeholder="Enter Source Account" required>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Reedem</legend>
												<input type="text" class="form-control" id="redeem" name="reedem" placeholder="Enter Your Reedem Code" required>
											</fieldset>
										</div>
									</div>
									<p>Note: Paste the link to your motivation video about why you want to participate in the 5th Istanbul Youth Summit.The video can uploaded to Instagram or Youtube</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Motivation Video Link</legend>
												<input type="text" class="form-control" id="videolink" name="source" placeholder="Enter Your Link Here" required>
											</fieldset>
										</div>
									</div>
									<p> Note: As mentioned on the Registration Guidelines, you need to do the followings:</p>
									<p>	- Follow Istanbul Youth Summit and Youth Break the Boundaries on Instagram,</p>
									<p> - Tag 5 of your friends on your Instagram post</p>
									<p> - Share the event to 3 Whatsapp Groups</p>
									<p>Take a screenshot of each of the actions above and upload them to your Google drive. Copy the link and paste it the input form below. (Make sure the folder is accessible by public)</p>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Share Requirement Proof Link</legend>
												<input type="text" class="form-control" id="prooflink" name="prooflink" placeholder="Enter Your Link Here" required>
											</fieldset>
										</div>
									</div>
								</div>	
							</div>
						</section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="<?=base_url()?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?=base_url()?>assets/js/jquery.steps.js"></script>
	<script src="<?=base_url()?>assets/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>