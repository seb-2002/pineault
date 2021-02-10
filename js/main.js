AOS.init();

window.onload = function () {
  runMediaQuery();
};

window.onscroll = function () {
  controlFooter();
};

const footer = document.getElementById("myFooter");

const footerTriggerIn1 = document.getElementById("trigger-footer-in-1");
const footerTriggerOut = document.getElementById("trigger-footer-out");

const footerTriggerIn1Height = footerTriggerIn1
  ? footerTriggerIn1.offsetHeight
  : null;

const footerTriggerOutHeight = footerTriggerOut
  ? footerTriggerOut.offsetHeight
  : null;

let footerTriggerIn1Position = footerTriggerIn1
  ? footerTriggerIn1.offsetTop - 100
  : null;

let footerTriggerOutPosition = footerTriggerOut
  ? footerTriggerOut.offsetTop - 500
  : null;

function runMediaQuery() {
  const width = window.innerWidth;
  const height = window.innerHeight;
  console.log(width);
  if (width > 1450) {
    footerTriggerIn1Position -= 500;
    footerTriggerOutPosition -= 400;
  } else if (width >= 1024 && height >= 1360) {
    footerTriggerIn1Position -= 1050;
    footerTriggerOutPosition -= 1000;
  } else if (width >= 768) {
    footerTriggerIn1Position -= 550;
    footerTriggerOutPosition -= 500;
  } else if (width >= 375) {
    footerTriggerIn1Position -= 250;
    footerTriggerOutPosition -= 500;
  }
}

function controlFooter() {
  if (
    (footer &&
      footerTriggerOut &&
      footerTriggerOutPosition &&
      window.pageYOffset > footerTriggerOutPosition) ||
    (footer &&
      footerTriggerIn1 &&
      footerTriggerIn1Position &&
      window.pageYOffset < footerTriggerIn1Position)
  ) {
    myFooter.classList.add("hidden");
    myFooter.classList.remove("present");
  } else if (footer && footerTriggerOut) {
    myFooter.classList.remove("hidden");
    myFooter.classList.add("present");
  }
}

// const postContent = document.getElementById("post-content");

// window.onresize = function () {
//   console.log(window.innerWidth);
// };
