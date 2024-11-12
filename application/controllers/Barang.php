function tambah()
{
    // Cek login
    if (!$this->session->userdata('level') == 'Admin') {
        redirect('login');
    } else {
        if ($this->input->method() == 'post') {
            // Menambahkan data petugas
            $this->m_user->tambah();
            $this->session->set_flashdata('info', 'Data berhasil ditambah');
            redirect('petugas/dataPetugas');
        } else {
            // Mengambil data untuk tampilan form
            $data['admin'] = $this->m_user->selectAdmin()->row();
            $data['kodeunik'] = $this->m_user->getkodeunik();

            // Memuat tampilan
            $this->load->view('admin/header', $data);
            $this->load->view('admin/tambahPetugas');
            $this->load->view('admin/footer');
        }
    }
}
