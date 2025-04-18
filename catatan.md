html( Hypertext markup langauge)

didalam folder pertemuan 1 buat folder nginx dan buat juga file .env didalam file .env dimasukin COMPOSE_PROJECT_NAME=xlliv_04
REPOSITORY_NAME=pemweb
IMAGE_TAG=latest
dan buat juga docker-compose.yml
didalam ada version 3
image tag untuk menandai versi dari docker kita 
port bisa diubah misal di listen yang berada di file nginx.conf berubah pasti yang di docker-compose.yml
dan ada juga volume untuk tempat file nya
terus buat file nginx.conf
di file nginx.conf ada location itu untuk tau tempat index.html
terus di dalam folder pertemuan 1 buat lagi folder src
yang berisi index.html
terus di docker-compose.yml tambahin   - ./src:/usr/share/nginx/html
utuk lokasi index.htmlnya
setelah itu kita coba jalanin di ubuntu pakai docker-compose up -d untuk melihat ke sambung ke docker atau tidak
terus kita ke file index.html 
dan kita masukin codingan DOCTYPE html
di file nginx.conf
yang awal isi di location di pindahin keatas 
dan masukin ini try_files $uri $uri/ =404; di location yang sudah dipindahin
