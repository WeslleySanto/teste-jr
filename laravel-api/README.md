## Laravel 5.2

## Rotas API

### Listar vendedores:
GET '/api/vendedores'

### Criar vendedor
POST '/api/vendedor'
- Campos:
    - nome
    - email

### Nova venda para um vendedor
POST '/api/venda'
- Campos:
    - vendedor_id
    - valor