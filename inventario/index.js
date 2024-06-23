document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab');
    const inventoryTable = document.getElementById('inventory-table');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            
            // Implementar la lógica para mostrar diferentes productos según la pestaña activa
            const tabType = tab.getAttribute('data-tab');
            console.log(`Mostrar productos: ${tabType}`);
            // Aquí puedes añadir la lógica para filtrar los productos en la tabla según la pestaña activa.
        });
    });

    document.getElementById('search-input').addEventListener('input', (e) => {
        const searchTerm = e.target.value.toLowerCase();
        const rows = inventoryTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
        Array.from(rows).forEach(row => {
            const cells = row.getElementsByTagName('td');
            const productName = cells[2].textContent.toLowerCase();
            if (productName.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
});

// Obtener elementos del DOM cuando se completa la carga del DOM
document.addEventListener('DOMContentLoaded', () => {
    const nuevoProductoBtn = document.getElementById('nuevo_Producto');
    const modalAgregar = document.getElementById('modal_agregar');
    const cerrarModalAgregarBtns = document.querySelectorAll('.buton__cancelar, .modal__close');
    const modalBackgrounds = document.querySelectorAll('.modal-agregar, .modal');

    // Función para abrir el modal de agregar producto
    nuevoProductoBtn.onclick = function() {
        modalAgregar.style.display = 'block';
    }

    // Función para cerrar el modal de agregar producto
    cerrarModalAgregarBtns.forEach(btn => {
        btn.onclick = function() {
            modalAgregar.style.display = 'none';
        }
    });

    // Cerrar el modal al hacer clic fuera del contenido del modal
    window.onclick = function(event) {
        modalBackgrounds.forEach(modal => {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    }
});