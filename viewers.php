<?php
class viewers
{

    public function cek($folderPath)
    {
        // Gunakan scandir() untuk mengambil daftar file dan direktori dalam folder
        $files = scandir($folderPath);
        return count($files) - 2;
    }

    public function setViewers($folderPath)
    {

        $filename = 'ip_pengunjung_' . preg_replace("/[^0-9]/", "", $_SERVER['REMOTE_ADDR']);

        // Jalur lengkap ke folder tujuan
        $folderPath = "./" . $folderPath . "/"; // Sesuaikan path sesuai dengan struktur direktori

        // Pastikan folder tujuan ada atau buat folder jika belum ada
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true); // Buat folder dengan izin 0777 (izin penuh)
        }

        // Buka file dalam mode "w" (write) di dalam folder tujuan
        $file = fopen($folderPath . $filename, "w"); 
        if ($file) {
            $content = "pengunjung melihat konten ini pada ." . date('Y-m-d H:i:s') . "dengan ip :" . $_SERVER['REMOTE_ADDR'];

            // Tuliskan konten ke dalam file
            fwrite($file, $content);

            // Tutup file
            fclose($file); 
        }  
    }
}
