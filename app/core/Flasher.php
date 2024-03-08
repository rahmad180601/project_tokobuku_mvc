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
            echo '
                <div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                        Data <strong>' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '
                    </div>
                </div>
            ';
            unset($_SESSION['flash']);
        }
    }

}