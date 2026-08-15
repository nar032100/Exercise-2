<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Exercise #2 · PHP + JS</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: linear-gradient(145deg, #f6f9fc 0%, #e9f0f5 100%);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1.5rem;
        }
        .card {
            max-width: 820px;
            width: 100%;
            background: rgba(255,255,255,0.75);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            border-radius: 2.5rem;
            padding: 2.2rem 2.5rem;
            box-shadow: 0 25px 45px -12px rgba(0,20,40,0.25),
                        0 4px 12px rgba(0,0,0,0.03);
            border: 1px solid rgba(255,255,255,0.6);
            transition: all 0.2s ease;
        }
        h1 {
            font-size: 2.1rem;
            font-weight: 600;
            letter-spacing: -0.02em;
            color: #0b1e2e;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.2rem;
        }
        .subhead {
            color: #2c4a6a;
            font-weight: 450;
            font-size: 1rem;
            border-left: 4px solid #3b82f6;
            padding-left: 1rem;
            margin-bottom: 1.8rem;
            opacity: 0.8;
        }
        .form-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem 1rem;
            background: rgba(255,255,255,0.5);
            padding: 1.3rem 1.5rem;
            border-radius: 2rem;
            backdrop-filter: blur(2px);
            margin-bottom: 2rem;
            border: 1px solid rgba(255,255,255,0.8);
        }
        .form-grid input {
            flex: 1 0 140px;
            padding: 0.7rem 1.2rem;
            border: 1px solid #dbe3ed;
            border-radius: 60px;
            font-size: 0.95rem;
            background: white;
            transition: 0.2s;
            outline: none;
            box-shadow: 0 2px 6px rgba(0,0,0,0.01);
        }
        .form-grid input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59,130,246,0.2);
        }
        .form-grid button {
            background: #1f2a3f;
            border: none;
            color: white;
            font-weight: 500;
            padding: 0.7rem 1.8rem;
            border-radius: 60px;
            font-size: 0.95rem;
            cursor: pointer;
            transition: 0.15s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            letter-spacing: 0.3px;
            box-shadow: 0 6px 12px -6px rgba(0,20,40,0.15);
            border: 1px solid rgba(255,255,255,0.1);
        }
        .form-grid button:hover {
            background: #2b3b57;
            transform: scale(1.02);
            box-shadow: 0 10px 18px -8px rgba(0,20,40,0.25);
        }
        .form-grid button:active {
            transform: scale(0.97);
        }
        .stats {
            display: flex;
            justify-content: space-between;
            padding: 0 0.2rem 0.8rem 0.2rem;
            font-size: 0.9rem;
            color: #1e3a5a;
            font-weight: 450;
            border-bottom: 1px dashed #cbdae8;
            margin-bottom: 1.2rem;
        }
        .stats span {
            background: rgba(59,130,246,0.08);
            padding: 0.2rem 1rem;
            border-radius: 30px;
        }
        .user-list {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            max-height: 300px;
            overflow-y: auto;
            padding-right: 0.2rem;
        }
        .user-list::-webkit-scrollbar {
            width: 5px;
        }
        .user-list::-webkit-scrollbar-track {
            background: #e2eaf2;
            border-radius: 10px;
        }
        .user-list::-webkit-scrollbar-thumb {
            background: #8ba0bb;
            border-radius: 10px;
        }
        .user-item {
            background: white;
            padding: 0.6rem 1.4rem 0.6rem 1.4rem;
            border-radius: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 8px rgba(0,0,0,0.02);
            border: 1px solid #e5edf5;
            transition: 0.1s;
            backdrop-filter: blur(2px);
            font-size: 0.95rem;
        }
        .user-item:hover {
            background: #fafdff;
            border-color: #b8cee4;
        }
        .user-info {
            display: flex;
            gap: 1.2rem;
            align-items: baseline;
            flex-wrap: wrap;
        }
        .user-name {
            font-weight: 550;
            color: #0a1c2c;
        }
        .user-email {
            color: #2b577a;
            font-size: 0.85rem;
            opacity: 0.8;
        }
        .user-age {
            background: #eef4fa;
            padding: 0.1rem 0.8rem;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 500;
            color: #1d3b59;
        }
        .delete-btn {
            background: none;
            border: none;
            color: #9eb3c9;
            font-size: 1.2rem;
            cursor: pointer;
            transition: 0.15s;
            padding: 0 0.2rem;
            line-height: 1;
        }
        .delete-btn:hover {
            color: #c0343a;
            transform: scale(1.2);
        }
        .empty-message {
            text-align: center;
            padding: 2rem 0;
            color: #6b86a2;
            font-style: italic;
            background: rgba(255,255,255,0.2);
            border-radius: 60px;
        }
        .footer-actions {
            display: flex;
            justify-content: flex-end;
            margin-top: 1.2rem;
            gap: 1rem;
        }
        .clear-btn {
            background: transparent;
            border: 1px solid #d0ddee;
            padding: 0.3rem 1.2rem;
            border-radius: 40px;
            font-size: 0.8rem;
            color: #3f5b7a;
            cursor: pointer;
            transition: 0.15s;
        }
        .clear-btn:hover {
            background: #f0f5fc;
            border-color: #a0b9d3;
        }
        @media (max-width: 550px) {
            .card { padding: 1.5rem; }
            .form-grid { flex-direction: column; }
            .form-grid input { flex: 1; }
            .user-info { flex-direction: column; gap: 0.2rem; align-items: flex-start; }
        }
    </style>
