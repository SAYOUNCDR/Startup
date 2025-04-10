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





//-------------------------
const data = [
  {
    id: 1,
    title: "Pardes Biosciences",
    description: "We break viruses",
    image: "./user-01.jpg",
    location: "San Francisco, CA, USA",
  },
  {
    id: 2,
    title: "TechNova",
    description: "Innovating the future",
    image: "./nav-img-1.jpg",
    location: "New York, NY, USA",
  },
  {
    id: 2,
    title: "TechNova",
    description: "Innovating the future",
    image: "./nav-img-1.jpg",
    location: "New York, NY, USA",
  },
];

const company = document.querySelector("#company-card");

data.forEach((item) => {
  const card = document.createElement("div");
  card.className =
    "bg-[#0b0b0d] rounded-lg p-5 flex items-center hover:bg-[#383838] transition-colors cursor-pointer border border-gray-700";

  // Image div
  const imgDiv = document.createElement("div");
  imgDiv.className = "mr-4";
  const innerImgDiv = document.createElement("div");
  innerImgDiv.className =
    "w-12 h-12 bg-gray-700 rounded-full flex items-center justify-center";
  const img = document.createElement("img");
  img.src = item.image;
  img.alt = item.title;
  img.className = "w-full h-full object-cover rounded-full";
  innerImgDiv.appendChild(img);
  imgDiv.appendChild(innerImgDiv);

  // Middle content (title + description + tags)
  const middleDiv = document.createElement("div");
  middleDiv.className = "flex-grow";
  const title = document.createElement("h3");
  title.className = "text-lg font-semibold text-gray-200";
  title.innerText = item.title;

  const description = document.createElement("p");
  description.className = "text-gray-400 text-sm";
  description.innerText = item.description;

  const tagsDiv = document.createElement("div");
  tagsDiv.className = "mt-2 flex space-x-2";
  const tag = document.createElement("span");
  tag.className = "bg-blue-900 text-blue-300 px-2 py-1 rounded-full text-xs";
  tag.innerText = "HEALTHCARE"; // You can make this dynamic too
  tagsDiv.appendChild(tag);

  middleDiv.appendChild(title);
  middleDiv.appendChild(description);
  middleDiv.appendChild(tagsDiv);

  // Location
  const locationDiv = document.createElement("div");
  locationDiv.className = "text-right";
  const location = document.createElement("p");
  location.className = "text-gray-300";
  location.innerText = item.location;
  locationDiv.appendChild(location);

  // Assemble all parts
  card.appendChild(imgDiv);
  card.appendChild(middleDiv);
  card.appendChild(locationDiv);

  // Append card to the main container
  company.appendChild(card);
});
