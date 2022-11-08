const container = document.querySelector(".container");
const bloodSpot = document.querySelector(".bloodSpot");
const startBtn = document.querySelector(".startBtn");

const trash = document.createElement("img");
trash.setAttribute("class", "trash");
trash.setAttribute("src", "./img/trash.png");

const trash2 = document.createElement("img");
trash2.setAttribute("class", "trash2");
trash2.setAttribute("src", "./img/trash5.png");

const contHeight = container.offsetHeight;
const contWidth = container.offsetWidth;

setInterval(() => {
  const randTop = Math.random() * (contHeight - 100);
  const randLeft = Math.random() * (contWidth - 100);
  const randRight = Math.random() * (contWidth - 100);

  trash.style.position = "absolute";
  trash.style.top = randTop + "px";
  trash.style.left = randLeft + "px";

  trash2.style.position = "absolute";
  trash2.style.top = randTop + "px";
  // trash2.style.left = randLeft + "px";
  trash2.style.right = randRight + "px";
}, 1000);

let score = 0;

startBtn.addEventListener("click", () => {
  container.appendChild(trash);
  container.appendChild(trash2);

  startBtn.innerText = "SCORE: " + score;
});

window.addEventListener("click", (e) => {
  bloodSpot.style.top = e.pageY + "px";
  bloodSpot.style.left = e.pageX + "px";

  if (e.target === trash2) score++;

  startBtn.innerText = "SCORE: " + score;
});

const cursor = document.querySelector(".cursor");
window.addEventListener("mousemove", (e) => {
  cursor.style.top = e.pageY + "px";
  cursor.style.left = e.pageX + "px";
});
