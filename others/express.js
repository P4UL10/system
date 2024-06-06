// Step 1: Set up a basic Express.js server
const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');
const path = require('path');

const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static(path.join(__dirname, 'public')));
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

// Step 2: Create a form for administrators to input the announcement content
app.get('/', (req, res) => {
    res.render('announcementForm');
});

app.post('/update', (req, res) => {
    const { title, message } = req.body;
    // Update the announcement content (You can store it in a database or file)
    // For simplicity, we'll just log it to the console
    console.log('New Announcement:');
    console.log('Title:', title);
    console.log('Message:', message);
    // Redirect back to the form page
    res.redirect('/');
});

app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
