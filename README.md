# Supermarket Website

## Overview
Welcome to the Supermarket Website! This platform provides a seamless online shopping experience for customers, allowing them to browse products, add items to their cart, and complete purchases easily. The website is built using a combination of SQL, PHP, HTML, JavaScript, and CSS, ensuring both functionality and security.

## Features
- **User-Friendly Interface**: Designed with an intuitive UI for easy navigation and a pleasant shopping experience.
- **Secure Database**: Robust database system to manage user accounts and store information securely.
- **Role-Based Access Control**: Specific privileges granted to different user types to ensure secure and efficient management.
- **Product Browsing**: Easily browse through a wide range of products.
- **Shopping Cart**: Add items to the cart and review before making a purchase.
- **Purchase Completion**: Smooth and secure process for completing purchases.

## Technologies Used
- **Backend**: SQL, PHP
- **Frontend**: HTML, CSS, JavaScript

## Installation
1. **Clone the Repository**: 
   ```bash
   git clone https://github.com/yourusername/supermarket-website.git
2. **Database Setup**:
   - Import the provided SQL file to set up the database schema.
   - Configure the database connection settings in the `config.php` file.
3. **Server Configuration**:
   - Ensure your server supports PHP and has a MySQL database installed.
   - Upload the website files to your server's root directory.
4. **Dependencies**: 
   - Ensure all dependencies are installed. This typically includes enabling certain PHP extensions like PDO for database connections.

## Usage
1. **Access the Website**: Navigate to the website's URL in your web browser.
2. **User Registration/Login**:
   - Register a new account or log in with existing credentials.
3. **Browse Products**: 
   - Explore various categories and products available on the platform.
4. **Add to Cart**: 
   - Add desired items to your shopping cart.
5. **Checkout**: 
   - Proceed to checkout, enter shipping details, and complete the purchase.

## Role-Based Access Control
- **Customers**: Can browse products, add to cart, and make purchases.
- **Admins**: Have additional privileges such as managing products, viewing all orders, and managing user accounts.

## Security Features
- **Encrypted Passwords**: User passwords are stored securely using encryption.
- **Input Validation**: All user inputs are validated and sanitized to prevent SQL injection and other security threats.
- **Access Control**: Role-based access ensures that users only have access to functionalities they are authorized to use.

## Troubleshooting
- **Database Connection Issues**: Ensure your database credentials in `config.php` are correct.
- **Server Errors**: Check server logs for detailed error messages.
- **Frontend Issues**: Ensure all necessary assets (CSS, JS files) are correctly linked in the HTML files.

We hope you enjoy using the Supermarket Website and have a great shopping experience!
