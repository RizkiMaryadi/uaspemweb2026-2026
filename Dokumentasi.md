# UTS PEMWEB
### Oleh
## 20230803141 - Rizki maryadi
---
# PROSES SLR
```bash
Rumpun Ilmu : software Engineering
Deskripsi : Bikin Aplikasi Web
P (Platform) : Web Aplikasi berbasis design
I (Invervention) : Teknologi laravel filament dimana ada macam macam design, admin dan user 
C (Comparison) = Masih menggunakan manual
O (Outcome) = Aplikasi web berbasis design
S (Suspect) = Aplikasi mempermudah dalam perencanaaan sidang sempro dan skripsi

Berikan saya riset question (rq) terkait ide penelitian diatas!

Respon
Berdasarkan deskripsi penelitian yang Anda berikan dalam format PICO(S), berikut adalah beberapa **Research Question (RQ)** yang dapat dikembangkan untuk penelitian di bidang Software Engineering dengan topik pengembangan aplikasi web berbasis Laravel Filament untuk perencanaan sidang proposal dan skripsi.

Penelitian ini pada intinya adalah mengembangkan sebuah **solusi teknologi** (aplikasi web) untuk menggantikan proses manual, sehingga Research Question-nya berfokus pada evaluasi terhadap solusi yang dibangun.

---

### **Research Question (RQ) Utama:**

**RQ: Sejauh mana aplikasi web berbasis Laravel Filament yang dikembangkan dapat meningkatkan efisiensi dan efektivitas proses perencanaan sidang proposal dan skripsi dibandingkan dengan proses manual?**

Pertanyaan utama ini masih terlalu luas, sehingga perlu dipecah menjadi pertanyaan-pertanyaan yang lebih spesifik dan terukur.

---

### **Breakdown Research Question (Sub-RQ) Berdasarkan Aspek Penilaian:**

#### **Kategori 1: RQ tentang Kualitas Fungsional dan Kinerja Sistem (Functional & Performance)**
Aspek ini mengevaluasi apakah sistem yang dibangun sudah berjalan dengan benar dan memenuhi kebutuhan fungsional.

*   **RQ 1.1:** Bagaimana tingkat kelayakan (feasibility) aplikasi web berbasis Laravel Filament dalam menangani alur kerja perencanaan sidang (seperti pengajuan judul, penentuan jadwal, dan pengumuman) untuk peran Admin dan User?
*   **RQ 1.2:** Seberapa akurat dan konsisten data yang dihasilkan oleh sistem (seperti penjadwalan otomatis, notifikasi, dan laporan) dibandingkan dengan proses manual?
*   **RQ 1.3:** Bagaimana performa aplikasi dalam menangani beban kerja (load) yang simultan, misalnya ketika banyak mahasiswa mengakses dan mengajukan judul secara bersamaan?

#### **Kategori 2: RQ tentang Kualitas Pengalaman Pengguna (User Experience - UX)**
Aspek ini mengevaluasi kemudahan penggunaan, kepuasan, dan persepsi pengguna (Admin dan Mahasiswa) terhadap aplikasi.

*   **RQ 2.1:** Bagaimana tingkat Usability (kemudahan penggunaan) aplikasi web ini berdasarkan penilaian dari pengguna akhir (Admin dan Mahasiswa) yang diukur menggunakan metode seperti System Usability Scale (SUS)?
*   **RQ 2.2:** Sejauh mana aplikasi ini dapat mengurangi waktu dan usaha (effort) yang dibutuhkan oleh Admin dalam mengelola proses perencanaan sidang dibandingkan dengan cara manual?
*   **RQ 2.3:** Sejauh mana aplikasi ini meningkatkan kemudahan bagi mahasiswa (User) dalam memantau progres dan jadwal sidang mereka dibandingkan dengan proses manual?

#### **Kategori 3: RQ tentang Perbandingan Efektivitas (Comparison & Effectiveness)**
Aspek ini secara langsung membandingkan solusi baru dengan proses lama untuk membuktikan klaim "mempermudah".

*   **RQ 3.1:** Berapa persentase pengurangan waktu rata-rata yang dibutuhkan untuk menyusun jadwal sidang satu periode akademik setelah menggunakan aplikasi ini dibandingkan dengan cara manual?
*   **RQ 3.2:** Seberapa besar penurunan tingkat kesalahan (error rate) dalam penjadwalan dan penginputan data setelah menerapkan sistem terkomputerisasi ini?
*   **RQ 3.3:** Bagaimana perbandingan tingkat kepuasan komunikasi antara admin, dosen, dan mahasiswa mengenai informasi sidang antara menggunakan aplikasi dan cara manual (seperti grup WhatsApp atau email manual)?

#### **Kategori 4: RQ tentang Kualitas Implementasi Teknologi (Technical Implementation)**
Aspek ini lebih dalam meninjau dari sudut pandang rekayasa perangkat lunak, khususnya dalam penggunaan Laravel Filament.

*   **RQ 4.1:** Bagaimana pengalaman pengembangan (developer experience) dalam menggunakan framework Laravel Filament untuk membangun aplikasi manajemen akademik dengan dua peran (Admin dan User) yang berbeda?
*   **RQ 4.2:** Seberapa mudah aplikasi yang dibangun dengan Laravel Filament ini untuk dipelihara (maintainability) dan dikembangkan lebih lanjut (scalability) di masa depan?

---

### **Saran Metode Pengumpulan Data untuk Menjawab RQ:**

*   **Pengujian Fungsional (Blackbox Testing):** Untuk menjawab RQ 1.1 dan RQ 1.2.
*   **Load Testing:** Untuk menjawab RQ 1.3 (dapat menggunakan tools seperti Apache JMeter).
*   **Kuesioner (Questionnaire):** Menggunakan skala seperti **System Usability Scale (SUS)** untuk menjawab RQ 2.1 dan RQ 3.3.
*   **Wawancara (Interview):** Wawancara mendalam dengan Admin dan perwakilan User untuk mendapatkan data kualitatif guna melengkapi RQ 2.2 dan RQ 2.3.
*   **Observasi dan Pengukuran Metrik:** Membandingkan data kuantiitatif (waktu penyelesaian tugas, jumlah kesalahan) sebelum dan sesudah implementasi untuk menjawab RQ 3.1 dan RQ 3.2.
*   **Studi Kasus Pengembangan (Development Case Study):** Dokumentasi dari pengalaman developer sendiri selama proses pengembangan untuk menjawab RQ 4.1 dan RQ 4.2.

Dengan memiliki Research Question yang jelas dan terukur seperti di atas, penelitian Anda akan memiliki arah yang fokus dan hasil yang dapat dipertanggungjawabkan secara ilmiah. Selamat meneliti!
```

