document.addEventListener('DOMContentLoaded', (event) => {

    var str = document.getElementById('citation');
    var btn = document.getElementById('button');

    btn.addEventListener('click', function showhide(){
        if (str.style.display == 'block'){
            str.style.display = 'none';
        }
        else{
            str.style.display = 'block';
        }
    })
})