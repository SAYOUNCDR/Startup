//Js for nav bar hover stroke colour change
document.addEventListener("DOMContentLoaded", function () {
  // Select all flex containers that match your component structure
  const flexContainers = document.querySelectorAll("#main-div");

  flexContainers.forEach((container) => {
    // Get the SVG div and SVG element within each container
    // This uses class selectors instead of ID selectors
    const svgDiv = container.querySelector("#svg-div");
    const svg = container.querySelector("svg");

    // Add mouseenter event listener to the container
    container.addEventListener("mouseenter", function () {
      if (svgDiv) {
        svgDiv.style.backgroundColor = "white";
        svgDiv.style.borderColor = "#e5e5e5";
      }

      if (svg) {
        svg.style.stroke = "black";
      }
    });

    // Add mouseleave event listener to the container
    container.addEventListener("mouseleave", function () {
      if (svgDiv) {
        svgDiv.style.backgroundColor = "black";
        svgDiv.style.borderColor = "#4a4a4a";
      }

      if (svg) {
        svg.style.stroke = "white";
      }
    });

    // Add transition for smooth color change
    if (svgDiv) {
      svgDiv.style.transition =
        "background-color 0.3s ease, border-color 0.3s ease";
    }

    if (svg) {
      svg.style.transition = "stroke 0.3s ease";
    }
  });
});

// Script for changing text
const words = ["Founder", "Investor", "Contributor"];
let index = 0;
const wordElement = document.getElementById("changing-word");

function typeEffect(word) {
  wordElement.textContent = "";
  let i = 0;

  function type() {
    if (i < word.length) {
      wordElement.textContent += word[i];
      i++;
      setTimeout(type, 200); // Typing speed
    } else {
      setTimeout(eraseEffect, 1000); // Pause before erasing
    }
  }
  type();
}

function eraseEffect() {
  let text = wordElement.textContent;

  function erase() {
    if (text.length > 0) {
      text = text.slice(0, -1);
      wordElement.textContent = text;
      setTimeout(erase, 50); // Erasing speed
    } else {
      index = (index + 1) % words.length;
      setTimeout(() => typeEffect(words[index]), 500); // Start next word
    }
  }
  erase();
}

typeEffect(words[index]); // Start animation

// Toggle functionality for filter categories
document.querySelectorAll(".filter-category button").forEach((button) => {
  button.addEventListener("click", () => {
    const content = button.nextElementSibling;
    const icon = button.querySelector("svg");

    // Close all other open filters
    document.querySelectorAll(".filter-content").forEach((item) => {
      if (item !== content && item.classList.contains("block")) {
        item.classList.remove("block");
        item.classList.add("hidden");
        const parentButton = item.previousElementSibling;
        const parentIcon = parentButton.querySelector("svg");
        parentIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />`;
      }
    });

    // Toggle current filter
    if (content.classList.contains("hidden")) {
      content.classList.remove("hidden");
      content.classList.add("block");
      icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />`;
    } else {
      content.classList.remove("block");
      content.classList.add("hidden");
      icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />`;
    }
  });
});
