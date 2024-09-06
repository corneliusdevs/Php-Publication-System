function toggeleMenu() {
    let menuIcon = document.getElementById("menu-icon");
    let navMenuContainer = document.getElementById("nav-menu-container");
    let currentSrc = menuIcon.getAttribute("src");
    let newSrc = menuIcon.getAttribute("data-alt-src");
    let menuState = menuIcon.getAttribute("data-menu-state");

    if (menuState === "closed") {
        menuIcon.setAttribute("data-menu-state", "open");
        navMenuContainer.style.display = "block"
    } else {
        menuIcon.setAttribute("data-menu-state", "closed");
        navMenuContainer.style.display = "none"

    }
    menuIcon.setAttribute("src", newSrc);
    menuIcon.setAttribute("data-alt-src", currentSrc);
}