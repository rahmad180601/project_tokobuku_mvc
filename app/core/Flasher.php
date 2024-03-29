<?php
class Flasher {
    public static function setFlash($pesan, $aksi, $tipe) {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
       ];
    }

    public static function flash() {
        if (isset($_SESSION['flash'])) {   
            $alertClass = 'alert-' . $_SESSION['flash']['tipe'];
            echo '<div class="alert ' . $alertClass . ' alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>';
            unset($_SESSION['flash']);
        }
    }
    
}

?>