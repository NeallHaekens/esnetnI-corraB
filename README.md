# esnetnI-corraB
Laravel
Als eerste download je de map “Barroc_Intenss”. Deze stop je op je C:/ schijf en dan in de mappen “xampp\htdocs\”. Vervolgens open je deze mappen in “opdrachtpromt” aka “cmd”. Daarna type je in “composer install”. In PHPStorm open je de map en kopieer je het .env bestand en plakt deze nog een keer.
-composer require spatie/laravel-cookie-consent
moet je ook nog uitvoeren.


SQL Database
Om de database over te nemen moet je eerst in PHPAdmin een database aanmaken deze noem je “barroc_intense” type je in de “opdrachtpromt” de volgende zin “php artisan migrate:fresh”. Vervolgens gelijk na de vorige tekst nadat hij klaar is met laden type je “php artisan dump-autoload” vervolgens type je “php artisan migrate:fresh --seed”. Daarna moet je nog een key laten genereren dat doe je door te typen “php artisan key:generate”. 
Als dat niet werkt moet je composer dumb:autoload doen en als dat niet werkt 
-php artisan db:seed --class=RoleTableSeeder
-php artisan db:seed --class=UsersTableSeeder
-php artisan db:seed --class=Supply_typeTableSeeder
-php artisan db:seed --class=SuppliesTableSeeder
-php artisan db:seed --class=Lease_typeTableSeeder
-php artisan db:seed --class=LeasesTableSeeder
-php artisan db:seed --class=Malfunction_typesTableSeeder
-php artisan db:seed --class=MalfunctionsTableSeeder
-php artisan db:seed --class=NotesTableSeeder


Website opstarten
Open XAMPP en zet “Apache” en “MySQL” aan. Vervolgens type je in opdrachtpromt “php artisan serve”. Daarna ga je naar de link in je search engine en type “localhost:8000”. Nu heb je het product overgenomen en opgestart.
