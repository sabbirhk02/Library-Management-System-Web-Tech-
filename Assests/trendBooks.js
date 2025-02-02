function validate() {
    let email = document.getElementById("email").value;
    //console.log(email, emailError);
  
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let password = document.getElementById("password").value;
    //let confirmPassword = document.getElementById("confirmPassword").value;
    document.getElementById("error").innerHTML = "";
    let error = "";
    if (!name) {
        error += "Please enter Bookid <br>";
    }
    if (!phone) {
        error += "Please enter Book_Name <br>";
    }
    if (!email) {
        error += "Please enter Author_Name <br>";
    }
    if (!password) {
        error += "Please enter Genre<br>";
    }
   

    
    if (error) {
        document.getElementById("error").innerHTML = error;
    } else {
        register(name, phone, password, email);
    }
}

function register(name, phone, password, email) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/trendbookControl.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        name: name,
        phone: phone,
        email: email,
        password: password,
        show: 'Review successfully submitted'
    };
    let dataToSend = JSON.stringify(data);

    xhttp.send("data=" + dataToSend);
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            let response = JSON.parse(this.responseText);
            if (response.success) {
                document.getElementById("success").innerHTML = data.show;
                //  document.write("Success");
                alert('Review successfully submitted');
            }
            if (response.error) {
                document.getElementById("error").innerHTML = response.error;
            }
        }
    };
}

