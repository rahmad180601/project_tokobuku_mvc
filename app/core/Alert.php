<?php
class Alert
{
  public static function setAlert($pesan, $tipe)
  {
    $_SESSION['alert'] = [
      'pesan' => $pesan,
      'tipe' => $tipe
    ];
  }

  public static function alert()
  {
    if (isset($_SESSION['alert'])) {
      echo '<div class="w-100 alert alert-' . $_SESSION['alert']['tipe'] . ' position-absolute" id="alert-succ" style="z-index: 1;" role="alert">
      ' . $_SESSION['alert']['pesan'] . '
          </div>';
      unset($_SESSION['alert']);
    }
  }
}
