const title = document.querySelectorAll("h2,h3");
title.forEach((currentTitle) => {
  const words = currentTitle.textContent.split(" ");
  currentTitle.textContent = "";
  words.forEach((currentWord, index) => {
    const span = document.createElement("span");
    span.textContent = currentWord + " ";
    span.classList.add("word-animation");
    currentTitle.appendChild(span);
  });
});
