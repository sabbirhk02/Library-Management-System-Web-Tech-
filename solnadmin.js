var emailError = true;

function validate() {
  
  
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let Admin_email=document.getElementById("Admin_email").value;
    let Subject=document.getElementById("Subject").value;
    let Message=document.getElementById("Message").value;

    document.getElementById("error").innerHTML = "";
    let error = "";
    if (!name) {
        error += "Please provide your name<br>";
    }
    if (!phone) {
        error += "Please enter User Name <br>";
    }
    if (!Admin_email) {
        error += "Please enter your email <br>";
    }
    if (!Subject) {
        error += "Please enter Subject <br>";
    }
    if (!Message) {
        error += "Please Enter the message <br>";
    }
    
    
    if (error) {
        document.getElementById("error").innerHTML = error;
    } else {
        register(name, phone, Admin_email, Subject, Message);
    }
}

function register(name, phone, Admin_email, Subject, Message) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/solnadminCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        name: name,
        phone: phone,
        Admin_email: Admin_email,
        Subject: Subject,
        Message: Message,
        
     
        show : 'Successfully message sent!!!'
    };
    let dataToSend = JSON.stringify(data);

    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
              //  window.location.replace("");
                document.getElementById("error").innerHTML = data.show;
              //  document.write("Success");
              alert('success');
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}


