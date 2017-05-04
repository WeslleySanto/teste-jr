## Laravel 5.2

## Rotas API

### Listar vendedores:
GET '/api/vendedores'

### Criar vendedor
POST '/api/vendedor'
- Campos:
    - nome
    - email

### Efetuar uma venda
POST '/api/venda'
- Campos:
    - vendedor_id
    - valor decimal (8,2)