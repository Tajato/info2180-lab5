window.onload = function() {
    const lookupButton = document.getElementById('lookup')
    const displayResults = document.getElementById('result')
    const userData = document.getElementById('country')
    lookupButton.addEventListener('click',showData)
    
    
    
    function showData() {
        const userDataValue = userData.value
       var xhr = new XMLHttpRequest();
       xhr.onreadystatechange = function() {
           if(xhr.readyState == 4 && xhr.status == 200) {
              var results = xhr.responseText
              
            displayResults.innerHTML = results;
              
       }
       }
    
       xhr.open("GET","world.php?country="+userDataValue, true)
       
       xhr.send()
    
    }
    
    
    }