# 📝 Todo-List-Application - Keep Your Tasks Organized Effortlessly

[![Download Todo-List-Application](https://img.shields.io/badge/Download%20Now-Click%20Here-brightgreen)](https://github.com/raktas06/Todo-List-Application/releases)

## 🚀 Getting Started

This guide helps you download and run the Todo-List-Application on your device. Follow each step to ensure a smooth setup.

### 📋 Prerequisites

Before you start, make sure your device meets the following requirements:

- **Operating System**: Windows 10 or later, macOS Catalina or later, or a modern Linux distribution.
- **Web Server**: You need a local server like XAMPP or WAMP.
- **PHP**: Version 7.3 or higher.
- **MySQL**: Installed on your system, along with basic knowledge of database management.
- **Browser**: Google Chrome, Mozilla Firefox, or any modern web browser.

## 🔗 Download & Install

1. **Visit the Releases Page**: Go to the [Releases page](https://github.com/raktas06/Todo-List-Application/releases).

2. **Select the Latest Release**: Look for the latest version of the Todo-List-Application. You will see a list of available downloads.

3. **Download the Files**: Download the source code as a ZIP file. You can find this by clicking on the “Source code” link. 

4. **Unzip the Files**: Once the download completes, locate the ZIP file on your computer. Right-click and select “Extract All” to unzip it to your desired location.

5. **Set Up the Local Server**:
   - **XAMPP**: Open XAMPP Control Panel. Start the Apache and MySQL modules.
   - **WAMP**: Launch WAMP and ensure the server icon is green, indicating it's running.

6. **Create a Database**:
   - Open your browser and head to `http://localhost/phpmyadmin`.
   - Click on "Databases" and create a new database named `todo_list`.

7. **Import the Database**:
   - In phpMyAdmin, click on the newly created database.
   - Select "Import" from the top menu and choose the SQL file provided in the extracted folder (usually named `todo_list.sql`).

8. **Configure the Application**:
   - Open the extracted folder and locate the `.env` file. If it's not there, rename `.env.example` to `.env`.
   - Update the database credentials to match those of your newly created database (default settings should be fine for local use).

9. **Run the Application**:
   - Open your browser and go to `http://localhost/todo-list-application/public`. You should now see the Todo-List-Application running in your browser.

## 🎨 Features

- **User-Friendly Interface**: Intuitive design that simplifies task management.
- **Real-Time Updates**: Thanks to AJAX and jQuery, you can add, edit, and delete tasks without refreshing the page.
- **Responsive Design**: Works well on both desktop and mobile devices.
- **Task Filtering**: Easily sort and filter tasks based on status.

## 🔍 Troubleshooting

If you encounter issues while setting up the application, consider the following:

- **Cannot Connect to Database**: Double-check your database settings in the `.env` file.
- **White Screen**: Ensure that the Apache and MySQL servers are running in your local server environment.
- **Errors in Browser Console**: Open the console in your web browser (right-click and select "Inspect", then choose the "Console" tab) to view error messages.

## 💬 Community Support

If you need help or want to share your experience, feel free to open an issue on the [GitHub page](https://github.com/raktas06/Todo-List-Application/issues). 

## 🔗 Important Links

- [Download Todo-List-Application](https://github.com/raktas06/Todo-List-Application/releases)  
- [GitHub Repository](https://github.com/raktas06/Todo-List-Application)

## 🛠️ Technologies Used

- **Laravel**: PHP framework for building web applications.
- **MySQL**: Relational database management system for storing tasks.
- **AJAX**: To enable real-time updates without page reloads.
- **jQuery**: To simplify client-side scripting.

Now you are ready to use the Todo-List-Application. Follow the steps above, and enjoy better task management!