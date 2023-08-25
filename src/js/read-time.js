function readingTime() {
  const text = document.querySelector(".single-post .content").innerText;
  const wpm = 150;
  const words = text.trim().split(/\s+/).length;
  const time = Math.ceil(words / wpm);
  document.querySelector(".post-time-read span").innerText = time;
}
if (document.body.classList.contains("single-post")) {
  readingTime();
}