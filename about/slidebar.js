let pos = 0;

const leftBtn = document.querySelector("#slider .left");
const rightBtn = document.querySelector("#slider .right");
const slider = document.querySelector("#slider ul");
//  var

rightBtn.onclick = function () {
  pos++;
  animate();
  leftBtn.classList.remove("hidden");
  if (pos === 3) {
    rightBtn.classList.add("hidden");
  }
};
function animate() {
  slider.style.marginLeft = -600 * pos + "px";
}
leftBtn.onclick = function () {
  pos--;
  animate();
  rightBtn.classList.remove("hidden");

  if (pos === 0) {
    leftBtn.classList.add("hidden");
  }
};
