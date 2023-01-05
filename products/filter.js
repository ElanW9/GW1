// javascript filter toegepast op de producten
document.querySelector("ul").onclick = function (e) {
  if (e.target.nodeName === "LI") {
    document.querySelectorAll(".bc").forEach(function (el) {
      el.classList.remove("bc");
    });
    e.target.classList.add("bc");
    const classToFilter = e.target.classList[0];
    console.log(classToFilter);

    const all = document.querySelector(".parent").children;
    for (let i = 0; i < all.length; i++) {
      all[i].style.display = "none";
    }
    document.querySelectorAll(`.${classToFilter}`).forEach(function (el) {
      el.style.display = "block";
    });
  }
};
