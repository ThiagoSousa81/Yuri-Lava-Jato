## Descrição

Web-Site, com sistema de agendamento incluso para um Lava-Jato.

<h2>Domínio</h2>
  
  ### Para o DNS (Servidor que determina o link do site e hospeda as dependências) temos duas possibilidades:

  > OBS.: O uso de servidor pago implicará em R$ 20,00 (vinte reais) adicionais no pagamento da taxa de prestação de serviço
  
  | Gratuito | Pago | 
  | --- | --- |
  | Quedas constantes | Quedas reduzidas |
  | Nível de segurança média (devido ao serviço de criptografia provida pela [EBS Security Systems](https://ebs-systems.epizy.com/)) | Nível de segurança alta da parte do servidor |
  | Gratuito para sempre | Pagamento de taxa mensal para manter o site |
  
  ### Quanto essa questão de domínio me fale o quanto antes
  

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

> ### [WebSite](https://github.com/ThiagoSousa81/Yuri-Lava-Jato/blob/main/website.md) (Raíz)
>
> ### Tela de Login (Usuários)
>
> ### Tela de Cadastro (Usuários)
>
> ### Painel de Agendamento (Usuários) 
>
> ### [Painel de Gerenciamento (Administrador)](https://github.com/ThiagoSousa81/Yuri-Lava-Jato/blob/main/adm.md)

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
  

