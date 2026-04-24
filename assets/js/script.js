document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const themeText = document.getElementById('theme-text');

    const savedTheme = localStorage.getItem('theme') || 'dark';

    document.body.classList.remove('dark-mode', 'light-mode');
    document.body.classList.add(`${savedTheme}-mode`);

    updateThemeButton(savedTheme);

    themeToggle.addEventListener('click', () => {
        const isDark = document.body.classList.contains('dark-mode');
        const newTheme = isDark ? 'light' : 'dark';

        document.body.classList.remove('dark-mode', 'light-mode');
        document.body.classList.add(`${newTheme}-mode`);

        localStorage.setItem('theme', newTheme);
        updateThemeButton(newTheme);
    });

    function updateThemeButton(theme) {
        if (theme === 'dark') {
            themeIcon.src = 'https://unpkg.com/lucide-static@latest/icons/sun.svg';
            themeIcon.alt = 'Light';
            themeText.textContent = 'Light';
        } else {
            themeIcon.src = 'https://unpkg.com/lucide-static@latest/icons/moon.svg';
            themeIcon.alt = 'Dark';
            themeText.textContent = 'Dark';
        }
    }

    document.querySelectorAll('a[href="#about"], a[href="#projects"], a[href="#contact"]').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            const target = document.querySelector(link.getAttribute('href'));
            if (!target) return;

            target.scrollIntoView({ behavior: 'smooth', block: 'start' });

            target.classList.remove('section-flash');

            setTimeout(() => {
                target.classList.add('section-flash');
            }, 10);

            setTimeout(() => {
                target.classList.remove('section-flash');
            }, 1000);
        });
    });
});