</head>
<body>

<div class="card" id="app">
    <h1>
        <span>👥</span> Group Exercise #2
    </h1>
    <div class="subhead">PHP + HTML · CSS · JavaScript — interactive user manager</div>

    <!-- form -->
    <div class="form-grid">
        <input type="text" id="userName" placeholder="Full name" value="Alex Rivera">
        <input type="email" id="userEmail" placeholder="Email" value="alex@example.com">
        <input type="number" id="userAge" placeholder="Age" value="28" min="1" max="120">
        <button id="addUserBtn">➕ Add user</button>
    </div>

    <!-- stats & list -->
    <div class="stats">
        <span id="userCountDisplay">👤 0 users</span>
        <span id="averageAgeDisplay">📊 avg age: —</span>
    </div>

    <div class="user-list" id="userListContainer">
        <!-- dynamic list will be rendered here -->
        <div class="empty-message">✨ No users yet · add someone!</div>
    </div>

    <div class="footer-actions">
        <button class="clear-btn" id="clearAllBtn">🗑️ Clear all</button>
    </div>
</div>

<script>
    (function() {
        "use strict";

        // ---------- state ----------
        let users = [];

        // DOM refs
        const nameInput = document.getElementById('userName');
        const emailInput = document.getElementById('userEmail');
        const ageInput = document.getElementById('userAge');
        const addBtn = document.getElementById('addUserBtn');
        const clearBtn = document.getElementById('clearAllBtn');
        const listContainer = document.getElementById('userListContainer');
        const userCountSpan = document.getElementById('userCountDisplay');
        const avgAgeSpan = document.getElementById('averageAgeDisplay');

        // ---------- helpers ----------
        function formatStats() {
            const count = users.length;
            userCountSpan.textContent = `👤 ${count} user${count !== 1 ? 's' : ''}`;

            if (count === 0) {
                avgAgeSpan.textContent = '📊 avg age: —';
                return;
            }
            const total = users.reduce((sum, u) => sum + u.age, 0);
            const avg = (total / count).toFixed(1);
            avgAgeSpan.textContent = `📊 avg age: ${avg}`;
        }

        // render the user list
        function render() {
            if (users.length === 0) {
                listContainer.innerHTML = `<div class="empty-message">✨ No users yet · add someone!</div>`;
                formatStats();
                return;
            }

            let html = '';
            users.forEach((user, index) => {
                const safeName = escapeHtml(user.name);
                const safeEmail = escapeHtml(user.email);
                html += `
                    <div class="user-item" data-index="${index}">
                        <div class="user-info">
                            <span class="user-name">${safeName}</span>
                            <span class="user-email">${safeEmail}</span>
                            <span class="user-age">${user.age} yrs</span>
                        </div>
                        <button class="delete-btn" data-index="${index}" title="Remove user">✕</button>
                    </div>
                `;
            });
            listContainer.innerHTML = html;

            // attach delete events to each delete button
            listContainer.querySelectorAll('.delete-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const idx = parseInt(this.getAttribute('data-index'), 10);
                    if (!isNaN(idx) && idx >= 0 && idx < users.length) {
                        users.splice(idx, 1);
                        render();
                    }
                });
            });

            formatStats();
        }

        // simple escape (prevent XSS via innerHTML)
        function escapeHtml(text) {
            if (!text) return '';
            const map = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            };
            return String(text).replace(/[&<>"']/g, function(m) { return map[m]; });
        }

        // ---------- add user logic ----------
        function addUser() {
            const name = nameInput.value.trim();
            const email = emailInput.value.trim();
            const ageRaw = parseInt(ageInput.value, 10);

            // validation
            if (name === '') {
                alert('Please enter a name.');
                nameInput.focus();
                return false;
            }
            if (email === '' || !email.includes('@') || !email.includes('.')) {
                alert('Please enter a valid email address.');
                emailInput.focus();
                return false;
            }
            if (isNaN(ageRaw) || ageRaw < 1 || ageRaw > 120) {
                alert('Please enter a valid age (1–120).');
                ageInput.focus();
                return false;
            }

            // push new user
            users.push({
                name: name,
                email: email,
                age: ageRaw
            });

            // clear inputs (keep placeholder)
            nameInput.value = '';
            emailInput.value = '';
            ageInput.value = '';

            // refocus
            nameInput.focus();

            render();
            return true;
        }

        // ---------- clear all ----------
        function clearAll() {
            if (users.length === 0) return;
            if (confirm('Delete all users?')) {
                users = [];
                render();
            }
        }

        // ---------- init / event binding ----------
        function init() {
            // pre-populate with demo users (so it's not empty)
            users = [
                { name: 'Aisha Chen', email: 'aisha.c@design.co', age: 31 },
                { name: 'Marcus Johansson', email: 'marcus.j@tech.io', age: 27 },
                { name: 'Priya Sharma', email: 'priya.s@global.org', age: 34 }
            ];
            render();

            // add button
            addBtn.addEventListener('click', function(e) {
                e.preventDefault();
                addUser();
            });

            // enter key on any input triggers add
            const inputs = [nameInput, emailInput, ageInput];
            inputs.forEach(inp => {
                inp.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        addUser();
                    }
                });
            });

            // clear all
            clearBtn.addEventListener('click', function(e) {
                e.preventDefault();
                clearAll();
            });

            // extra: focus name on load
            nameInput.focus();
        }

        // start when DOM ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', init);
        } else {
            init();
        }

    })();
</script>

<!-- PHP backend snippet: simple message & server time (visible only when .php served) -->
<?php
    // This is a PHP block that echoes a small server-side note.
    // It does not interfere with the frontend app.
    // It demonstrates PHP integration within the same page.
    $serverTime = date('H:i:s');
    // We'll inject a hidden comment or small indicator using a style.
    // But we keep it unobtrusive.
?>
<!-- PHP server info (injected) -->
<div style="margin-top: 1.2rem; font-size: 0.7rem; color: #6f8aa8; text-align: right; border-top: 1px solid rgba(0,0,0,0.03); padding-top: 0.8rem; opacity: 0.6; display: flex; justify-content: space-between;">
    <span>⚙️ PHP 8 · served at <?php echo htmlspecialchars($serverTime); ?></span>
    <span>🧩 group exercise #2</span>
</div>

</body>
</html>
