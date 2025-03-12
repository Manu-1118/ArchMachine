require('dotenv').config();
const conexionDB = require('./conexion');

const pool = conexionDB();

async function crearBaseDeDatos() {
    try {
        await pool.query(`
            CREATE TABLE IF NOT EXISTS users (
                id SERIAL PRIMARY KEY,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL
            )
        `);
        console.log("Base de datos creada con exito");
    } catch (error) {
        console.error("Error al crear la base de datos", error);
    }
}

async function insertarDatosUsuarios() {
    // insertar datos de prueba en la tabla "users"
    await pool.query(`
        INSERT INTO users (name, email, password)
        VALUES ('A', 'aDx6D@example.com', 'password123'),
               ('B', 'Mz3tM@example.com', 'password456'),
               ('C', '6Ct9o@example.com', 'password789')
    `);
    console.log("Datos insertados con exito");
    // ...
}

insertarDatosUsuarios();