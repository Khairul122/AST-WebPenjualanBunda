<?php

class Fungsi
{
    public function Redirect($page)
    {
        return "<script>
                    window.location.href='$page'
                </script>";
    }
    public function RedirectBlank($page)
    {
        return "<script>
                    window.open($page, '_blank')
                </script>";
    }
    public function Notif($title, $text, $icon)
    {
        return "<script>
                 Swal.fire({
                     title: '$title',
                     text: '$text',
                     icon: '$icon'
                 })
               </script>";
    }
    public function NotifRedirect($title, $text, $icon, $url)
    {
        return "<script>
                 Swal.fire({
                     title: '$title',
                     text: '$text',
                     icon: '$icon'
                 }).then(() => {
                    window.location.href = '$url'
                 })
               </script>";
    }

    public function TanggalIndo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
}
