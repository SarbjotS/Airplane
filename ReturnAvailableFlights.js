function ReturnAvailableFlights(){
    //Syber Weekly to Sydney on sunday midafternoon
    //Cirrus01 Rotorua twice a day, morning back at noon and late afternoon and back after evening
    //Cirrus02 morning Monday Wednesday and Friday to Claris, return on morning Tuesday Friday and Saturday
    //HondaJet01 Tuuta Island, Tuesday and Friday leaves, returns on Wednesday and Saturday
    //HondaJet02 departs fir Lake Tekapo on Monday and returns on Friday
    var Syber = ["YSSY", "NZNE"];
    var Cirrus01 = ["NZRO","NZNE"];
    var Cirrus02 = ["NZGB", "NZNE"];
    var HondaJet01 = ["NZCI", "NZNE"];
    var HondaJet02 = ["NZTL", "NZNE"];
    var a = document.getElementById('To').value;
    var b = "flight goes from " + a;
    var c = HondaJet02;
    if (Syber.includes(a)){
        document.getElementById("ShowDetailsOfFlight").value = b;
    }
}