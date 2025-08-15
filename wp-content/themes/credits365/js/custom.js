$(window).scroll(function(){
    if ($(this).scrollTop() > 40) {
       $('.header-section').addClass('sticky');
    } else {
       $('.header-section').removeClass('sticky');
    }
});


$(document).ready(function(){
  $('.fade-carousel').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    autoplay: true,
    autoplayTimeout: 3000,
    smartSpeed: 1000,
    animateOut: 'fadeOut', // optional fade out class
    mouseDrag: false,
    touchDrag: false,
    dots: true,
  });
});

$('.TheBenefits-carousel').owlCarousel({
    loop: true,
    margin: 30,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: true,
    nav: true,
    navText: [
        `<span class='icon icon-arrow-left'>
            <svg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path d='M2.46123 10.6635L8.08623 16.2885C8.26235 16.4647 8.50123 16.5635 8.7503 16.5635C8.99937 16.5635 9.23824 16.4647 9.41435 16.2885C9.59047 16.1124 9.68941 15.8735 9.68941 15.6245C9.68941 15.3754 9.59047 15.1365 9.41435 14.9604L5.39008 10.9378H16.8745C17.1232 10.9378 17.3616 10.839 17.5374 10.6632C17.7132 10.4874 17.812 10.2489 17.812 10.0003C17.812 9.75163 17.7132 9.51317 17.5374 9.33736C17.3616 9.16153 17.1232 9.06276 16.8745 9.06276H5.39008L9.4128 5.03776C9.58891 4.86164 9.68785 4.62277 9.68785 4.3737C9.68785 4.12463 9.58891 3.88576 9.4128 3.70964C9.23667 3.53351 8.9978 3.43457 8.74873 3.43457C8.49965 3.43457 8.26078 3.53351 8.08467 3.70964L2.45965 9.33464C2.37223 9.42186 2.30294 9.52547 2.25565 9.63956C2.20837 9.75364 2.18423 9.87593 2.18437 9.99941C2.18451 10.1229 2.20894 10.2451 2.25651 10.3591C2.30408 10.4731 2.37365 10.5765 2.46123 10.6635Z' fill='white'/>
            </svg>
        </span>`,
        `<span class='icon icon-arrow-right'>
            <svg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path d='M17.5378 9.33646L11.9128 3.71146C11.7367 3.53532 11.4978 3.43646 11.2487 3.43646C10.9997 3.43646 10.7608 3.53532 10.5847 3.71146C10.4086 3.8876 10.3096 4.12646 10.3096 4.37546C10.3096 4.6246 10.4086 4.86346 10.5847 5.0396L14.6089 9.06223H3.12451C2.87587 9.06223 2.63741 9.16102 2.4616 9.33683C2.28578 9.51264 2.18701 9.7511 2.18701 9.99973C2.18701 10.2484 2.28578 10.4868 2.4616 10.6626C2.63741 10.8385 2.87587 10.9372 3.12451 10.9372H14.6089L10.5862 14.9622C10.4101 15.1384 10.3112 15.3772 10.3112 15.6263C10.3112 15.8754 10.4101 16.1142 10.5862 16.2904C10.7624 16.4665 11.0012 16.5654 11.2503 16.5654C11.4994 16.5654 11.7382 16.4665 11.9144 16.2904L17.5394 10.6654C17.6268 10.5781 17.6961 10.4745 17.7434 10.3604C17.7907 10.2464 17.8148 10.1241 17.8147 10.0006C17.8145 9.8771 17.7901 9.75487 17.7425 9.6409C17.6949 9.52693 17.6254 9.42346 17.5378 9.33646Z' fill='white'/>
            </svg>
        </span>`
    ],
    items: 1,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1.2,
        }
    }
});

