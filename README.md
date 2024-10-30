## Compatibilidade

- Compatível com WooCommerce 3.0+.
- Testado e desenvolvido com base na API v.2 do BoaCompra;
- Compatível com PHP 5.4.x à 7+;
- Obrigatório o uso de certificado SSL com o protocolo TLS 1.2;
- Para meios de pagamentos brasileiros é necessária a instalação do plugin [Brazilian Market on WooCommerce](https://br.wordpress.org/plugins/woocommerce-extra-checkout-fields-for-brazil/)

## Instalação

Envie os arquivos do plugin para o seu diretório de plugins (/wp-content/plugins/) ou instale usando a ferramenta de "Adicionar novo plugin" do WordPress.
Na área de plugins do WordPress, ative o módulo BoaCompra for WooCommerce

![](https://user-images.githubusercontent.com/5360720/117220170-119fe000-addd-11eb-991e-431e7c49b7ac.png "Instalação")

## Configuração

---
#### 1 - Ativação

##### MerchantID & SecretKey

A Ativação, MerchantID & SecretKey são os primeiros passos para tornar a sua integração funcional. Após se cadastrar e formalizar a contratação do serviço junto ao BoaCompra, você receberá um SecretKey que será utilizado para referenciar a sua conta e validar os pagamentos processados.

Com os dados em mãos basta selecionar o meio de pagamento que você deseja utilizar e configurar os respecitivos campos.

![image](https://user-images.githubusercontent.com/5360720/117220507-c0442080-addd-11eb-806f-082736a30ec7.png "Configuração - Ativação, MerchantID & SecretKey")

Para ativar o ambiente SandBox basta marcar essa opção:

![image](https://user-images.githubusercontent.com/5360720/117220603-ee296500-addd-11eb-90cd-9a9ec225203e.png "Configuração - Ativar Sandbox")

---
#### 2 - Opções de Pagamento

O módulo disponibiliza ao todo 5 métodos de pagamento distribuido entre cinco diferentes gateways, todos com suas configurações individuais.

![image](https://user-images.githubusercontent.com/5360720/117220737-35aff100-adde-11eb-8dea-eedaa54f5c67.png "BoaCompra - Meios de Pagamento")


- Direct Checkout - Cartão de Crédito

Opção de checkout transparente para cartão de crédito. As parcelas são mostradas após a digitação do número do cartão uma vez que elas dependem da bandeira do cartão para informar a taxa de parcelamento.

![image](https://user-images.githubusercontent.com/5360720/117220799-537d5600-adde-11eb-8f31-46af8e27850b.png "Configuração - Opções de Pagamento - Cartão de Crédito")

- Direct Checkout - Boleto Bancário (somente para o Brasil)

Após a finalização do Checkout o usuário é levado para a página de Thank You com informações do código de pagamento do boleto (segunda imagem).

![image](https://user-images.githubusercontent.com/5360720/117223632-71e65000-ade4-11eb-90e7-5808697414aa.png "Configuração - Opções de Pagamento - Boleto Bancário")

![image](https://user-images.githubusercontent.com/5360720/117225257-46656480-ade8-11eb-9f59-82c3c7409c5a.png "Tela de Checkout - Bardcode do Boleto")

- E-Wallet

As opções disponiveis como e-wallet são as carteiras do PagSeguro e do PayPal

![image](https://user-images.githubusercontent.com/5360720/117225327-7ad92080-ade8-11eb-8f2a-e9b21b9941f9.png "Configuração - Opções de Pagamento - E-Wallet")

- Redirect

Usando a opção de redirect o seu usuário será redirecionado para uma página secura do BoaCompra e lá poderá escolher entre todos os meios de pagamento que você disponibilizou para ele.

![image](https://user-images.githubusercontent.com/5360720/117226319-c4c30600-adea-11eb-83b1-e410b89ba4af.png "Configuração - Opções de Pagamento - Redirect")

- PIX (somente para o Brasil)

Funciona exatamente como o redirect checkout, porém apenas com a opção pix habilitada.

![image](https://user-images.githubusercontent.com/5360720/117226342-d60c1280-adea-11eb-845a-c00331897084.png "Configuração - Opções de Pagamento - PIX")

---
#### 3 - Parcelamento

Defina o máximo de parcelas aceitas pela loja, selecione entre 1 e 12 parcelas.

![image](https://user-images.githubusercontent.com/5360720/117226564-4adf4c80-adeb-11eb-84fb-0d81b8967284.png "Configuração - Parcelamento")

**`Observação:`**

A taxa de juros pode variar de acordo com o teto de faturamento da loja ou a sua negociação contratual junto ao BoaCompra.

---
#### 4 - Boleto Bancário

Na opção Mensagem da Taxa é referente a taxa padrão de cobrança no valor de R$ 1,00 para emissão. Caso você não queira que essa mensagem aparece no momento do checkout, email e thank you basta desmarcar a opção.

![image](https://user-images.githubusercontent.com/5360720/117226702-97c32300-adeb-11eb-92dd-2cc13ffb35ff.png "Configuração do Boleto Bancário")

Você também poderá configurar um prefixo para o ID das suas invoices no BoaCompra

![image](https://user-images.githubusercontent.com/5360720/117226730-a9a4c600-adeb-11eb-8989-37ee149ceb50.png "Configuração do Boleto Bancário")


---
#### 5 - Status de Pedido

Para facilitar o gerenciamento do pedido disponibilizamos a opção de mapeamento de Status.

Os Status disponíveis são:

- Status Iniciado (O pedido mudará automaticamente para este status quando a transação estiver marcada como Pagamento Pendente no BoaCompra)
- Status Aprovado (O pedido mudará automaticamente para este status em caso de aprovação no BoaCompra)
- Status Cancelado (O pedido mudará automaticamente para este status quando a transação for cancelada no BoaCompra)
- Status Aguardando (O pedido mudará automaticamente para este status quando a transação estiver no status aguardando no BoaCompra)

![](https://user-images.githubusercontent.com/22198227/61637073-40cb7880-ac6d-11e9-8c02-f794705f7a2d.png "Configuração - Status de Pedido")

**`Atenção`**

Exitem 02 formas de cancelar um pedido:

**a)** Acesse o pedido desejado no painel do WooCommerce e clique no botão "Reembolso". Em seguida, defina o "Total Reembolsado" e clique no botão "Reembolso R$X,XX por Pagamento via BoaCompra" e em tempo real o módulo transmitirá a requisição para o BoaCompra.

![](https://user-images.githubusercontent.com/22198227/63348304-5c3ea780-c32f-11e9-9eca-a6773d7de79b.png "Exemplo - Refund")

**b)** Diretamente em sua conta no BoaCompra em "Transações". Ao cancelar o pedido o BoaCompra irá transmitir para a sua loja a requisição de cancelamento.

**https://billing-partner.boacompra.com/transactions.php**

---
#### 6 - Habilitar logs do módulo

Habilite a opção para que o módulo registre tudo o que é enviado e recebido entre a sua loja e o BoaCompra.

![](https://user-images.githubusercontent.com/22198227/61637067-3f9a4b80-ac6d-11e9-89f1-d58d9e1b61df.png "Configuração - Habilitar logs do módulo")

Para visualizar os registros de Logs clique no link Logs ou acesse "WooCommerce > Status do Sistema > Logs > selecione o log boacompra-payment-xxxxx.log" e clique em "Visualizar" para analisar detalhes do que foi enviado e recebido entre a sua loja e o BoaCompra.

![](https://user-images.githubusercontent.com/22198227/63348577-e25aee00-c32f-11e9-82a5-b06b8912a447.png "Configuração - Visualização dos Logs")

---
## CHANGELOG

**2.0.0**

- Refatoração completa da estrutura do plugin.
- Separação das opções de pagamento em gateways individuais.
- Inclusão de suporte a Assinaturas com Boleto Bancário.
- Inclusão de suporte Multicurrency e Multilanguage.
- Inclusão de suporte ao meio de pagamento PIX.

- Primeira versão do módulo BoaCompra;

**1.0.0**

- Primeira versão do módulo BoaCompra;
