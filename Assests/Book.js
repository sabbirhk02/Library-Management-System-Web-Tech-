function update()
{

    let username = document.getElementById('Bookid').value;
     let xhttp = new XMLHttpRequest();
 
     xhttp.open('POST', '../views/Updates.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('update').innerHTML = this.responseText;
         }
     }
 
     xhttp.send('uname='+username);
 }
 function Deletebook()
{
  
    let username = document.getElementById('Bookid').value;
     let xhttp = new XMLHttpRequest();
     xhttp.open('POST', '../views/DeleteBooks.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('delete').innerHTML = this.responseText;
         }
     }
 
     xhttp.send('uname='+username);
 }
 function add()
{

    let username = document.getElementById('Bookid').value;
     let xhttp = new XMLHttpRequest();
 
     xhttp.open('POST', '../views/Addbooks.php', true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.onreadystatechange = function(){
         if(this.readyState == 4 && this.status == 200){
             //alert(this.responseText);
             document.getElementById('addBook').innerHTML = this.responseText;
         }
     }
 
     xhttp.send('uname='+username);
 }