AOS.init();

window.onscroll = function () {
  controlFooter();
};

const footer = document.getElementById("myFooter");

const footerTrigger = document.getElementById("trigger-footer-out");

const footerTriggerHeight = footerTrigger ? footerTrigger.offsetHeight : null;

const footerTriggerPosition = footerTrigger
  ? footerTrigger.offsetTop - footerTriggerHeight
  : null;

function controlFooter() {
  if (
    footer &&
    footerTrigger &&
    footerTriggerPosition &&
    window.pageYOffset > footerTriggerPosition
  ) {
    myFooter.classList.add("hidden");
    myFooter.classList.remove("present");
  } else if (footer && footerTrigger) {
    myFooter.classList.remove("hidden");
    myFooter.classList.add("present");
  }
}

// const postContent = document.getElementById("post-content");

// window.onresize = function () {
//   console.log(window.innerWidth);
// };
