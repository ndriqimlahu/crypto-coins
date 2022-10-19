// Reloading the data
function reloadDataFromApi() {
  window.location.reload(true);
}

// Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the page, then show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, then scroll to the top of the page
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// Show an alert to notify the user about the website which use cookies
window.addEventListener("load", function() {
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#6C757D"
      },
      "button": {
        "background": "#0B5ED7"
      },
    },
    content: {
      header: 'Cookies used on the website!',
      message: 'This website uses cookies to ensure you get the best experience on our website.',
      dismiss: 'Got it!',
      allow: 'Allow cookies',
      deny: 'Decline',
      link: 'Learn more',
      href: 'https://www.cookiesandyou.com',
      close: '&#x274c;',
    }
  })
});