function addbook(){
 
    let username = document.getElementById('adding').value;
     let xhttp = new XMLHttpRequest();
  
     xhttp.open('POST', '../views/Addbook.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('add').innerHTML = this.responseText;
         }
     }
  
     xhttp.send('Ladd='+username);
 }


 function updatebook(){
 
    let username = document.getElementById('updating').value;
     let xhttp = new XMLHttpRequest();
  
     xhttp.open('POST', '../views/Update.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('update').innerHTML = this.responseText;
         }
     }
  
     xhttp.send('Lupp='+username);
 }


 function deletebook(){
 
    let username = document.getElementById('deleting').value;
     let xhttp = new XMLHttpRequest();
  
     xhttp.open('POST', '../views/DeleteBook.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('delete').innerHTML = this.responseText;
         }
     }
  
     xhttp.send('Ldel='+username);
 }