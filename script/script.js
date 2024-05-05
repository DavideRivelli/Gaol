const playButton = document.getElementById("playButton");

playButton.addEventListener("click", () => {
    window.location.href = "game_lobby.php";
});

const classesButton = document.getElementById("classesButton");

classesButton.addEventListener("click", () => {
    window.location.href = "classes.php";
});

const progressButton = document.getElementById("progressButton");

progressButton.addEventListener("click", () => {
    window.location.href = "progress.php";
});

const exitButton = document.getElementById("exitButton");

exitButton.addEventListener("click", () => {
    const result = confirm("Sicuro di voler tornare alla schermata iniziale?");
    if (result) {
        window.location.href = "index.html";
    }
});