# PFF_2
epitech travail de fin d'études 2


Après avoir pull :

Docker:
      
     sudo docker-compose up

Si le docker fait chier :

    sudo docker-compose down -v

relancer docker après ca

Laravel :
        
    composer update
    npm install
    php artisan migrate:fresh
    php artisan db:seed 
        ( cela crée l'user admin@admin.com / 12345678 => admin
                           test@test.com / 12345678 => non admin
                           & Categories + 1 Produit Test)
    php artisan serve   
        ( pour lancer le serveur de l'api )

Email verif :

        mailtrap.io

nuxt:

        localhost:3000

mariadb:

        port:4000

adminer:

        localhost:8080
        user : root
        pass : camping
        db: camping


