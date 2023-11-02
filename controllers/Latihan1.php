<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar web Programming";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        /*
        $hasil = $this->Model_latihan1->jumlah($nil1, $nil2);
        echo "Hasil Penjumlah dari". $nil1 . " + " . $nil2 . " = " . $hasil;
        */

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan', $data);
    }
}