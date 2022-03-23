document.addEventListener('DOMContentLoaded', (event) => {

    let btn = document.getElementById("button");
    let p1 = document.getElementById("1");
    let p2 = document.getElementById("2");
    let p3 = document.getElementById("3");
    let txt = document.getElementById("text")
    let arrayTxt = ["Le commerce est notre seul but chez Tyrell. Plus humain que l'humain est notre devise.",
    "Vous lisez un magazine et vous tombez sur toute une page de photos de filles nues.",
    "Vous me testez pour savoir si je suis un réplicant ou une lesbienne, monsieur Deckard ?"]

    btn.addEventListener("click", function() {
        const random = Math.floor(Math.random() * arrayTxt.length);
        txt.innerHTML = arrayTxt[random]
        console.log(txt);
    })
    $('.pagination').on('click', 'li:not(.prev):not(.next)', function() {
        $('.pagination li').removeClass('active');
        $(this).not('.prev,.next').addClass('active');
    });
    
    $('.pagination').on('click', 'li.prev', function() {
        $('li.active').removeClass('active').prev().addClass('active');
    });
    
    $('.pagination').on('click', 'li.next', function() {
        $('li.active').removeClass('active').next().addClass('active');
    });
    
    function drawPagination(numOfPages) {
        $('#pag_nav ul').empty();
        $('#pag_nav ul').append('<li class=prev><a href=# aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>');
       for (var i = 1; i <= numOfPages; i++) {
          $('#pag_nav ul').append('<li><a href=#>' + i + '</a></li>');
       }
       $('#pag_nav ul').append('<li class=next><a href=# aria-label=Previous><span aria-hidden=true>&raquo;</span></a></li>');
    }
    
    drawPagination(5);
})