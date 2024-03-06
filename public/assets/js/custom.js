
function Menu(e) {
    e.name === "menu" ? (e.name = "close", $('#main-menu').removeClass('hidden')) : (e.name = "menu" , $('#main-menu').addClass('hidden'));
}
