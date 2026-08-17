const themeBtn = document.getElementById('themeToggle');
let isDark = false;

themeBtn.addEventListener('click', () => {
    isDark = !isDark;
    document.body.setAttribute('data-theme', isDark ? 'dark' : 'light');
    themeBtn.textContent = isDark ? '☀️ Light Mode' : '🌙 Dark Mode';
});

const addBtn = document.getElementById('addBtn');
const itemInput = document.getElementById('itemInput');
const itemList = document.getElementById('itemList');

addBtn.addEventListener('click', () => {
    const text = itemInput.value.trim();
    if (text !== '') {
        const li = document.createElement('li');
        li.innerHTML = `<span>${text}</span> <span style="color: var(--text-sub); font-size: 0.8rem;">Just added</span>`;
        itemList.appendChild(li);
        itemInput.value = '';
    }
});
