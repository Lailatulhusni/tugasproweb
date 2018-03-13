# Topic 4

Percobaan PHP Fundamental

## Preview

![prev](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/topic4/topic4/preview.png)

## Penjelasan
- Algoritma
 ```sh
  Algoritma LOGIN
  1. Langkah pertama mulai
  2. Isi username dan password
  3. Cek username dan password benar atau salah
  4. Jika benar, maka akan melanjutkan proses baca menu kemudian tampil user menu
  5. Jika salah, maka proses ini akan kembali ke proses 2, setiap proses login error session akan ditambah 1
  dan apabila proses masih salah akan diulang maksimal sebanyak 3x.
  Dan jika melebihi batas maksimal maka akun akan diblokir.
  6. Selesai.
 ```
- Pseudocode
 ```sh
  session_start()
  input user name dan password
  if ($username == $user && $password == $pass)
	$_SESSION['user'] = $username;
  else
  if isset($_SESSION[''block])
	$_SESSION['block']++;
  else
  	$_SESSION['block']=1;

  end.
  session_start();
  if $_SESSION["salah"] > 3;
  echo alert('Anda Diblokir') to.location ('error.php');
  }
 ```

- Flowchart

![flowchart](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/topic4/chart/flowchart.png)

## Tampilan Running Program

![tampilan_awal](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/topic4/shot/tampilan_awal.png)
Tampilan Awal Form Login </br>

![jika_benar](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/topic4/shot/jika_benar.png)
Tampilan yang muncul jika **username** dan **password** terisi dengan benar </br>

![jika_salah](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/topic4/shot/jika_salah.png)
Tampilan yang muncul jika **username** atau **password** yang diisikan salah </br>

![salah1](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/topic4/shot/salah1.png)
Peringatan jika salah sebanyak 1 kali dalam menginputkan **username** atau **password** </br>

![salah2](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/topic4/shot/salah2.png)
Peringatan jika salah sebanyak 2 kali dalam menginputkan **username** atau **password** </br>

![salah3](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/topic4/shot/salah3.png)
Peringatan jika salah sebanyak 3 kali dalam menginputkan **username** atau **password** </br>

![terblokir](https://raw.githubusercontent.com/fikriomar16/tugasproweb/master/topic4/shot/salah_lebihdari_3.png)
Muncul ucapan **Selamat** jika salah menginputkan **username** atau **password** lebih dari 3 kali </br>
