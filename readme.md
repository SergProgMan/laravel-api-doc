## Instruction
- install Docker CE
- install docker-compose
- clone repository from GitHub: 
      git clone https://github.com/SergProgMan/laravel-api-doc
- go to cloned folder: 
      cd laravel-api-doc
- for first time use command: 
      docker-compose up --build -d 
- later you can use: 
      docker-compose up -d
- enter to php docker container: 
      docker exec -ti laravel-api-doc_php_1 bash
- for migration run: 
      php artisan migrate --force
- for seeding database run: 
      php artisan db:seed
- API docomentation is on: http ://localhost
