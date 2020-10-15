function SearchRoutes(){
    var input, filter, RouteTable, tr, td, txtValue;
    input = document.getElementById("TakeThis");
    filter = input.value.toUpperCase();
    RouteTable = document.getElementById("DateTimeTable");
    tr = RouteTable.getElementsByTagName("tr");
    //var th = document.getElementById("ID"); //Testing, delete later
    // alert(th);

    for (let i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0]; //Match it with Point B or ID
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) { //Don't change -1
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

