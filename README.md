# Databank of Universities

Databank of Universities adalah sebuah aplikasi berbasis web API yang memberikan akses kepada siapa pun untuk mengakses data universitas di seluruh Indonesia. Aplikasi ini dirancang untuk membantu para pengembang dan pihak tertentu yang ingin mengintegrasikan informasi universitas ke dalam proyek mereka.

## Deskripsi
Databank of Universities menyediakan data lengkap tentang berbagai universitas di Indonesia. Dengan menggunakan API ini, pengguna dapat mengakses informasi seperti nama universitas, lokasi, akreditasi, dan informasi relevan lainnya. Aplikasi ini diharapkan dapat menjadi sumber daya yang bermanfaat bagi pengembang yang ingin mengembangkan sistem atau proyek dengan mengintegrasikan data universitas.

## Fitur Utama
- **Nama Aplikasi:** Databank of Universities
- **Basis Aplikasi:** Web API
- **Aksesibilitas:** Dapat diakses oleh siapa pun
- **Bahasa:** PHP
- **Framework:** Laravel v10.x.x
- **Apilkasi 3rd Party:** Postman

## API List
| No | Nama API                  | HTTP Method   | Endpoint        |
|----|---------------------------|---------------|-----------------|
| 1  | Get All Universities       | GET           | /api/university | 
| 2  | Get Detail Universities    | GET           | /api/university/{universityslug} |
| 3  | Search Universities       | POST          | /api/university/search |
| 4  | Add New Universities      | POST          | /api/university/add |

## Kontribusi
Bagi Anda yang ingin berkontribusi pada pengembangan aplikasi ini, silakan ikuti langkah-langkah di bawah ini:
1. **Clone Repositori:**
   Lakukan cloning dari repositori ini.
   ```
   git clone https://github.com/fazallsaid/UniversitiesAPI.git
   ```

2. **Install Dependencies / Vendor**
   Instal dependencies / vendor dari laravel dengan perintah berikut:
   ```
   composer install
   ```

3. **Generate Key**
   Buat key Anda sendiri dengan perintah berikut:
   ```
   php artisan key:generate
   ```

4. **Migrasi Database**
   Lakukan migrasi database dengan perintah berikut ini:
   ```
   php artisan migrate
   ```
   Jika ada pertanyaan apakah akan membuat database nya sekalian, pilih yes.

<!-- 5. **Join Discord Server:** Bergabunglah dengan [Discord Server](https://discord.gg/YfEKyXbjFU) kami untuk mendapatkan pembaruan terbaru, berdiskusi, dan berkoordinasi dengan tim pengembangan. -->

5. **Kontribusi:** Setelah mengikuti langkah-langkah di atas, Anda dapat mulai berkontribusi dengan membuat perubahan, menambahkan fitur baru, atau melaporkan masalah yang ditemukan. Harap ikuti panduan kontribusi yang telah ditentukan di repositori.

## Tujuan
Databank of Universities bertujuan untuk memberikan dukungan kepada para pengembang dan pihak-pihak tertentu yang memerlukan akses mudah dan cepat ke data universitas di Indonesia. Dengan kontribusi dari komunitas, kami berharap aplikasi ini dapat terus berkembang dan memberikan manfaat yang lebih besar bagi masyarakat pengguna.

Terima kasih atas kontribusi dan dukungan Anda!
