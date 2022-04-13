<h1 align="center">Aplikasi Text Recognition (Client)</h1>

<p align="justify">Ini adalah aplikasi client sederhana dari implementasi project <a href="https://github.com/haxorsprogramming/ComputerVisionTextServer">Computer Vision Text Recognition Project</a>, dimana server tersebut dapat digunakan untuk mengola proses recognition pada file gambar, yang dapat membaca/analisa tulisan/font yang ada pada gambar. Dapat digunakan untuk berbagai keperluan, identifikasi KTP, SIM, Kartu Pengenal, Hasil Ujian, Dll. Aplikasi ini menggunakan object storage sebagai media penyimpanan, untuk itu harap persiapkan object storage (S3 compatible) untuk dapat menjalankan sistem ini.
</p>

<br/>
<strong>Fitur</strong>
<li>Capture foto melalui webcam</li>
<li>Upload foto</li>
<li>Hasil analisa yang ditampilkan berupa array</li>
<br/>

<strong>Instalasi</strong>

- Install terlebih dahulu server  <a href="https://github.com/haxorsprogramming/ComputerVisionTextServer">Computer Vision Text Recognition Project</a>, petunjuk instalasi sudah disediakan, namun jika anda tidak ingin menginstall server nya kami telah menyediakan endpoint khusus (harus dipesan & berbayar)
- Clone repository, edit file <code>config.php</code>. Masukkan beberapa settings yang diperlukan :
- SUBS_KEY = Didapatkan dari subscription key azure
- ENDPOINT = Endpoint instance dari azure computer vision project
- ENDPOINT_S3 = Endpoint S3 object storage
- ACCESS_KEY = Access key S3 object storage
- SECRET_KEY = Secret key S3 object storage
- ENDPOINT_SERVER = Endpoint server untuk Textrecoginition server (point pertama)
- Jika tidak memiliki akun azure & s3 object storage kami menyediakan akun & object storage tersebut (berbayar), silahkah hubungi kontak dibawah untuk informasinya. 


Jalankan aplikasi di browser

<strong>Screenshoot</strong>
<img src="https://s3.jagoanstorage.com/aditia-ss-storage-3561/TEXT_RECOGNITION_SERVER/1.png">

<img src="https://s3.jagoanstorage.com/aditia-ss-storage-3561/TEXT_RECOGNITION_SERVER/2.png">


Jika terdapat kendala dapat membuat issue di repo ini atau email ke alditha.forum@gmail.com, kami bersedia melakukan setup dengan biaya seikhlasnya ... 
