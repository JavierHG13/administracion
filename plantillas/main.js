// Mostrar y ocular el sidebar
document.addEventListener('DOMContentLoaded', () => {
    
    document.getElementById('toggle-btn').onclick = function() {
    document.getElementById('sidebar').classList.toggle('active');
    }
});