$('.Testimonials-carousel').owlCarousel({
    loop: true,
    margin: 30,
    autoplay: false,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    dots: true,
    nav: true,
    navText: [
        `<span class='icon icon-arrow-left'>
            <svg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path d='M2.46123 10.6635L8.08623 16.2885C8.26235 16.4647 8.50123 16.5635 8.7503 16.5635C8.99937 16.5635 9.23824 16.4647 9.41435 16.2885C9.59047 16.1124 9.68941 15.8735 9.68941 15.6245C9.68941 15.3754 9.59047 15.1365 9.41435 14.9604L5.39008 10.9378H16.8745C17.1232 10.9378 17.3616 10.839 17.5374 10.6632C17.7132 10.4874 17.812 10.2489 17.812 10.0003C17.812 9.75163 17.7132 9.51317 17.5374 9.33736C17.3616 9.16153 17.1232 9.06276 16.8745 9.06276H5.39008L9.4128 5.03776C9.58891 4.86164 9.68785 4.62277 9.68785 4.3737C9.68785 4.12463 9.58891 3.88576 9.4128 3.70964C9.23667 3.53351 8.9978 3.43457 8.74873 3.43457C8.49965 3.43457 8.26078 3.53351 8.08467 3.70964L2.45965 9.33464C2.37223 9.42186 2.30294 9.52547 2.25565 9.63956C2.20837 9.75364 2.18423 9.87593 2.18437 9.99941C2.18451 10.1229 2.20894 10.2451 2.25651 10.3591C2.30408 10.4731 2.37365 10.5765 2.46123 10.6635Z' fill='white'/>
            </svg>
        </span>`,
        `<span class='icon icon-arrow-right'>
            <svg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path d='M17.5378 9.33646L11.9128 3.71146C11.7367 3.53532 11.4978 3.43646 11.2487 3.43646C10.9997 3.43646 10.7608 3.53532 10.5847 3.71146C10.4086 3.8876 10.3096 4.12646 10.3096 4.37546C10.3096 4.6246 10.4086 4.86346 10.5847 5.0396L14.6089 9.06223H3.12451C2.87587 9.06223 2.63741 9.16102 2.4616 9.33683C2.28578 9.51264 2.18701 9.7511 2.18701 9.99973C2.18701 10.2484 2.28578 10.4868 2.4616 10.6626C2.63741 10.8385 2.87587 10.9372 3.12451 10.9372H14.6089L10.5862 14.9622C10.4101 15.1384 10.3112 15.3772 10.3112 15.6263C10.3112 15.8754 10.4101 16.1142 10.5862 16.2904C10.7624 16.4665 11.0012 16.5654 11.2503 16.5654C11.4994 16.5654 11.7382 16.4665 11.9144 16.2904L17.5394 10.6654C17.6268 10.5781 17.6961 10.4745 17.7434 10.3604C17.7907 10.2464 17.8148 10.1241 17.8147 10.0006C17.8145 9.8771 17.7901 9.75487 17.7425 9.6409C17.6949 9.52693 17.6254 9.42346 17.5378 9.33646Z' fill='white'/>
            </svg>
        </span>`
    ],
    items: 1,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        768: {
            items: 2,
        },
        1000: {
            items: 3,
        },
        1200: {
            items: 4,
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
   const openBtn = document.getElementById("openVideoPopup");
   const closeBtn = document.getElementById("closeVideoPopup");
   const popup = document.getElementById("videoPopup");

   openBtn.addEventListener("click", function (e) {
      e.preventDefault();
      popup.style.display = "flex";
   });

   closeBtn.addEventListener("click", function () {
      popup.style.display = "none";
   });

   window.addEventListener("click", function (e) {
      if (e.target === popup) {
         popup.style.display = "none";
      }
   });
});

document.addEventListener("DOMContentLoaded", function () {
   document.querySelectorAll(".StarRating").forEach(function (el) {
      const rating = parseInt(el.getAttribute("data-rating")) || 0;
      el.innerHTML = "";

      for (let i = 1; i <= 5; i++) {
         const star = document.createElement("span");
         star.className = "star";
         star.innerHTML = i <= rating ? "★" : "☆";
         el.appendChild(star);
      }
   });
});