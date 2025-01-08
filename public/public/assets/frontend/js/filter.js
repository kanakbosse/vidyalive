    // JavaScript to handle the accordion toggle functionality
document.querySelectorAll('.accordion-toggle').forEach(button => {
button.addEventListener('click', function () {
const parentItem = this.closest('.accordion-item');
parentItem.classList.toggle('open'); // Toggle the open class to show/hide the content
});
});

