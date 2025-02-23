# Learning Log

A simple application allowing you to log small code snippets and instructions that you can later refer to when needed.

Articles themselves can be tagged to enable easier filtering when looking for an example based on a specific technology or topic.

## Project setup
The project uses docker containers to manage it's application requests, application and database.
The application can be started by using `docker compose up -d` from within the repository root.

Once the application is running go to `/register` to create your self an account and once done you will be redirected to the dashboard which will be blank initially.

To simply try out the application you can run `php artisan db:seed --class=DemoSeeder` which will populate the application with tags and articles created using faker.
