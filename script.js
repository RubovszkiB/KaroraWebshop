document.querySelectorAll('.gyarto').forEach(item => {
    item.addEventListener('mouseenter', () => {
        item.querySelector('.dropdown-list').style.display = 'block';
    });

    item.addEventListener('mouseleave', () => {
        item.querySelector('.dropdown-list').style.display = 'none';
    });
});
