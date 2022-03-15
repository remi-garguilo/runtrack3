document.addEventListener('DOMContentLoaded', (event) => {

    var btncounter = document.querySelector('#button');
    let counter = 0;

    btncounter.addEventListener('click', function showhide(){
       counter++;
       document.querySelector('#compteur').innerHTML = counter;
    })
})