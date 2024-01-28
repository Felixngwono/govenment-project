const express = require('express');
const multer = require('multer');
const path = require('path');

const app = express();

// Set up storage for profile photos using Multer
const storage = multer.diskStorage({
  destination: './public/uploads/',
  filename: function (req, file, cb) {
    cb(null, Date.now() + path.extname(file.originalname));
  }
});

const upload = multer({ storage });

// Serve static files from the 'public' directory
app.use(express.static('public'));

// Set up your registration page route
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/public/registration.html');
});

// Handle profile photo upload
app.post('/upload', upload.single('profilePhoto'), (req, res) => {
  if (req.file) {
    console.log('Profile photo uploaded:', req.file.filename);
    res.send('Profile photo uploaded successfully.');
  } else {
    res.status(400).send('Profile photo upload failed.');
  }
});

// Start the server
const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
