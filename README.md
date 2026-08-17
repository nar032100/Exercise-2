<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Dashboard UI</title>
    <style>
        :root {
            --bg-color: #f8fafc;
            --card-bg: #ffffff;
            --text-main: #0f172a;
            --text-sub: #64748b;
            --primary: #3b82f6;
            --primary-hover: #2563eb;
            --border-color: #e2e8f0;
            --accent-bg: #eff6ff;
            --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05), 0 4px 6px -4px rgba(0, 0, 0, 0.05);
        }

        [data-theme="dark"] {
            --bg-color: #0f172a;
            --card-bg: #1e293b;
            --text-main: #f8fafc;
            --text-sub: #94a3b8;
            --border-color: #334155;
            --accent-bg: #1e3a8a;
            --shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s, color 0.3s;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navigation Header */
        header {
            background-color: var(--card-bg);
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: var(--shadow);
        }

        .logo {
            font-weight: 700;
            font-size: 1.25rem;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .theme-btn {
            background: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-main);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
        }

        .theme-btn:hover {
            background-color: var(--accent-bg);
        }

        /* Main Container */
        main {
            max-width: 1100px;
            width: 100%;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }

        .hero {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .hero h1 {
            font-size: 2.25rem;
            margin-bottom: 0.5rem;
        }

        .hero p {
            color: var(--text-sub);
            font-size: 1.1rem;
        }

        /* Grid Layout */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        /* Card Component */
        .card {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .badge {
            background-color: var(--accent-bg);
            color: var(--primary);
            padding: 0.25rem 0.6rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .card-value {
            font-size: 2rem;
            font-weight: 700;
        }

        .card-desc {
            color: var(--text-sub);
            font-size: 0.9rem;
        }

        /* Interactive Section */
        .action-box {
            background-color: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 2rem;
            box-shadow: var(--shadow);
        }

        .input-group {
            display: flex;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        input[type="text"] {
            flex: 1;
            padding: 0.75rem 1rem;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            background-color: var(--bg-color);
            color: var(--text-main);
            font-size: 1rem;
            outline: none;
        }

        input[type="text"]:focus {
            border-color: var(--primary);
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
        }

        /* Simple List Output */
        .item-list {
            margin-top: 1rem;
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .item-list li {
            padding: 0.75rem 1rem;
            background-color: var(--bg-color);
            border: 1px solid var(--border-color);
            border-radius: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <div class="logo">✨ AppUI Design</div>
        <button class="theme-btn" id="themeToggle">🌙 Dark Mode</button>
    </header>

    <!-- Main Dashboard Content -->
    <main>
        <section class="hero">
            <h1>User Dashboard</h1>
            <p>A pure frontend responsive user interface sample.</p>
        </section>

        <!-- Dynamic Cards Grid -->
        <div class="grid">
            <div class="card">
                <div class="card-header">
                    <span class="card-title">Total Users</span>
                    <span class="badge">+12%</span>
                </div>
                <div class="card-value">1,248</div>
                <div class="card-desc">Active users across all regions</div>
            </div>

            <div class="card">
                <div class="card-header">
                    <span class="card-title">Revenue</span>
                    <span class="badge">+8.5%</span>
                </div>
                <div class="card-value">₱45,200</div>
                <div class="card-desc">Total earnings for this month</div>
            </div>

            <div class="card">
                <div class="card-header">
                    <span class="card-title">Tasks Done</span>
                    <span class="badge">94%</span>
                </div>
                <div class="card-value">18/20</div>
                <div class="card-desc">Completed operational tasks</div>
            </div>
        </div>

        <!-- Interactive Quick Action Box -->
        <section class="action-box">
            <h3>Quick Item Adder (UI Demo)</h3>
            <p style="color: var(--text-sub); font-size: 0.9rem; margin-top: 0.25rem;">Type anything to preview adding list items dynamically.</p>
            
            <div class="input-group">
                <input type="text" id="itemInput" placeholder="Enter item title...">
                <button class="btn-primary" id="addBtn">Add Item</button>
            </div>

            <ul class="item-list" id="itemList">
                <li><span>Sample Item 1</span> <span style="color: var(--text-sub); font-size: 0.8rem;">Active</span></li>
            </ul>
        </section>
    </main>

    <!-- JavaScript Interactivity -->
    <script>
        // Dark Mode Toggle Logic
        const themeBtn = document.getElementById('themeToggle');
        let isDark = false;

        themeBtn.addEventListener('click', () => {
            isDark = !isDark;
            document.body.setAttribute('data-theme', isDark ? 'dark' : 'light');
            themeBtn.textContent = isDark ? '☀️ Light Mode' : '🌙 Dark Mode';
        });

        // Dynamic List Item Addition
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
    </script>
</body>
</html>
