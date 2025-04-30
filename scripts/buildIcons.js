import fs from 'fs';
import path from 'path';

/**
 * Copies a file from source to destination.
 * @param {string} source - The path of the source file.
 * @param {string} destination - The path of the destination file.
 */
function copyFile(source, destination) {
    try {
        fs.copyFileSync(source, destination);
        console.log(`File copied successfully from ${source} to ${destination}`);
    } catch (err) {
        console.error(`Error copying file: ${err}`);
    }
}

/**
 * Copies multiple files from a source directory to a destination directory.
 * @param {string} sourceDir - The path of the source directory.
 * @param {string} destinationDir - The path of the destination directory.
 */
function copyFilesFromDirectory(sourceDir, destinationDir) {
    try {
        // Ensure the destination directory exists
        if (!fs.existsSync(destinationDir)) {
            fs.mkdirSync(destinationDir, {recursive: true});
        }

        const files = fs.readdirSync(sourceDir);

        files.forEach(file => {
            const sourcePath = path.join(sourceDir, file);
            const destinationPath = path.join(destinationDir, file);
            copyFile(sourcePath, destinationPath);
        });
    } catch (err) {
        console.error(`Error copying files from directory: ${err}`);
    }
}

// Example usage:
const sourceFile = 'node_modules/@fortawesome/fontawesome-free/css/all.css';
const destinationFile = 'dist/css/all.css';
copyFile(sourceFile, destinationFile);

const sourceDirectory = 'node_modules/@fortawesome/fontawesome-free/webfonts';
const destinationDirectory = 'dist/webfonts';
copyFilesFromDirectory(sourceDirectory, destinationDirectory);
