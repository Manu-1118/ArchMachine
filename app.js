const express = require("express");
const conexionDB = require('./src/js/conexion');
const app = express();

const path = require('path');
app.use(express.static(path.join(__dirname, 'build')));

app.get("/", (req, res) => {
    res.sendFile(__dirname + "/template/index.html");
});

app.listen(3000, () => {
    console.log("Server is running on http://localhost:3000");
});
