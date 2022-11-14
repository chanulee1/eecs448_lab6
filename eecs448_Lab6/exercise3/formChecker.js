function validateForm() {
    let username = document.forms['myForm']['username'].value;
    if (username == '') {
        alert("Username must be filled out");
        return false;
    }

    let re = /^\S+@\S+\.\S+$/;
    if (!re.test(username)) {
        alert("Username must be in form 'name@domain.com'")
        return false;
    }

    
    let password = document.forms['myForm']['password'].value;
    if (password == '') {
        alert("Password must be filled out");
        return false;
    }

    let tv = document.forms['myForm']['tv'].value;
    if (tv == '') {
        alert("Choose an option for the TV");
        return false;
    }
    
    let banana = document.forms['myForm']['banana'].value;
    if (banana == '') {
        alert("Choose an option for the banana");
        return false;
    }

    let tennis = document.forms['myForm']['tennis'].value;
    if (tennis == '') {
        alert("Choose an option for the tennis ball");
        return false;
    }

    let shipping = document.forms['myForm']['shipping'].value;
    if (shipping == '') {
        alert("Choose a shipping option");
        return false;
    }
}
