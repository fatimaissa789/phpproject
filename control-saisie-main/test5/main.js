let myform = document.getElementById('myform');



myform.addEventListener('submit',function(e) {
    let name = document.getElementById('username');
    let regex = /^[a-zA-A-\s]+$/;


    if(name.value.trim() == ''){
        let error = document.getElementById('error');
        error.innerHTML = "le champ est requis"
        error.style.color ='red'  ;
        
        
        e.preventDefault();
    }
    else if (regex.test(name.value) == false){
        let error = document.getElementById('error');
        error.innerHTML = "le nom doit commport des et des tires uniquement"
        error.style.color ='red'  ;
        
        
        e.preventDefault();
    }

})