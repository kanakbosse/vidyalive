
  // Select all tab buttons and content items
const tabButtons = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.content-item');

// Function to remove the active class from all tabs and content items
const resetActiveState = () => {
tabButtons.forEach(btn => btn.classList.remove('active'));
tabContents.forEach(content => content.classList.remove('active'));
};

// Function to set the active tab based on the content in view
const setActiveTab = (targetContentId) => {
const targetButton = document.querySelector(`.tab-btn[data-target=${targetContentId}]`);
if (targetButton) {
  resetActiveState();
  targetButton.classList.add('active');
  const targetContent = document.getElementById(targetContentId);
  if (targetContent) targetContent.classList.add('active');
}
};

// Intersection Observer to watch content visibility
const observer = new IntersectionObserver((entries) => {
entries.forEach(entry => {
  // If content is in view, set it as active
  if (entry.isIntersecting) {
    setActiveTab(entry.target.id);
  }
});
}, {
threshold: 0.5  // Trigger when 50% of the content is visible
});

// Observe each content item
tabContents.forEach(content => {
observer.observe(content);
});

// Handle tab button clicks
tabButtons.forEach(button => {
button.addEventListener('click', () => {
  const targetContentId = button.getAttribute('data-target');
  setActiveTab(targetContentId);
  // Scroll to the content area
  document.getElementById(targetContentId).scrollIntoView({
    behavior: 'smooth',
    block: 'start'
  });
});
});
