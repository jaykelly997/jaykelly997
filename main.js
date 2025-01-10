
document.addEventListener('DOMContentLoaded', () => {
    "use strict";
  
    /**
     * Preloader
     */
    const preloader = document.querySelector('#preloader');
    if (preloader) {
      window.addEventListener('load', () => {
        preloader.remove();
      });
    }
  
    /**
     * Sticky header on scroll
     */
    const selectHeader = document.querySelector('#header');
    if (selectHeader) {
      document.addEventListener('scroll', () => {
        window.scrollY > 100 ? selectHeader.classList.add('fixed-top') : selectHeader.classList.remove('fixed-top');
      });
    }



  /**
   * Navbar links active state on page
   */
  let navbarlink = document.getElementsByClassName('nav-link');
    if ( navbarlink ) {
      document.addEventListener('clicked', () =>{
        console.log('clicked')
        navbarlink.classList.add('active')
      }
      )
    }

  



  
/**
* Back to top button
*/

    const scrollTop = document.querySelector('.back-to-top');
    if (scrollTop) {
      const togglescrollTop = function() {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
      }
      window.addEventListener('load', togglescrollTop);
      document.addEventListener('scroll', togglescrollTop);
      scrollTop.addEventListener('click', window.scrollTo({
        top: 0,
        scrollBehavior: 'smooth'
      }));
    }


    


      

})