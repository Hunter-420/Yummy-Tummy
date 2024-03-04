# Yummy Tummy Laravel Learning

## Description

Yummy Tummy Laravel Learning is a project aimed at helping developers learn Laravel, a popular PHP framework, by building a simple food recipe application. This README file provides an overview of the project, its features, installation instructions, and usage guidelines.

## Features

- User authentication and authorization
- CRUD operations for managing recipes
- Search functionality to find recipes
- Categories and tags for organizing recipes
- Responsive design for mobile and desktop devices

## Installation

To install and run the Yummy Tummy Laravel Learning project on your local machine, follow these steps:

1. Clone the repository to your local machine:

   ```bash
   git clone https://github.com/your-username/yummy-tummy-laravel-learning.git
    ```
    
2. Navigate to the project directory:

    ```bash
        cd yummy-tummy-laravel-learning
        Install PHP dependencies using Composer:
    ```

3. Install PHP dependencies using Composer:

    ```bash
        composer install
        Copy the .env.example file to .env and update the database configuration:
    ```

4. Copy the .env.example file to .env and update the database configuration:

    ```bash
    cp .env.example .env
    ```
    Update the following fields in the .env file:

    DB_DATABASE <br>
    DB_USERNAME <br>
    DB_PASSWORD <br>

5. Generate the application key:

    ```bash
        php artisan key:generate
    ```
    
6. Run database migrations and seed the database:

    ```bash
        php artisan migrate --seed
    ```

7. Start the Laravel development server:
    
    ```bash
    php artisan serve
    ```

8. Access the application in your web browser at http://localhost:8000.

## Usage

1. Register for a new account or login with existing credentials.
2. Explore the recipes, search for specific recipes, and view details.
3. Create, edit, or delete your own recipes.
4. Organize recipes using categories and tags.

## Contributing

Contributions are welcome! To contribute to the Yummy Tummy Laravel Learning project, follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix: git checkout -b feature-name.
3. Commit your changes: git commit -am 'Add new feature'.
4. Push to the branch: git push origin feature-name.
5. Submit a pull request with a detailed description of your changes.

## License

This project is licensed under the [MIT License](LICENSE).

