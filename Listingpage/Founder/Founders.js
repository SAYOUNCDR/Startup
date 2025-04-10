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