# PROSES RQ
```bash
RQ : tentang fungsionalitas dan kualitas sistem (Evaluatif) RQ 1.1: Bagaimana tingkat kelayakan (feasibility) aplikasi web berbasis Laravel Filament dalam menangani alur kerja perencanaan sidang (seperti pengajuan judul, penentuan jadwal, dan pengumuman) untuk peran Admin dan User?



dari sini perkirakan JUDUL YANG BAIK DAN MENARIK NYA APA

Respon
Tentu! Berdasarkan RQ 1.1 yang berfokus pada evaluasi kelayakan dan fungsionalitas, berikut beberapa pilihan judul yang baik dan menarik, dikelompokkan berdasarkan nuansanya.

### Kategori Judul Langsung dan Informatif
Judul-judul ini jelas, langsung ke inti, dan sangat cocok untuk laporan akademik atau publikasi yang formal.

1.  **Evaluasi Kelayakan Aplikasi Web Berbasis Laravel Filament untuk Manajemen Perencanaan Sidang Akademik**
    *   **Alasan:** Sangat langsung mencerminkan RQ 1.1. Kata kunci "Evaluasi Kelayakan" tepat sasaran.

2.  **Analisis Fungsionalitas Sistem Manajemen Sidang Skripsi Berbasis Framework Laravel Filament**
    *   **Alasan:** Menekankan pada "Analisis Fungsionalitas" yang merupakan inti dari pertanyaan penelitian Anda.

3.  **Pengembangan dan Evaluasi Aplikasi Web Manajemen Jadwal Sidang Menggunakan Laravel Filament**
    *   **Alasan:** Menunjukkan dua aktivitas utama: membangun sistem (pengembangan) dan mengujinya (evaluasi).

### Kategori Judul yang Lebih "Menarik" dan Modern
Judul-judul ini menggunakan diksi yang lebih dinamis dan berfokus pada value atau solusi, sehingga lebih menarik perhatian.

4.  **Streamlining Academic Defense: A Feasibility Study of a Laravel Filament-Based Thesis Management System**
    *   **Alasan:** Menggunakan kata "Streamlining" (merampingkan) yang powerful dan bernuansa bisnis. Mengganti "sidang" dengan "Academic Defense" juga terkesan lebih profesional.

5.  **Rancang Bangun dan Uji Kelayakan Sistem Informasi Sidang Skripsi: Studi Kasus Penggunaan Laravel Filament sebagai Admin Panel**
    *   **Alasan:** Kombinasi klasik "Rancang Bangun" dengan penekanan pada teknologi spesifik "Laravel Filament sebagai Admin Panel" yang menjadi nilai unik penelitian.

6.  **Implementasi Laravel Filament untuk Digitalisasi Proses Perencanaan Sidang Proposal dan Skripsi**
    *   **Alasan:** Kata "Digitalisasi" sangat kuat dan relevan dengan konteks menggantikan proses manual. Judul ini menunjukkan sebuah transformasi.

7.  **ThesisFlow: Sebuah Aplikasi Manajemen Sidang Berbasis Web dan Analisis Kelayakannya menggunakan Laravel Filament**
    *   **Alasan:** Memberikan "nama brand" (*ThesisFlow*) pada aplikasi Anda, yang membuatnya terasa seperti produk nyata, bukan hanya proyek akademis. Sangat menarik dan mudah diingat.

---

### Rekomendasi Terbaik:

Dari semua opsi di atas, saya merekomendasikan dua judul ini:

**1. Untuk Formalitas dan Kejelasan Akademik:**
> **Evaluasi Kelayakan Aplikasi Web Berbasis Laravel Filament untuk Manajemen Perencanaan Sidang Akademik**

**2. Untuk Daya Tarik dan Kekinian:**
> **ThesisFlow: Analisis Kelayakan Aplikasi Manajemen Sidang Berbasis Laravel Filament**

### Mengapa Keduanya Bagus?

*   **Spesifik:** Menyebutkan teknologi (Laravel Filament) dan domain masalah (Manajemen Sidang).
*   **Measurable:** Kata "Evaluasi" dan "Analisis Kelayakan" menunjukkan bahwa yang akan Anda lakukan adalah mengukur dan menilai.
*   **Relevan:** Langsung menjawab RQ 1.1 Anda tentang tingkat kelayakan.
*   **Menarik (Khusus opsi 2):** Nama "ThesisFlow" membuat judul tidak kaku dan mudah diingat.

Anda bisa memilih salah satu yang paling sesuai dengan selera dan kebutuhan institusi Anda. Selamat meneliti
```

```bash
terlampir file SLR dengan nama SLR.pdf
```

# BRD
```
terlampir file BRD berdasarkan SLR dengan nama file BRD.pdf
```

# IMPLEMENTASI WEBSITE
```
1. cd /root/boilerplate
2. ./start.sh uts-pemweb
3. cd /root/perkuliahan/uts-pemweb
4. cd src
5. code .
6. template website dengan ide saya diambil dari pastekan link nya
6. cd resource/views
8. mkdir layouts && mkdir pages && mkdir partials
9. cd ../../routes/
