const search = document.querySelector('input');
const products = document.querySelectorAll('.product');

search.addEventListener('keyup', (e) => {
    let content = e.target.value;
    products.forEach((prod) => {
        if (prod.textContent.toLowerCase().indexOf(content) >= 0) {
            prod.style.display = '';
        } else {
            prod.style.display = 'none';
        }
    });
})
// || prod.textContent.toUppercase().indexOf(content) >= 0 toLowerCase