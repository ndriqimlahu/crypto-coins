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