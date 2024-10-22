function showPopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'block';

    setTimeout(() => {
        popup.style.display = 'none';
        window.location.href = 'tel:+393791710929';  // Simula una chiamata
    }, 1500);  // Durata di 1,5 secondi
}

// Aggiungi interattività alla sezione FAQ
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item h3');

    faqItems.forEach(item => {
        item.addEventListener('click', function() {
            const parent = this.parentNode;
            parent.classList.toggle('active');
        });
    });
});
