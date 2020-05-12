$(document).ready(function () {
    
    const $DOM = {
        header: $(".header"),
        btn: $(".header__btn"),
        headerItem: $(".header__nav ul li")
    }

    $DOM.headerItem.click(e => {
        const $this = $(e.currentTarget);
        const $submenu = $this.children("ul");

        if ($submenu.length > 0) {
            $submenu.stop().slideToggle("fast");
        }
    });

    $DOM.btn.click(() => {
        $DOM.header.toggleClass("is-open");
    });
    
});