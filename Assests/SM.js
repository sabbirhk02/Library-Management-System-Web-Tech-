var emailError = true;

function validate() {
  
  
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let Subject=document.getElementById("Subject").value;
    let DYP=document.getElementById("DYP").value;
  
    document.getElementById("error").innerHTML = "";
    let error = "";
    if (!name) {
        error += "Please Provide Your Name <br>";
    }
    if (!phone) {
        error += "Please Provide Your Email <br>";
    }
    if (!Subject) {
        error += "Enter Your Subject <br>";
    }
    if (! DYP) {
        error += "Please Describe Your Problem <br>";
    }
   
    
    
    if (error) {
        document.getElementById("error").innerHTML = error;
    } else {
        register(name, phone, Subject, DYP);
    }
}

function register(name, phone, Subject, DYP) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/sendmsgController.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        name: name,
        phone: phone,
        Subject: Subject,
        DYP:  DYP,
        
     
        show :'Problem sent Successfully!!!\nThank you for your question.\nOur team will contact you soon, and support will be provided.\nWe appreciate your patience.\nHave a great day!\n❤ ✓'
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


