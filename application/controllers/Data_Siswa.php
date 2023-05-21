<?php
class Data_Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->load->view('view-form');
    }
    public function cetak()
    {
        $this->form_validation->set_rules(
            'nama',
            'nama siswa',
            'required',
            [
                'required' => 'nama wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'nis',
            'nis',
            'required|min_length[3]',
            [
                'required' => 'nis wajib di isi',
                'min_length' => 'nis minimal 3 karakter'
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'kelas',
            'required',
            [
                'required' => 'kelas wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'ultah',
            'required',
            [
                'required' => 'Tanggal Lahir wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'tmpt_lahir',
            'tempat lahir',
            'required',
            [
                'required' => 'Tempat lahir wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'alamat',
            'required',
            [
                'required' => 'alamat wajib di isi'
            ]
        );
        $this->form_validation->set_rules(
            'jns_kelamin',
            'jns_kelamin',
            'required',
            [
                'required' => 'Pilih Jenis Kelamin'
            ]
        );
        $this->form_validation->set_rules(
            'agama',
            'agama',
            'required',
            [
                'required' => 'agama wajib di isi'
            ]
        );
        if ($this->form_validation->run() !=true){
            $this->load->view('view-form');
        }else{

            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas'=> $this->input->post('kelas'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'tmpt_lahir' => $this->input->post('tmpt_lahir'),
                'alamat' => $this->input->post('alamat'),
                'jns_kelamin' => $this->input->post('jns_kelamin'),
                // 'p' => $this->input->post('p'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('view-data_siswa', $data);
        }
    }
}