function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }
  
  function validate() {
     
    const email = document.getElementById('email').value;
   
    
  
    if (validateEmail(email)) {
        document.getElementById('result').innerHTML = "";
    } else {
        document.getElementById('result').innerHTML = "<spam style='color:red'>"+ email + 'is not valid'+ "</spam>";
    }
    return false;
  }
  
