function ReturnAvailableFlights(){
    //Syber Weekly to Sydney on sunday midafternoon
    //Cirrus01 Rotorua twice a day, morning back at noon and late afternoon and back after evening
    //Cirrus02 morning Monday Wednesday and Friday to Claris, return on morning Tuesday Friday and Saturday
    //HondaJet01 Tuuta Island, Tuesday and Friday leaves, returns on Wednesday and Saturday
    //HondaJet02 departs fir Lake Tekapo on Monday and returns on Friday
    document.getElementById("ShowDetailsOfFlight").value ="";
    var Syber = ["YSSY", "NZNE"];
    var Cirrus01 = ["NZRO","NZNE"];
    var Cirrus02 = ["NZGB", "NZNE"];
    var HondaJet01 = ["NZCI", "NZNE"];
    var HondaJet02 = ["NZTL", "NZNE"];
    var a = document.getElementById('To').value;
    var b = document.getElementById('From').value;

    if (Syber.includes(a) && Syber.includes(b)){
        document.getElementById("ShowDetailsOfFlight").value = "Airplane: SyberJet\nOrigin Airport:Dairy Flat\nDestination Airport: Sydney Kingsford Smith Airport\n" +
            "Date: Every Friday at 3:00PM\n" +
            "Return flights\nAirplane: Syberjet\nOrigin Airport: Sydney Kingsford Smith Airport\nDestination Airport: Dairy Flat\nDate: 6:00PM NZDT (3:00PM local time)";
    }  else if (Cirrus01.includes(a) && Cirrus01.includes(b)){
        document.getElementById("ShowDetailsOfFlight").value = "Airplane: Cirrus01\nOrigin Airport:Dairy Flat\nDestination Airport: Rotorua Airport\n" +
            "Date: Twice daily, Monday to Friday.\nFirst flight: 7:00AM \nSecond flight: 3:00PM \n" +
            "Return flights\nAirplane: Cirrus01\nOrigin Airport: Rotorua Airport\nDestination Airport: Dairy Flat\nDate: Twice daily, Monday to Friday\n" +
            "First returning flight: 12PM \nSecond returning flight: 6:00PM";
    }
        else if(Cirrus02.includes(a) && Cirrus02.includes(b)){
            document.getElementById('ShowDetailsOfFlight').value = "Airplane: Cirrus02 \nOrigin Airport: Dairy Flat\n" +
                "Destination Airport: Claris Aerodrome\nDate: 8:00AM every Monday, Wednesday and Friday\nReturn flights\n" +
                "Airplane: Cirrus02\nOrigin Airport: Claris Aerodrome\nDestination Airport: Dairy Flat\nDate 8:00AM every Tuesday and Saturday. 11:00AM on Friday "
        }
        else if(HondaJet01.includes(a) && HondaJet01.includes(b)){
            document.getElementById('ShowDetailsOfFlight').value ="Airplane: HondaJet01\nOrigin Airport: Dairy Flat\n" +
                "Destination Airport: Tuuta Airport\nDate: 3:00PM on Tuesday and Friday\nReturn flights\n" +
                "Airplane: HondaJet01\nOrigin Airport: Tuuta Airport\nDestination Airport: Dairy Flat\nDate: 3:00PM on Wednesday and Saturday"
        }
        else if (HondaJet02.includes(a) && HondaJet02.includes(b)){
            document.getElementById('ShowDetailsOfFlight').value = "Airplane: HondaJet02\nOrigin Airport: Dairy Flat\n " +
                "Destination Airport: Lake Tekapo Airport\nDate: Every Monday at 5:00PM\nReturn flights\n" +
                "Airplane: HondaJet02\nOrigin Airport: Lake Tekapo Airport\nDestination Airport:Dairy Flat\nDate: Every Friday at 5:00PM"
        }else{
            document.getElementById('ShowDetailsOfFlight').value= "Sorry but we do not have any routes going in those directions"
    }
    if (a == b){
        document.getElementById("ShowDetailsOfFlight").value = "";
    }
}