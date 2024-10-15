function formatDate(input) {
    // Remove caracteres não numéricos
    const value = input.value.replace(/\D/g, '');
    // Adiciona a barra após o dia e o mês
    if (value.length >= 2) {
        input.value = value.replace(/(\d{2})(\d)/, '$1/$2');
    }
    if (value.length >= 4) {
        input.value = value.replace(/(\d{2})(\d{2})(\d)/, '$1/$2/$3');
    }
}