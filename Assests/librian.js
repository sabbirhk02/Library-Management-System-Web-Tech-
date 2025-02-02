function addlibrian(){
 
    let username = document.getElementById('adding').value;
     let xhttp = new XMLHttpRequest();
  
     xhttp.open('POST', '../views/Addlibrian.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('add').innerHTML = this.responseText;
         }
     }
  
     xhttp.send('Ladd='+username);
 }


 function updatelibrian(){
 
    let username = document.getElementById('updating').value;
     let xhttp = new XMLHttpRequest();
  
     xhttp.open('POST', '../views/Updatelibrian.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('update').innerHTML = this.responseText;
         }
     }
  
     xhttp.send('Lupp='+username);
 }


 function deletelibrian(){
 
    let username = document.getElementById('deleting').value;
     let xhttp = new XMLHttpRequest();
  
     xhttp.open('POST', '../views/Deletelibrian.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('delete').innerHTML = this.responseText;
         }
     }
  
     xhttp.send('Ldel='+username);
 }