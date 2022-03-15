document.addEventListener('DOMContentLoaded', (event) => {

    var btncounter = document.querySelector('#button');
    let counter = 0;

    btncounter.addEventListener('click', function addone(){
       counter++;
       document.querySelector('#compteur').innerHTML = counter;
    })
})