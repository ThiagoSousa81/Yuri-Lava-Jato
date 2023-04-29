## Descrição

Web-Site, com sistema de agendamento incluso para um Lava-Jato.

<details><summary><h2>Tecnologias</h2></summary>

- PHP
- MySQL
- HTML/CSS
- Bootstrap
- JavaScript

</details>

<details><summary><h2>Páginas</h2></summary>

### WebSite

### Tela de Login

### Tela de Cadastro de Usuários

### Painel de Gerenciamento

</details>

<details><summary><h2>Estruturação de dados</h2></summary>
  
  ### Veículos
  
  - ID_VEICULO
  - TIPO_VEICULO  
  - MARCA_VEICULO 
  - DESCRICAO_VEICULO
  
  ### Clientes
  
  - ID_CLIENTE
  - NOME_CLIENTE
  - CPF_CLIENTE
  - TELEFONE_CLIENTE
  - WHATSAPP_CLIENTE
  - RUA_CLIENTE
  - N_CASA_CLIENTE
  - BAIRRO_CLIENTE
  - CIDADE_CLIENTE  
  
  ### Serviços
  
  - ID_SERVICO
  - NOME_SERVICO
  - DESCRICAO_SERVICO
  - VALOR_SERVICO
  - TEMPO_APROXIMADO_SERVICO
  
  ### Agendamento
  
  - ID_AGENDAMENTO
  - ID_CLIENTE
  - ID_SERVIÇO
  - ID_VEICULO
  - DATA_AGENDAMENTO
  - HORA_AGENDAMENTO
  - TERMINIO_AGENDAMENTO
  
</details>
