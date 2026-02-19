# WP-Student-CRUD
Project Title-The Student Management System. 
Team Members-Shek Rabia Prapti,Sharmin Akter
A brief description of our web development project-
The Student Management System is a PHP and MySQL-based web application that allows an admin to manage students and teachers using full CRUD operations. The system includes secure login functionality, session handling, and a responsive dashboard interface.

Table of Contents
Features 
Database Tables
Created Forms
Created Tables
Features
In this section, list and describe the features or functionality that you are working on. You can use checkboxes to track the progress of each feature.

 Feature 1 Authentication (Shek Rabia Prapti): Login.
 Feature 2 Student Management (Shek Rabia Prapti): Student Management like Add new students,View all students,Edit student details,Delete students.
 Feature 3 Dashboard (Shek Rabia Prapti): Dashboard (Displays total number of students,Displays total number of teachers)
 Feature 4
 Feature 5
 Feature 6

Feature 1
Link For Login-http://shell.hamk.fi/~bbcap25_2/StudentCRUD/StudentCRUD/login.php  (Shek Rabia Prapti)

Feature 2
[Manage Student-http://shell.hamk.fi/~bbcap25_2/StudentCRUD/StudentCRUD/students.php (Shek Rabia Prapti)
Add Student-http://shell.hamk.fi/~bbcap25_2/StudentCRUD/StudentCRUD/create.php (Shek Rabia Prapti)

Feature 3
Dashboard-http://shell.hamk.fi/~bbcap25_2/StudentCRUD/StudentCRUD/dashboard.php (Shek Rabia Prapti)

Feature 4

Feature 5


Feature 6


Database Tables
List the database tables that are part of your project.

Table 1 (Shek Rabia Prapti): User
Table 2 (Shek Rabia Prapti): Students
Table 3 (Created By): Table Name
Include the ER Diagram of the database.

Created Forms
List and describe any forms that have been created as part of your project. Include details about the purpose of each form and any validation logic.

Form 1 (Shek Rabia Prapti):Form Name- Create.php: Link to the related code file (github)- https://github.com/Rabia-bng/WP-Student-CRUD/blob/main/StudentCRUD/create.php | Link  (shell.hamk.fi)- http://shell.hamk.fi/~bbcap25_2/StudentCRUD/StudentCRUD/create.php. | Validations Applied-Required field validation (HTML required),Email format validation (type="email"),Basic server-side validation using PHP (isset($_POST))

Form 2: (Shek Rabia Prapti): Form name-dashboard.php: Link to the related code file (github)- https://github.com/Rabia-bng/WP-Student-CRUD/blob/main/StudentCRUD/dashboard.php| Link to the form (shell.hamk.fi)- http://shell.hamk.fi/~bbcap25_2/StudentCRUD/StudentCRUD/dashboard.php | Validations Applied-session validation

Form 3: (Shek Rabia Prapti): dpconnect.php: Link to the related code file (github)-https://github.com/Rabia-bng/WP-Student-CRUD/blob/main/StudentCRUD/dbconnect.php | Link to the form (shell.hamk.fi)-it works for entire database connection | Validations Applied-Connection validation (error handling)

Form 4: (Shek Rabia Prapti): delete.php: Link to the related code file (github)-https://github.com/Rabia-bng/WP-Student-CRUD/blob/main/StudentCRUD/delete.php| Link to the form (shell.hamk.fi)-It delets the inserted data| Validations Applied-delete.php validates that a valid record ID is provided before deleting the record.Connection validation (error handling)

Form 5 (Shek Rabia Prapti):Form Name- edit.php: Link to the related code file (github)- https://github.com/Rabia-bng/WP-Student-CRUD/blob/main/StudentCRUD/edit.php  | Validations Applied-edit.php implements the Update feature of CRUD and applies ID validation, required field validation, email format validation, and basic server-side validation.

Form 6 (Shek Rabia Prapti):Form Name-login.php: Link to the form (shell.hamk.fi)-http://shell.hamk.fi/~bbcap25_2/StudentCRUD/StudentCRUD/login.php | Validations Applied-login.php applies required field validation, server-side validation using PHP, credential verification against the database, and session-based authentication.

Form 7: (Shek Rabia Prapti): navbar.php: Link to the related code file (github)-https://github.com/Rabia-bng/WP-Student-CRUD/blob/main/StudentCRUD/navbar.php | 

Form 8: (Shek Rabia Prapti): students.php: Link to the related code file (github)-https://github.com/Rabia-bng/WP-Student-CRUD/blob/main/StudentCRUD/students.php| Validations Applied-It has session validation, not form validation.
List any tables that you have created in the project work

Table 1 (Shek Rabia Prapti): Table Name-User | Link to the related code file (github)-https://github.com/Rabia-bng/WP-Student-CRUD/blob/main/StudentCRUD/login.php | Link to the table (shell.hamk.fi)-http://shell.hamk.fi/~bbcap25_2/StudentCRUD/StudentCRUD/login.php.

Table 2 (Shek Rabia Prapti): Table Name-Students | Link to the related code file (github)-https://github.com/Rabia-bng/WP-Student-CRUD/blob/main/StudentCRUD/create.php | Link to the table (shell.hamk.fi)-http://shell.hamk.fi/~bbcap25_2/StudentCRUD/StudentCRUD/create.php.

Table 3 (Created By): Table Name | Link to the related code file (github) | Link to the table (shell.hamk.fi).                    

Username: admin
Password: admin123
