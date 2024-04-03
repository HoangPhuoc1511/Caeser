const inputContainer = document.getElementById('input-container');
const plaintextInput = document.getElementById('plaintext');
const keyInput = document.getElementById('key');
const encryptButton = document.getElementById('encrypt');
const decryptButton = document.getElementById('decrypt');
const outputContainer = document.getElementById('output-container');
const ciphertextInput = document.getElementById('ciphertext');

const alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');

function generateKeyAlphabet(key) {
	const keyAlphabet = key.split('').filter(char => alphabet.includes(char));
	const nonKeyAlphabet = alphabet.filter(char => !keyAlphabet.includes(char));
	const shuffledKeyAlphabet = keyAlphabet.concat(nonKeyAlphabet);
	return shuffledKeyAlphabet.join('');
}

function encrypt(plaintext, key) {
	const keyAlphabet = generateKeyAlphabet(key);
	const encryptedText = plaintext.toUpperCase().split('').map(char => keyAlphabet[alphabet.indexOf(char)]).join('');
	return encryptedText;
}

function decrypt(ciphertext, key) {
	const keyAlphabet = generateKeyAlphabet(key);
	const decryptedText = ciphertext.toUpperCase().split('').map(char => alphabet[keyAlphabet.indexOf(char)]).join('');
	return decryptedText;
}

encryptButton.addEventListener('click', () => {
	const plaintext = plaintextInput.value;
	const key = keyInput.value;
	const ciphertext = encrypt(plaintext, key);
	ciphertextInput.value = ciphertext;
});

decryptButton.addEventListener('click', () => {
	const ciphertext = ciphertextInput.value;
	const key = keyInput.value;
	const plaintext = decrypt(ciphertext, key);
	ciphertextInput.value = plaintext;
});