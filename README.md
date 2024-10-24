# Chatroom2

**Chatroom2** is a simple web-based chatroom project. It consists of several folders that manage different aspects of the application, such as the frontend (CSS, HTML, Images), logic (JavaScript), and backend (PHP).

## Folder Structure

public/
|-- css/
    ...
|-- html/
    ...
|-- images/
    ...
|-- javascript/
    ...
|-- php/
    ...

### 1. `css/`

This folder contains the CSS files responsible for styling the user interface. These files define the layout, colors, fonts, and overall design of the chatroom, utilizing Bootstrap for responsive design.

- **style.css** – The main CSS file that styles the chat interface.

### 2. `html/`

This folder contains the HTML files that define the structure of the user interface. Each page of the chatroom is represented as an HTML file here.

- **index.html** – The homepage of the chatroom where users can log in.

### 3. `images/`

This folder contains images, icons, and graphics used in the user interface.

### 4. `javascript/`

This folder contains the JavaScript files that handle the dynamic functionality of the chatroom, including sending messages, user interactions, and WebSocket support for real-time communication.

### 5. `php/`

This folder contains the PHP files that manage the backend of the chatroom using Symfony. This includes handling messages, user authentication, and database interactions.

## Technologies

- **Symfony** – For building the backend and managing application logic.
- **Bootstrap** – For responsive and modern UI design.
- **HTML5** – Used for structuring the web pages.
- **CSS3** – Used for styling the user interface.
- **JavaScript** – Handles dynamic interactions and real-time updates.
- **PHP** – For server-side processing and database communication.
- **MySQL** – For storing chat messages and user data.

## Features

- Real-time communication between users.
- User login and registration.
- Modern, responsive design powered by Bootstrap.
- Messages are stored persistently in a MySQL database.
