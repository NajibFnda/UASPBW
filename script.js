document.addEventListener("DOMContentLoaded", function() {
    console.log("JavaScript MancingKing: Siap!");

    const darkBtn = document.getElementById("darkBtn");
    const lightBtn = document.getElementById("lightBtn");

    if (darkBtn && lightBtn) {
        darkBtn.addEventListener("click", () => {
            document.body.classList.add("dark-mode");
            document.body.classList.remove("light-mode");
            console.log("Mode: Gelap");
        });

        lightBtn.addEventListener("click", () => {
            document.body.classList.add("light-mode");
            document.body.classList.remove("dark-mode");
            console.log("Mode: Terang");
        });
    }
});