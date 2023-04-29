## Descrição

Web-Site, com sistema de agendamento incluso para um Lava-Jato.

<details><summary><h2>Tecnologias</h2></summary>

|  |  |
| --- | --- |
| PHP | <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" width="55" height="55"/> |
| MySQL | <img src="https://github.com/devicons/devicon/blob/master/icons/mysql/mysql-original.svg" alt="MySQL" width="55" height="55"/> |
| HTML | <img src="https://github.com/devicons/devicon/blob/master/icons/html5/html5-original.svg" alt="HTML5" width="55" height="55"/> |
| CSS | <img src="https://github.com/devicons/devicon/blob/master/icons/css3/css3-original.svg" alt="CSS3" width="55" height="55"/> | 
| Bootstrap | <img src="https://github.com/devicons/devicon/blob/master/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap" width="55" height="55"/>
| JavaScript | <img src="https://github.com/devicons/devicon/blob/master/icons/javascript/javascript-original.svg" alt="JavaScript" width="55" height="55"/> |

</details>

<details><summary><h2>Páginas</h2></summary>

> ### WebSite (Raíz)
>
> ### Tela de Login (Usuários)
>
> ### Tela de Cadastro (Usuários)
>
> ### Painel de Agendamento (Usuários)
>
> ### Painel de Gerenciamento (Administrador)

</details>

<h2>Estruturação de dados</h2>
  
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
  

