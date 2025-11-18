// Adicionando interatividade ao formulário
    document.addEventListener('DOMContentLoaded', function() {
      // Formatação automática do ISBN
      const isbnInput = document.getElementById('isbn');
      isbnInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        e.target.value = value;
      });
      
      // Feedback visual ao selecionar arquivo
      const fileInput = document.getElementById('capa');
      const fileInputLabel = document.querySelector('.file-input-label span');
      
      fileInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
          fileInputLabel.textContent = this.files[0].name;
        } else {
          fileInputLabel.textContent = 'Selecionar imagem da capa';
        }
      });
    });