
function toggleTheme() {
    const body = document.body;
    body.classList.toggle("dark"); // Alternar a classe 'dark-theme' no elemento <body>
}

// Adicionar um ouvinte de eventos ao elemento de alternância (checkbox)
const themeToggle = document.getElementById("theme-toggle");
themeToggle.addEventListener("change", toggleTheme);

// Verificar a preferência de tema do usuário
if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
    // Se o usuário preferir o tema escuro, ative o tema escuro por padrão
    toggleTheme();
}






