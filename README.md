# Curso de PHP do Curso em Vídeo

Decidi aprender a linguagem <a href="https://www.php.net/docs.php">PHP</a> porque apesar do que muitos dizem sobre a "morte" da linguagem ainda existe muitos sites que utilizam PHP em sua estrutura, também decidi aprender em paralelo com o conhecimento de HTML5, CSS3 e Javascript, desta forma consolido ainda mais os meus conhecimentos web.Realizo este curso pelo canal do <a href=" https://youtube.com/playlist?list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&feature=shared">Curso em Vídeo</a>, no Youtube.

## Aprendizado
1. PHP funciona do lado do servidor pré-processando o código e enviando o resultado para o cliente;
2. Existem<a href="https://www.notion.so/php-ini-23c5b2ac62c88022880af5916f3b71d7?source=copy_link"> cinco formas de inserir PHP em um código HTML5</a>, contudo algumas demandam a <a href="https://www.notion.so/php-ini-23c5b2ac62c88022880af5916f3b71d7?source=copy_link">configuração do arquivo php.ini</a>;
3. A exibir data e hora locais
```
date_default_timezone_set("America/Sao_Paulo");
echo "Hoje é dia: " . date("d/M/Y");
echo "e a hora é: " . date("G:i:s");

// a formatação para horário local é preciso porque por padrão é utilizado fuso horário CET, sendo que o fuso horário do Brasil é GMT -03
// para ver essa informação faça: echo "e a hora é: " . date("G:i:s T"); a letra "T" irá mostrar o fuso horário usado
```
4. Aprendi que o operador de concatenação é ponto;
5. Para buscar informações do servidor utilizamos
```
echo phpinfo();
// ou
print phpinfo();
//  o comando print vem da linguagem C também usada na construção da linguagem, exibe dados na tela igualmente ao comando echo
```
6. A forma mais utilizada de inserção do PHP em HTML5 é a SUPER TAG **<?php?>**, essa não necessita de configuração do PHP.ini

## Curiosidades importantes

Para iniciar os estudos em PHP precisei tornar o meu computador um servidor, neste caso instalei o <a href = "https://www.apachefriends.org/pt_br/index.html">XAMPP</a>. Descobri que para usar o PHP preciso do: Apache, MySQL e, claro, do PHP, sendo que o último P do XAMPP é a linguagem Perl.
