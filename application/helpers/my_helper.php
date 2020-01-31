<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	//session admin
function sesiAdmin() {
	if(isset($_SESSION['username'])) {
		return TRUE;
	} else {
		redirect(base_url(), 'refresh');
	}
}

	//session admin2
function sesiPetugas() {
	if(isset($_SESSION['nip'])) {
		return TRUE;
	} else {
		redirect(base_url(), 'refresh');
	}
}

if (!function_exists('bulan')) {
    function bulan(){
        $bulan = Date('m');
        switch ($bulan) {
            case 1:
            $bulan = "Januari";
            break;
            case 2:
            $bulan = "Februari";
            break;
            case 3:
            $bulan = "Maret";
            break;
            case 4:
            $bulan = "April";
            break;
            case 5:
            $bulan = "Mei";
            break;
            case 6:
            $bulan = "Juni";
            break;
            case 7:
            $bulan = "Juli";
            break;
            case 8:
            $bulan = "Agustus";
            break;
            case 9:
            $bulan = "September";
            break;
            case 10:
            $bulan = "Oktober";
            break;
            case 11:
            $bulan = "November";
            break;
            case 12:
            $bulan = "Desember";
            break;
            default:
            $bulan = Date('F');
            break;
        }
        return $bulan;
    }
}
if (!function_exists('tanggal')) {
    function tanggal() {
        $tanggal = Date('d') . " " .bulan(). " ".Date('Y');
        return $tanggal;
    }
}
if (!function_exists('tahun')) {
    function tahun() {
        $tahun = Date('Y');
        return $tahun;
    }
}
if (!function_exists('bulanrom')) {
    function bulanrom(){
        $bulanrom = Date('m');
        switch ($bulanrom) {
            case 1:
            $bulanrom = "I";
            break;
            case 2:
            $bulanrom = "II";
            break;
            case 3:
            $bulanrom = "III";
            break;
            case 4:
            $bulanrom = "IV";
            break;
            case 5:
            $bulanrom = "V";
            break;
            case 6:
            $bulanrom = "VI";
            break;
            case 7:
            $bulanrom = "VII";
            break;
            case 8:
            $bulanrom = "VIII";
            break;
            case 9:
            $bulanrom = "IX";
            break;
            case 10:
            $bulanrom = "X";
            break;
            case 11:
            $bulanrom = "XI";
            break;
            case 12:
            $bulanrom = "XII";
            break;
            default:
            $bulanrom = Date('F');
            break;
        }
        return $bulanrom;
    }
}
function tgl_indo($tanggal){
  $bulan = array (
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

  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun

  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
