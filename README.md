# cadastro-biblioteca.github.io
Trabalho Senac. Cadastro de Livros Biblioteca em PHP.

# Perguntas Simples de Negócio para Cadastro de Livros

Estas são perguntas básicas que ajudam a decidir quais informações devem existir no cadastro de livros da biblioteca.

---

## 1. O que precisamos saber sobre o livro?
- Quais dados são obrigatórios? (título, autor, ano, editora)
- Vamos usar ISBN ou não?

---

## 2. Vamos registrar apenas o livro ou cada cópia?
- A biblioteca tem mais de uma cópia do mesmo livro?
- Cada cópia precisa ter um número próprio?

---

## 3. O livro pode ser emprestado?
- Todos podem ser emprestados?
- Alguns são só para consulta?

---

## 4. Onde o livro fica guardado?
- Precisamos registrar a localização (ex: sala, estante)?

---

## 5. O livro é físico, digital ou ambos?
- Vai ter campo para arquivo PDF ou link?
- Ou vamos cadastrar apenas livros físicos?
R: Apenas Livros Físicos
---

# Ideias de como fazer

- Comece com poucos campos obrigatórios (título, autor, ano).  
- Adicione campos extras só se realmente forem usados no dia a dia.  
- Use uma estrutura simples:  
  - Dados do livro  
  - Dados da cópia (opcional, se existirem várias)  
  - Disponibilidade (emprestável ou não)  
- Evite criar campos que ninguém vai preencher ou consultar depois.  

