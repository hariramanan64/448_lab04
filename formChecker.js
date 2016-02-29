var user, pass, message1, message2, tb, mc, bk, ship;

function getCredentials() {

    // Get the values of all input fields
    email = document.getElementById("email").value;
    pass = document.getElementById("password").value;
    tb = document.getElementById("tb").value;
    mc = document.getElementById("mc").value;
    bk = document.getElementById("bk").value;
    ship = document.getElementById("ship").value;
    
    return (validateLogin() && validateMenu());
    
}

function validateLogin() {
    // if no password entered
    if(pass.length == 0) 
    {
        message1 = "Please enter a valid password";
        document.getElementById("msg").innerHTML = message1;
        return false;
    }
    /*
    //if no @ sign in email
    if(email.indexOf('@') == -1)
    {
        message1 = "Not an email address";
        document.getElementById("msg").innerHTML = message1;
        return false;
    }
    
    //if no period in email
    if(email.indexOf('.') == -1)
    {
        message1 = "Not an email address";
        document.getElementById("msg").innerHTML = message1;
        return false;
    }
    
    //if spaces in email
    if(email.indexOf(' ') != -1)
    {
        message1 = "Not an email address";
        document.getElementById("msg").innerHTML = message1;
        return false;
    }
    */
    /*
    //below line of code for email check taken from http://////stackoverflow.com/questions/46155/validate-email-address-in-javascript
    */
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!(re.test(email)))
    {
        message1 = "Invalid email";
        document.getElementById("msg").innerHTML = message1;
        return false;
    }
    
    message1 = "Password validated";
    return true;
}

function validateMenu() {
    //individually validates that there is some entry for ea. menu item quantity
    
    if(tb.length < 1)
    {
        message2 = "Cannot have a blank number of Taco Bell items.";
        document.getElementById("msg2").innerHTML = message2;
        return false;
    }
    
    else if(mc.length < 1)
    {
        message2 = "Cannot have a blank number of McDonalds items.";
        document.getElementById("msg2").innerHTML = message2;
        return false;
    }
    
    else if(bk.length < 1)
    {
        message2 = "Cannot have a blank number of Burger King items.";
        document.getElementById("msg2").innerHTML = message2;
        return false;
    }
        
    else if(ship.length < 1)
    {
        message2 = "You must choose a shipping method.";
        document.getElementById("msg2").innerHTML = message2;
        return false;
    }
    
    message2 = "Menu selections validated.";
    return true;
    
}        
