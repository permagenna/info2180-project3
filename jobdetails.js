window.onload= function(){
    load1();
    
    
};

function load1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("result").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dashboard.php", true);
  xhttp.send();
}



/* check this
$(document).ready(function(){
            
        let httpRequest;
        let id = job_id;
        let encodedData = "";
        let encodedDataPairs = [];
        let data = {id: id};
        let name;
        let phpToLoad = "/jobDetails.php";
            
        for(name in data) {
                    encodedDataPairs.push(encodeURIComponent(name) + '=' + encodeURIComponent(data[name]));
                }
            
        encodedData = encodedDataPairs.join('&').replace(/%20/g, '+');
        
        makeRequest(phpToLoad);
            
        //allows a user to apply for the particular job being displayed
        let applyJob = document.getElementById("apply-job").addEventListener("click", function(event){
            
            event.preventDefault();
            phpToLoad = "/apply.php";
            makeRequest(phpToLoad);
        });
        
        function makeRequest(page){
            httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = request;
            httpRequest.open('POST', page);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send(encodedData);
        }
        
        function request(){
            if (httpRequest.readyState === XMLHttpRequest.DONE){
                if (httpRequest.status === 200){
                    if(phpToLoad === "/apply.php"){
                        document.getElementById('message').innerHTML = httpRequest.responseText;
                    }else{
                         document.getElementById('result').innerHTML = httpRequest.responseText;
                    }
                } else {
                    alert('There was a problem with the request.');
                }
            }
        }
});
*/

*/