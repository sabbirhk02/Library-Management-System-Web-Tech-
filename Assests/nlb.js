var emailError = true;

function validate() {
  
  
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let author=document.getElementById("Author").value;
    let genre=document.getElementById("Genre").value;
    let rating=document.getElementById("Rating").value;
  
    document.getElementById("error").innerHTML = "";
    let error = "";
    if (!name) {
        error += "Please enter Book ID <br>";
    }
    if (!phone) {
        error += "Please enter Book Name <br>";
    }
    if (!author) {
        error += "Please enter Author Name <br>";
    }
    if (!genre) {
        error += "Please enter Genre <br>";
    }
    if (!rating) {
        error += "Please enter Rating <br>";
    }
    
    
    if (error) {
        document.getElementById("error").innerHTML = error;
    } else {
        register(name, phone, author, genre, rating);
    }
}

function register(name, phone, author, genre, rating) {
    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../controller/Recommended_BooksCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    let data = {
        name: name,
        phone: phone,
        author: author,
        genre:  genre,
        rating: rating,
     
        show : 'success'
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


