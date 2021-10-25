document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems);
});

/**Menu sticky */

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 50) {
            $('.nav').addClass('sticky-nav')
        } else {
            $('.nav').removeClass('sticky-nav')
        }
    })
})

/**Boton flotante */

function irArriba() {
    window.addEventListener('scroll', () => {
        var scroll = document.documentElement.scrollTop;
        var botonSubir = document.getElementById('botonSubir');
        botonSubir.className = ('btn-flotante-hidde');
        if (scroll > 460) {
            botonSubir.className = ('btn-flotante');
        } else {
            botonSubir.className = ('btn-flotante-hidde');
        }
    })
}
irArriba();

/*** efecto hover navbar */
function hovear() {
    let hovearOne = document.getElementById('active-one');
    let hovearTwo = document.getElementById('active-two');
    let hovearThree = document.getElementById('active-three');

    let url = window.location.pathname;

    if ((url.indexOf('') !== -1 ) || (url.indexOf('index') !== -1 ) || (url.indexOf('productos') !== -1 ) || (url.indexOf('categoria') !== -1 ) || (url.indexOf('detalles') !== -1 )) {
        hovearOne.className = ('nav-hover');
        hovearOne.addEventListener('mouseover', function () {
            hovearOne.className = ('nav-hover');
        });

        if (hovearTwo.classList.contains('nav-elements')) {
            hovearTwo.addEventListener('mouseover', function () {
                hovearTwo.className = ('nav-hover');
                hovearOne.className = ('nav-elements');
            })
            hovearTwo.addEventListener('mouseout', function () {
                hovearTwo.className = ('nav-elements');
                hovearOne.className = ('nav-hover');
            })
        }

        if (hovearThree.classList.contains('nav-elements')) {
            hovearThree.addEventListener('mouseover', function () {
                hovearThree.className = ('nav-hover');
                hovearOne.className = ('nav-elements');
            })
            hovearThree.addEventListener('mouseout', function () {
                hovearThree.className = ('nav-elements');
                hovearOne.className = ('nav-hover');
            })
        }

    }

    if ((url.indexOf('nosotros') !== -1)) {
        hovearOne.className = ('nav-elements');
        hovearTwo.className = ('nav-hover');
        hovearTwo.addEventListener('mouseover', function () {
            hovearTwo.className = ('nav-hover');
            hovearOne.className = ('nav-elements');
        });
         hovearTwo.addEventListener('mouseout', function () {
            hovearTwo.className = ('nav-hover');
            hovearOne.className = ('nav-elements');
        });

        if (hovearOne.classList.contains('nav-elements')) {
            hovearOne.addEventListener('mouseover', function () {
                hovearOne.className = ('nav-hover');
                hovearTwo.className = ('nav-elements');
            })
            hovearOne.addEventListener('mouseout', function () {
                hovearOne.className = ('nav-elements');
                hovearTwo.className = ('nav-hover');
            })
        }

        if (hovearThree.classList.contains('nav-elements')) {
            hovearThree.addEventListener('mouseover', function () {
                hovearThree.className = ('nav-hover');
                hovearOne.className = ('nav-elements');
                hovearTwo.className = ('nav-elements');
                
            })
            hovearThree.addEventListener('mouseout', function () {
                hovearThree.className = ('nav-elements');
                hovearTwo.className = ('nav-hover');
                hovearOne.className = ('nav-elements');
                
            })
        }

      


    }

    if (url.indexOf('contacto') !== -1) {;
        hovearOne.className = ('nav-elements');
        hovearThree.className = ('nav-hover');
        hovearThree.addEventListener('mouseover', function () {
            hovearThree.className = ('nav-hover');
            hovearOne.className = ('nav-elements');
        });
        hovearThree.addEventListener('mouseout', function () {
            hovearThree.className = ('nav-hover');
            hovearOne.className = ('nav-elements');
        });
       

        if (hovearTwo.classList.contains('nav-elements')) {
            hovearTwo.addEventListener('mouseover', function () {
                hovearTwo.className = ('nav-hover');
                hovearOne.className=('nav-elements');
                hovearThree.className = ('nav-elements');
            })
            hovearTwo.addEventListener('mouseout', function () {
                hovearTwo.className = ('nav-elements');
                hovearOne.className = ('nav-elements')
                hovearThree.className = ('nav-hover');
            })
        }

        if (hovearOne.classList.contains('nav-elements')) {
            hovearOne.addEventListener('mouseover', function () {
                hovearOne.className = ('nav-hover');
                hovearThree.className = ('nav-elements');
            })
            hovearOne.addEventListener('mouseout', function () {
                hovearOne.className = ('nav-elements');
                hovearThree.className = ('nav-hover');
            })
        }

    }
}
hovear();




