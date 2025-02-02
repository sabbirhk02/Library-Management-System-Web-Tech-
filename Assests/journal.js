function addjournal(){
 
    let username = document.getElementById('adding').value;
     let xhttp = new XMLHttpRequest();
  
     xhttp.open('POST', '../views/Addjournal.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('add').innerHTML = this.responseText;
         }
     }
  
     xhttp.send('Ladd='+username);
 }



 function deletejournal(){
 
    let username = document.getElementById('deleting').value;
     let xhttp = new XMLHttpRequest();
  
     xhttp.open('POST', '../views/Deletejournal.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('delete').innerHTML = this.responseText;
         }
     }
  
     xhttp.send('Ldel='+username);
 }