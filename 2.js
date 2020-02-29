const hitungArray = (arr) => {
  let min = 0;
  let max = 0;
  for (let i = 0; i < arr.length; i++) {
    let jumlah = 0;
    for (let j = 0; j < arr.length; j++) {
      (arr[i] !== arr[j]) ? jumlah += arr[j] : null;
    }
    if (i == 0) {
      min = jumlah;
      max = jumlah;
    } else {
      (min < jumlah) ? min = min : min = jumlah;
      (max > jumlah) ? max = max : max = jumlah;
    }
    console.log(`Jumlah index ${i} = ${jumlah}`);
  }
  console.log(`Maka angka terkecil dan terbesar adalah ${min} dan ${max}`);
}

let input = [3, 4, 5, 6, 7, 8];
hitungArray(input);