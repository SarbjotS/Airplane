function ShowFlightOnBrowse(){
    document.getElementById("ShowBrowseFlightDetails").value ="";
    var input = document.getElementById("TakeThis").value;
    if (input === "R01"){
        document.getElementById("ShowBrowseFlightDetails").value = "Flight ID: R01\n" +
            "The flight will start its journey in Dairy Flat and arrive at Sydney\n" +
            "The flight is approximately 3 hours long and will encompass a journey of 1164km \n" +
            "🏘------------✈-----------🏙\n";
    }else if (input === "R02"){
        document.getElementById("ShowBrowseFlightDetails").value ="Flight ID: R02\n"+
        "The flight will start its journey in Dairy Flat and arrive at Rotorua\n" +
        "The flight is approximately 43 minutes long and will encompass a journey of 137km\n" +
        "🏘------------✈-----------🏘";

    }else if (input ==="R03"){
        document.getElementById("ShowBrowseFlightDetails").value ="Flight ID: R03\n"+
            "The flight will start its journey in Dairy Flat and arrive at Claris Airport\n" +
            "The flight is approximately 31 minutes long and will encompass a journey of 581km\n" +
            "🏘------------✈-----------🏖";

    }else if (input === "R04"){
        document.getElementById("ShowBrowseFlightDetails").value ="Flight ID: R04\n"+
            "The flight will start its journey in Dairy Flat and arrive at Tuuta Airport\n" +
            "The flight is approximately 1 hour 42 minutes long and will encompass a journey of 54km\n" +
            "🏘------------✈-----------🏖";

    }else if (input === "R05"){
        document.getElementById("ShowBrowseFlightDetails").value ="Flight ID: R05\n"+
            "The flight will start its journey in Dairy Flat and arrive at Lake Tekapo Airport\n" +
            "The flight is approximately 1 hour 42 minutes long and will encompass a journey of 472km\n" +
            "🏘------------✈-----------🏖";


    }else{
        randomText = "Please select a flight ID";
    }

     randomText;

}