require('dotenv').config({ path: '../../.env' });

const { Pool } = require('pg');

function conexionDB() {
    const pool = new Pool({
        connectionString: process.env.DATABASE_URL, // <-- Cadena de conexión [No se como llamarla desde conexion.js si env esta fuera de la carpeta]
        ssl : {
            rejectUnauthorized : false
        }
    });

    pool.connect()
        .then(client => {
            console.log("Conexion exitosa a la base de datos");
            client.release();
        })
        .catch(err => {
            console.error("Error en la conexion a la base de datos", err);
        });

    return pool;
}

module.exports = conexionDB;

