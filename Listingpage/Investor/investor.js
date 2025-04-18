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


// Search functionality--------------------------------------
// Investor Search and Filter Functionality
document.addEventListener('DOMContentLoaded', function() {
  // Reference to the search input
  const searchInput = document.querySelector('input[placeholder="Search..."]');
  
  // Reference to all investor cards (adjust the selector based on your actual structure)
  const investorCards = document.querySelectorAll('.investor-card'); // Add this class to your investor cards
  
  // Function to filter investors based on search text
  function filterInvestors(searchText) {
    const searchTerms = searchText.toLowerCase().trim().split(' ').filter(term => term.length > 0);
    
    // If search is empty, show all investors
    if (searchTerms.length === 0) {
      investorCards.forEach(card => {
        card.style.display = 'block';
      });
      return;
    }
    
    // Check each investor card against search terms
    investorCards.forEach(card => {
      const fullName = card.querySelector('.investor-name')?.textContent.toLowerCase() || '';
      const organization = card.querySelector('.investor-organization')?.textContent.toLowerCase() || '';
      const title = card.querySelector('.investor-title')?.textContent.toLowerCase() || '';
      const sectors = Array.from(card.querySelectorAll('.investor-sector')).map(sector => 
        sector.textContent.toLowerCase()
      );
      const investorType = card.querySelector('.investor-type')?.textContent.toLowerCase() || '';
      const investmentStage = card.querySelector('.investor-investment-stage')?.textContent.toLowerCase() || '';
      const fundingStage = card.querySelector('.investor-funding-stage')?.textContent.toLowerCase() || '';
      const thesis = card.querySelector('.investor-thesis')?.textContent.toLowerCase() || '';
      
      // Combine all searchable text
      const searchableText = [
        fullName, 
        organization, 
        title, 
        ...sectors, 
        investorType, 
        investmentStage, 
        fundingStage, 
        thesis
      ].join(' ');
      
      // Check if all search terms are found in the card
      const matchesAllTerms = searchTerms.every(term => 
        searchableText.includes(term)
      );
      
      // Show or hide based on match
      card.style.display = matchesAllTerms ? 'block' : 'none';
    });
  }
  
  // Event listener for input changes (with debounce for better performance)
  let debounceTimer;
  searchInput.addEventListener('input', function() {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
      filterInvestors(this.value);
    }, 300); // 300ms debounce delay
  });
});

