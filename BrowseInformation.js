function BrowseInformation(){
   let a = document.getElementById("TakeThis").value;
   if (a == "R01"){ //Really cheap way to do it but can't find way to compare
                     //php value with input
      document.getElementById("R01").classList.toggle("show");
   }
   if(a == "R02"){
      document.getElementById("R02").classList.toggle("show");
   }
   if(a == "R03"){
      document.getElementById("R03").classList.toggle("show");

   }
   if(a == "R04"){
      document.getElementById("R04").classList.toggle("show");

   }
   if(a == "R05"){
      document.getElementById("R05").classList.toggle("show");

   }
    //POP UP MENU THAT SHOWS FLIGHT ID ORIGIN, DESTINATION AND DISTANCE

}