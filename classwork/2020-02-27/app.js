let username = prompt('Username:'),
    password = prompt('Password:');
console.log({username, password});
if (!username || !password) {
    document.write('Viso gero!');
} else {
    if (
        (username == 'admin' && password == 'master')
        ||
        (username && password == username + '11')
    ) {
        document.write(`Sveiki, ${username}`);
    } else  {
        document.write('Neteisingas slaptažodis');
    }
