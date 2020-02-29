const drawImage = number => {
  let lacakSatu = 0;
  let lacakDua = number-1;
  for (let i = 0; i < number; i++) {
    str = '';
    for (let j = 0; j < number; j++) {
      ( ((j >= lacakSatu) && ( j <= lacakDua )) || ((j <= lacakSatu) && ( j >= lacakDua )) ) 
      ? str += ' @ ' 
      : str += ' = ';
    }
    lacakSatu++;
    lacakDua--;
    console.log(str);
  }
}

drawImage(8);