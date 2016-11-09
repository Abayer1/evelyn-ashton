<?php include "includes/header.php"; ?>
<body>
	<style type="text/css">
		#uname_input{
			width:80%;
			float:left;
			display:inline-block;
		}
	</style>
    	<div class="wrapper">
        	<div class="content_heading">
            	<h1>Create an Account</h1>
            	<hr>
            </div>
        	<div class="row">
                <div class="columns medium-6 small-12">
                    <form name="create_user_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <fieldset>
                        	 <legend>Create a User Account</legend>
                            <div id="create_uname_container">
                                <label for="uname_input">User name</label>
                                <input name="username" id="uname_input" type="text" value="" placeholder="Desired username">
                                <span />
                            </div>
                            <div id="create_fname_container">
                                <label for="fname_input">First name</label>
                                <input name="firstname" id="fname_input" type="text" value="" placeholder="First name">
                                <span />
                            </div>
                            
                            <div id="create_lname_container">
                                <label for="lname_input">Last name</label>
                                <input name="lastname" id="lname_input" type="text" value="" placeholder="Last name">
                                <span />
                            </div>
                    
                            <div id="create_pass_container">
                                <label for="pword_input">Password</label>
                                <input name="password" id="pword_input" type="password" value="" placeholder="Password">
                                <span />
                            </div>
                            <div id="check_pass_container">
                                <label for="check_pass">Repeat Password</label>
                                <input name="repeat_password" id="check_pass" type="password" value="" placeholder="Repeat Password">
                                <span />
                            </div>
                            <div id="create_email_container">
                                <label for="email_creation">Email Address</label>
                                <input name="email" id="email_creation" type="email" value="" placeholder="Email Address">
                                <span />
                            </div>

                            <div id="policy_agreement_container">
                                <label for="cb" class="pure-checkbox">
                                    <input id="cb" type="checkbox"> I've read the terms and conditions
                                </label>
                                <span />
                    
                                <button type="submit">Submit</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="columns medium-6">
                    <form class="pure-form pure-form-stacked">
                        <fieldset>
                            <legend>Already a Member?</legend>
                            <button type="submit" formaction="login.php">Sign in</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        
<?php include "includes/footer.php"; ?>
</body>
</html>