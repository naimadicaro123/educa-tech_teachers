function formatCPF(input) {
    // Remove caracteres não numéricos
    const value = input.value.replace(/\D/g, '');

    // Formata o CPF no padrão 111.111.111-11
    if (value.length <= 11) {
        // Aplica a formatação para o CPF no formato 111.111.111-11
        input.value = value.replace(/(\d{3})(\d)/, '$1.$2');
        input.value = input.value.replace(/(\d{3})(\d)/, '$1.$2');
        input.value = input.value.replace(/(\d{3})(\d{2})$/, '$1-$2');
    }
}
