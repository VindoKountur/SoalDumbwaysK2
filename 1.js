let kecepatanBagus = 7;
let jarakTempuhBagus = 7 * 3600;

let kecepatanIsmail = 10;
let jarakTempuhIsmail = 0;

let lacakWaktu = 0;
while (jarakTempuhIsmail !== jarakTempuhBagus) {
  lacakWaktu++;

  jarakTempuhBagus += kecepatanBagus;
  jarakTempuhIsmail += kecepatanIsmail;
}

let jam = Math.floor(lacakWaktu / 3600);
let menit = Math.floor(lacakWaktu % 3600 / 60);

// console.log(`Waktu (s) = ${lacakWaktu} detik`);
// console.log(`Waktu (s) = ${menit} menit`);
console.log(`Waktu (s) = ${jam} jam, ${menit} menit`);