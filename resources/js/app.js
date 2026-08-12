import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

    const menuButton =
        document.getElementById('menuButton');

    const mobileMenu =
        document.getElementById('mobileMenu');


    if (menuButton && mobileMenu) {

        menuButton.addEventListener('click', () => {

            mobileMenu.classList.toggle('active');

        });


        mobileMenu
            .querySelectorAll('a')
            .forEach(link => {

                link.addEventListener('click', () => {

                    mobileMenu.classList.remove('active');

                });

            });

    }


    /*
    |--------------------------------------------------------------------------
    | Watch Video
    |--------------------------------------------------------------------------
    */

    const videoButton =
        document.getElementById('videoButton');

    if (videoButton) {

        videoButton.addEventListener('click', () => {

            alert('Video player will be added here.');

        });

    }

    /*
    |--------------------------------------------------------------------------
    | ABOUT SECTION -- Choose Active Element
    |--------------------------------------------------------------------------
    */

});