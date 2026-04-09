document.addEventListener("DOMContentLoaded", () => {

    const menuItems = document.querySelectorAll(".menu-item");
    const pages = document.querySelectorAll(".page");

    console.log("Menu:", menuItems.length);
    console.log("Pages:", pages.length);

    menuItems.forEach(item => {

        item.addEventListener("click", (e) => {
            e.preventDefault();

            const pageId = item.dataset.page;
            console.log("Clicou:", pageId);

            // ativa menu
            menuItems.forEach(i => i.classList.remove("active"));
            item.classList.add("active");

            // troca páginas
            pages.forEach(p => p.classList.remove("active"));

            const page = document.getElementById(pageId);

            if (page) {
                page.classList.add("active");
            } else {
                console.error("Página NÃO encontrada:", pageId);
            }
        });

    });

});