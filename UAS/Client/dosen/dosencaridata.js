let qs = window.location.search;
let urlP = new URLSearchParams(qs);
let id = urlP.get("id");

let urltarget = new URL("http://localhost/UAS/Server/dosen/dtdsnid.php");
urltarget.searchParams.set("id",id);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    console.log(dta["isi"]); 
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txid").value = dta["isi"][i][0];
        document.getElementById("txnama").value = dta["isi"][i][1];
        document.getElementById("txjkel").value = dta["isi"][i][2];
        document.getElementById("txalamat").value = dta["isi"][i][3];
        document.getElementById("txemail").value = dta["isi"][i][4];
        document.getElementById("txtelp").value = dta["isi"][i][5];
    }

}