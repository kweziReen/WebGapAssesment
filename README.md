 ### Instruction on running project:

    1. Clone project from github
    2. Rename .env.eaxample to .env
    3. Configure DB details on .env file:
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=webgap_db
        DB_USERNAME=root
        DB_PASSWORD=
    4. Configure the app url and app name (Optional):
        APP_NAME=WebGapAssessment
        APP_URL=https://WebGapAssessment.test

### Run these commands on termnial:

    composer install
    php artisan optimize:
    php artisan key:generate
    php artisan migrate
    php artisandb:seed
    npm install
    npm run dev
    php artisan serve (optional depending on which local server you are using)
