# arCMAThemePlugin

Tema baseado em:
[sbreker](https://github.com/sbreker/arDemoThemePlugin) e [ricardodepinho](https://github.com/atom-pt/arMoaThemePlugin)

## Depois de qulquer alteração é necessário:
  - make
  - php /usr/share/nginx/atom/symfony cc
  - systemctl restart php7.0-fpm
  - systemctl restart nginx

### Caroussel
Para adicionar um [carousel](https://www.w3schools.com/bootstrap/bootstrap_carousel.asp):
  - Renomear arCMAThemePlugin/templates/layout_2colRename.php para layout_2col.php
  - Copiar as imagens para a pasta arCMAThemePlugin/images
  - Alterar as linhas 64, 68 e 72 com os nomes das imagens correspondentes

### Footer
Para adicionar o footer:
  - Renomear arCMAThemePlugin/templates/_footerRename.php para _footer.php
  - Editar css/main.less e descomentar as linhas do Footer Block
