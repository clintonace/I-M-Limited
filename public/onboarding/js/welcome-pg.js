




function applyMobileStyles() {

    const section = document.querySelector("section");
    const hoverMan = document.getElementById("hoverMan");
    const mobileMan = document.getElementById("mobileMan");
    const cards = document.querySelectorAll(".dock-card");
    const headings = section.querySelectorAll("h2");
    const paragraphs = section.querySelectorAll("p");

    if (window.innerWidth <= 992) {

        /* Remove gradient animation */
        section.style.background = "#000000";
        section.onmouseenter = null;
        section.onmouseleave = null;

        /* Reduce padding */
        section.style.padding = "90px 20px";

        /* Hide desktop hover image */
        if (hoverMan) {
            hoverMan.style.display = "none";
        }

        /* Show mobile image */
        if (mobileMan) {
            mobileMan.style.display = "block";
        }

        /* Reduce heading size */
        headings.forEach(h => {
            h.style.fontSize = "32px";
        });

        /* Reduce paragraph size */
        paragraphs.forEach(p => {
            p.style.fontSize = "16px";
        });

        /* Make cards square */
        cards.forEach(card => {

            card.style.minWidth = "260px";
            card.style.width = "260px";
            card.style.height = "260px";
            card.style.padding = "30px";
            card.style.display = "flex";
            card.style.flexDirection = "column";
            card.style.justifyContent = "center";

            const h4 = card.querySelector("h4");
            const p = card.querySelector("p");
            const icon = card.querySelector("i");

            if (h4) h4.style.fontSize = "18px";
            if (p) p.style.fontSize = "14px";
            if (icon) icon.style.fontSize = "24px";
        });

    } else {

        /* Restore desktop gradient */
        section.style.background = `
            linear-gradient(to right, 
                #000000 0%, 
                #000000 50%, 
                #000000 50%, 
                #E94E1B 100%)
        `;
        section.style.backgroundSize = "200% 100%";
        section.style.backgroundPosition = "left center";
        section.style.transition = "background-position 1.2s ease";

        /* Restore hover animation */
        section.onmouseenter = function() {
            this.style.backgroundPosition = "right center";
            if (hoverMan) {
                hoverMan.style.opacity = "1";
                hoverMan.style.transform = "translateX(0)";
            }
        };

        section.onmouseleave = function() {
            this.style.backgroundPosition = "left center";
            if (hoverMan) {
                hoverMan.style.opacity = "0";
                hoverMan.style.transform = "translateX(60px)";
            }
        };

        /* Show desktop hover image */
        if (hoverMan) {
            hoverMan.style.display = "flex";
        }

        /* Hide mobile image */
        if (mobileMan) {
            mobileMan.style.display = "none";
        }

        /* Restore padding */
        section.style.padding = "140px 0";
    }
}

/* Run on load */
applyMobileStyles();

/* Run on resize */
window.addEventListener("resize", applyMobileStyles);



//Track element for scrolling cards

const track = document.getElementById("cardTrack");

/* Duplicate only once */
if (!track.dataset.duplicated) {
    track.innerHTML += track.innerHTML;
    track.dataset.duplicated = "true";
}

/* Improve rendering smoothness */
track.style.willChange = "transform";

let scrollSpeed = 0.9;
let position = 0;
let isPaused = false;
let singleSetWidth = track.scrollWidth / 2;

/* Recalculate width on resize */
function updateWidth() {
    singleSetWidth = track.scrollWidth / 2;
}

window.addEventListener("resize", updateWidth);

function animate() {

    if (!isPaused) {

        position -= scrollSpeed;

        /* Smooth seamless reset */
        if (-position >= singleSetWidth) {
            position += singleSetWidth;
        }

        track.style.transform = `translateX(${position}px)`;
    }

    requestAnimationFrame(animate);
}

animate();

/* Pause on hover */
track.addEventListener("mouseenter", () => isPaused = true);
track.addEventListener("mouseleave", () => isPaused = false);

/* Dock hover effect */
const cards = document.querySelectorAll(".dock-card");

cards.forEach(card => {
    card.addEventListener("mouseenter", () => {
        card.style.transform = "scale(1.18)";
        card.style.zIndex = "10";
    });

    card.addEventListener("mouseleave", () => {
        card.style.transform = "scale(1)";
        card.style.zIndex = "1";
    });
});


function toggleSideImages() {

    const leftImg = document.querySelector("img[src='/onboarding/images/woup.png']");
    const rightImg = document.querySelector("img[src='/onboarding/images/maup.png']");

    if (window.innerWidth <= 992) {

        if (leftImg) leftImg.style.display = "none";
        if (rightImg) rightImg.style.display = "none";

    } else {

        if (leftImg) leftImg.style.display = "block";
        if (rightImg) rightImg.style.display = "block";

    }
}

/* Run on load */
toggleSideImages();

/* Run on resize */
window.addEventListener("resize", toggleSideImages);