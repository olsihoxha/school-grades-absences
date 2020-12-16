
var modal = null;
 function pop() {
   if(modal === null) {
     document.getElementById("box").style.display = "block";
     modal = true
   } else {
     document.getElementById("box").style.display = "none";
     modal = null;
   }
 }


 var subject = null;
 function popit() {
   if(subject === null) {
     document.getElementById("subject-box").style.display = "block";
     subject = true
   } else {
     document.getElementById("subject-box").style.display = "none";
     subject = null;
   }
 }
