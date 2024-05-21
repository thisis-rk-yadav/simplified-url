// server.js
const { exec } = require('child_process');

module.exports = (req, res) => {
    const command = 'php index.php';
    exec(command, (error, stdout, stderr) => {
        if (error) {
            console.error(error);
            res.status(500).send('Internal Server Error');
            return;
        }
        res.send(stdout);
    });
};
