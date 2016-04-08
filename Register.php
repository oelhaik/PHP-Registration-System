<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="CSS/site.css"/>
        <script src="JS/jquery-1.12.3.min.js"></script>
        <script src="JS/npm.js"></script>
        <script src="JS/bootstrap.min.js"></script>
        
    </head>
    <body>
        <form id='register' action='ProcessRegistration.php' method='post'
            accept-charset='UTF-8' onsubmit="return confirm('Are you sure your registration info is correct?');">
        <fieldset >
            <legend>Register</legend>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            
            <label>First Name: </label>
            <input type='text' name='firstName' id='firstName' required="required" maxlength="50" pattern="[a-zA-Z-]+"/>
            <br />
            
            <label>Last Name:</label>
            <input type='text' name='lastName' id='lastName' required="required" maxlength="50" pattern="[a-zA-Z-]+" />
            <br />
        
            <label >Address 1:</label>
            <input type='text' name='Address1' id='Address1' maxlength="50" required="required" pattern="[a-zA-Z0-9_]+([a-zA-Z0-9 ]+)"/>
            <br />
        
            <label>Address 2:</label>
            <input type='text' name='Address2' id='Address2'  maxlength="50" pattern="[a-zA-Z0-9 ]+" />
            <br />
        
            <label>Country:</label>
            <input type="text" name='Country' id='Country' value="US" readonly>
            <br />
        
            <label>City:</label>
            <input type='text' name='City' id='City' maxlength="50" pattern="[a-zA-Z0-9 ]+" required="required"/>
            <br />
            
            <label>State:</label>
            <select name='State' id='State' required="required">
                	<option value="AL">Alabama</option>
                	<option value="AK">Alaska</option>
                	<option value="AZ">Arizona</option>
                	<option value="AR">Arkansas</option>
                	<option value="CA">California</option>
                	<option value="CO">Colorado</option>
                	<option value="CT">Connecticut</option>
                	<option value="DE">Delaware</option>
                	<option value="DC">District Of Columbia</option>
                	<option value="FL">Florida</option>
                	<option value="GA">Georgia</option>
                	<option value="HI">Hawaii</option>
                	<option value="ID">Idaho</option>
                	<option value="IL">Illinois</option>
                	<option value="IN">Indiana</option>
                	<option value="IA">Iowa</option>
                	<option value="KS">Kansas</option>
                	<option value="KY">Kentucky</option>
                	<option value="LA">Louisiana</option>
                	<option value="ME">Maine</option>
                	<option value="MD">Maryland</option>
                	<option value="MA">Massachusetts</option>
                	<option value="MI">Michigan</option>
                	<option value="MN">Minnesota</option>
                	<option value="MS">Mississippi</option>
                	<option value="MO">Missouri</option>
                	<option value="MT">Montana</option>
                	<option value="NE">Nebraska</option>
                	<option value="NV">Nevada</option>
                	<option value="NH">New Hampshire</option>
                	<option value="NJ">New Jersey</option>
                	<option value="NM">New Mexico</option>
                	<option value="NY">New York</option>
                	<option value="NC">North Carolina</option>
                	<option value="ND">North Dakota</option>
                	<option value="OH">Ohio</option>
                	<option value="OK">Oklahoma</option>
                	<option value="OR">Oregon</option>
                	<option value="PA">Pennsylvania</option>
                	<option value="RI">Rhode Island</option>
                	<option value="SC">South Carolina</option>
                	<option value="SD">South Dakota</option>
                	<option value="TN">Tennessee</option>
                	<option value="TX">Texas</option>
                	<option value="UT">Utah</option>
                	<option value="VT">Vermont</option>
                	<option value="VA">Virginia</option>
                	<option value="WA">Washington</option>
                	<option value="WV">West Virginia</option>
                	<option value="WI">Wisconsin</option>
                	<option value="WY">Wyoming</option>
                </select>				
                				
        	<br />
                
            <label>Zip:</label>
            <input type='text' name='Zip' id='Zip' maxlength="10" pattern="(\d{5}([\-]\d{4})?)" required="required"/>
            <br />
            
            <input type='submit' name='Submit' value='Submit' />
             
        </fieldset>
        </form>
    </body>
</html>