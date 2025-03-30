// Import modul moment
const moment = require('moment');

// Menampilkan waktu saat ini dalam format default
console.log("Waktu saat ini:", moment().format());

// Memformat tanggal dalam format yang lebih spesifik
console.log("Tanggal sekarang (YYYY-MM-DD):", moment().format('YYYY-MM-DD'));

// Menampilkan hari dalam seminggu
console.log("Hari dalam seminggu:", moment().format('dddd'));

// Menambahkan 7 hari dari tanggal saat ini
const nextWeek = moment().add(7, 'days');
console.log("7 hari dari sekarang:", nextWeek.format('YYYY-MM-DD'));

// Mengurangi 1 bulan dari tanggal saat ini
const lastMonth = moment().subtract(1, 'months');
console.log("1 bulan yang lalu:", lastMonth.format('YYYY-MM-DD'));

// Menghitung selisih hari dari tanggal tertentu
const birthdate = moment("2000-01-01", "YYYY-MM-DD");
const daysSinceBirth = moment().diff(birthdate, 'days');
console.log("Jumlah hari sejak 1 Januari 2000:", daysSinceBirth);