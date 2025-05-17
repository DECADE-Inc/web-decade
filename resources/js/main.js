function calculateSettingAsThemeString({
    localStorageTheme,
    systemSettingDark
}) {
    if (localStorageTheme !== null) {
        return localStorageTheme;
    }

    if (systemSettingDark.matches) {
        return "dark";
    }

    return "light";
}

function updateButton({
    buttonEl,
    isDark
}) {
    const newCta = isDark ? "Change to light theme" : "Change to dark theme";
    // use an aria-label if you are omitting text on the button
    // and using a sun/moon icon, for example
    buttonEl.setAttribute("aria-label", newCta);
    buttonEl.checked = isDark;
}

function updateThemeOnHtmlEl({
    theme
}) {
    document.querySelector("html").setAttribute("data-theme", theme);
}

const button = document.querySelector("[data-theme-toggle]");
const localStorageTheme = localStorage.getItem("theme");
const systemSettingDark = window.matchMedia("(prefers-color-scheme: dark)");

let currentThemeSetting = calculateSettingAsThemeString({
    localStorageTheme,
    systemSettingDark
});

updateButton({
    buttonEl: button,
    isDark: currentThemeSetting === "dark"
});

updateThemeOnHtmlEl({
    theme: currentThemeSetting
});

button.addEventListener("click", (event) => {
    const newTheme = currentThemeSetting === "dark" ? "light" : "dark";

    localStorage.setItem("theme", newTheme);
    updateButton({
        buttonEl: button,
        isDark: newTheme === "dark"
    });
    updateThemeOnHtmlEl({
        theme: newTheme
    });

    currentThemeSetting = newTheme;
});

document.addEventListener('DOMContentLoaded', () => {
    var glide = new Glide('.glide', {
        type: 'carousel', perView: 3, focusAt: 'center', gap: 30, autoplay: 2000, breakpoints: {
            1200: { perView: 2, focusAt: 0 }, 800: { perView: 1 }
        }
    }).mount();

    glide.on('run', function () {
        var bullets = Array.from(document.getElementsByClassName("glide__bullet"));
        var bullet = document.getElementById("glide-bullet-" + glide.index);
        bullets.forEach(e => {
            e.classList.remove("bg-[#828282]");
            e.classList.add("bg-[#C3C3C3]");
        });
        bullet.classList.remove("bg-[#C3C3C3]");
        bullet.classList.add("bg-[#828282]");
    });
});

