<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Model
{

    // START VIEW DATA

    public function tampil_datadepartement()
    {
        $this->db->select('*');
        $this->db->from('departement');
        $this->db->order_by('id_departement', 'desc');
        return $this->db->get()->result();
    }
    public function tampil_data_jenis_cuti()
    {
        $this->db->select('*');
        $this->db->from('jenis_cuti');
        $this->db->order_by('id_cuti', 'desc');
        return $this->db->get()->result();
    }
    public function tampil_data_company()
    {
        $this->db->select('*');
        $this->db->from('company');
        $this->db->order_by('id_company', 'desc');
        return $this->db->get()->result();
    }
    public function tampil_data_jabatan()
    {
        $this->db->select('*');
        $this->db->from('jabatan');
        $this->db->order_by('id_jabatan', 'desc');
        return $this->db->get()->result();
    }
    public function tampil_jabatan()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where('id_jabatan', '8');
        $this->db->or_where('id_jabatan', '7');
        return $this->db->get()->result();
    }
    public function tampil_data_karyawan()
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('departement', 'departement.id_departement=karyawan.id_departement');
        $this->db->join('jabatan', 'jabatan.id_jabatan=karyawan.id_jabatan');
        $this->db->order_by('nik', 'desc');
        return $this->db->get()->result();
    }


    // END VIEW ALL DATA


    // START INPUT DATA

    public function input_departement($data)
    {
        $this->db->insert('departement', $data);
    }
    public function input_company($data)
    {
        $this->db->insert('company', $data);
    }
    public function input_jabatan($data)
    {
        $this->db->insert('jabatan', $data);
    }
    public function input_jeniscuti($data)
    {
        $this->db->insert('jenis_cuti', $data);
    }
    public function input_karyawan($data)
    {
        $this->db->insert('karyawan', $data);
    }

    // END INPUT DATA ALL


    public function detail_datacompany($id_company)
    {
        $this->db->select('*');
        $this->db->from('company');
        $this->db->where('id_company', $id_company);
        return $this->db->get()->row();
    }


    public function update_company($data)
    {
        $this->db->where('id_company', $data['id_company']);
        $this->db->update('company', $data);
    }


    public function detail_datajabatan($id_jabatan)
    {
        $this->db->select('*');
        $this->db->from('jabatan');
        $this->db->where('id_jabatan', $id_jabatan);
        return $this->db->get()->row();
    }

    public function update_jabatan($data)
    {
        $this->db->where('id_jabatan', $data['id_jabatan']);
        $this->db->update('jabatan', $data);
    }

    public function update_datacuti($data)
    {
        $this->db->set('status', 'approved');
        $this->db->where('kode', $data['kode']);
        $this->db->update('cuti', $data);
    }
    public function update_datacutireject($data)
    {
        $this->db->set('status', 'rejected');
        $this->db->where('kode', $data['kode']);
        $this->db->update('cuti', $data);
    }



    public function detail_datadepartement($id_departement)
    {
        $this->db->select('*');
        $this->db->from('departement');
        $this->db->where('id_departement', $id_departement);
        return $this->db->get()->row();
    }

    public function update_departement($data)
    {
        $this->db->where('id_departement', $data['id_departement']);
        $this->db->update('departement', $data);
    }


    public function detail_datajenis_cuti($id_cuti)
    {
        $this->db->select('*');
        $this->db->from('jenis_cuti');
        $this->db->where('id_cuti', $id_cuti);
        return $this->db->get()->row();
    }

    public function update_jenis_cuti($data)
    {
        $this->db->where('id_cuti', $data['id_cuti']);
        $this->db->update('jenis_cuti', $data);
    }


    public function detail_datakaryawan($nik)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->where('nik', $nik);
        return $this->db->get()->row();
    }

    public function update_karyawan($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->update('karyawan', $data);
    }
    public function update_profile($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->update('karyawan', $data);
    }
    // END UPADTE


    // START HAPUS

    public function hapus_karyawan($data)
    {
        $this->db->where('nik', $data['nik']);
        $this->db->delete('karyawan', $data);
    }
    public function hapus_departement($data)
    {
        $this->db->where('id_departement', $data['id_departement']);
        $this->db->delete('departement', $data);
    }
    public function hapus_jabatan($data)
    {
        $this->db->where('id_jabatan', $data['id_jabatan']);
        $this->db->delete('jabatan', $data);
    }
    public function hapus_company($data)
    {
        $this->db->where('id_company', $data['id_company']);
        $this->db->delete('company', $data);
    }
    public function hapus_jenis_cuti($data)
    {
        $this->db->where('id_cuti', $data['id_cuti']);
        $this->db->delete('jenis_cuti', $data);
    }

    // END HAPUS


    //  DATA CUTI

    public function tampil_cuti()
    {
        $this->db->select('*');
        $this->db->from('cuti');
        $this->db->join('karyawan', 'karyawan.nik=cuti.nik');
        $this->db->order_by('kode', 'desc');
        return $this->db->get()->result();
    }
    public function tampil_historycuti($qqw)
    {
        $this->db->select('*');
        $this->db->from('karyawan');
        $this->db->join('cuti', 'karyawan.nik=cuti.nik', 'left');
        $this->db->where(['cuti.nik' => $qqw]);
        return $this->db->get()->result();
    }


    public function input_cuti($data)
    {
        $this->db->insert('cuti', $data);
    }


    public function hapus_formcuti($data)
    {
        $this->db->where('kode', $data['kode']);
        $this->db->delete('cuti', $data);
    }

    public function detail_datacuti($kode)
    {
        $this->db->select('*');
        $this->db->from('cuti');
        $this->db->where('kode', $kode);
        $this->db->join('karyawan', 'karyawan.nik=cuti.nik');
        return $this->db->get()->row();
    }

    public function update_formcuti($data)
    {
        $this->db->where('kode', $data['kode']);
        $this->db->update('cuti', $data);
    }
    public function update_hasilcuti_karyawan($data, $sisa)
    {
        $this->db->set('jumlah_cuti', $sisa);
        $this->db->where('nik', $data['nik']);
        $this->db->update('karyawan');
    }

    public function buat_kode()
    {

        $this->db->select('RIGHT(cuti.kode,3) as kode', FALSE);
        $this->db->order_by('kode', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('cuti');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $tgl = date('y-m-');
        $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodetampil = "CT" . $tgl . $batas;  //format kode
        return $kodetampil;
    }


    function kirimTelegram($data)
    {
        // define('BOT_TOKEN', '1318087896:AAFOTwS09J8kEizKK5UO8U6yLk497TU-8zw');
        // define('CHAT_ID', '-424601956');
        $pesan = implode("\n", $data);
        // $API = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendmessage?chat_id=" . CHAT_ID . "&text=" . urlencode($pesan);
        $API = "https://web.whatsapp.com/send?phone=6285156330194&text=" . urlencode($pesan);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $API);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result, true);
        return $result;
    }
    // function ambildata($command)
    // {
    //     define('TOKEN', '1318087896:AAFOTwS09J8kEizKK5UO8U6yLk497TU-8zw');
    //     define('ID', '-424601956');
    //     $pesan = implode("\n", $command);
    //     $API = "https://api.telegram.org/bot" . TOKEN . "/sendmessage?chat_id=" . ID . "&text=" . urlencode($pesan);
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $API);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    //     $result = curl_exec($ch);
    //     curl_close($ch);
    //     $result = json_decode($result, true);
    //     return $result;
    // }

    public function laporan_cuti($data)
    {
        $this->db->select('*');
        $this->db->from('cuti');
        $this->db->where('tanggal_awal', $data['tanggal_awal']);
        $this->db->where('tanggal_akhir', $data['tanggal_akhir']);
        $this->db->order_by('kode', 'desc');
        return $this->db->get()->result();
    }


    //Penutup







}

/* End of file Master.php */
