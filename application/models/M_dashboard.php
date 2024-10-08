<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function get_kamar()
    {
        $this->db->select('detail_kamar.harga,detail_kamar.jenis_kamar,detail_kamar.deskripsi,kamar.no_kamar,kamar.id_kamar');
        $this->db->from('kamar');
        $this->db->join('detail_kamar', 'kamar.id_detail_kamar = detail_kamar.id_detail_kamar', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_status_ketersediaan()
    {
        $this->db->select('id_kamar,no_kamar');
        $query = $this->db->get('kamar');
        return $query->result_array();
    }

    public function ubah_status_kamar($id_kamar, $status)
    {
        $data = array('status_ketersediaan' => $status);
        $this->db->where('id_kamar', $id_kamar);
        $this->db->update('kamar', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function get_tipe_kamar()
    {
        $query = $this->db->get('detail_kamar');
        return $query->result_array();
    }
    public function editTipeKamar($id_detail_kamar, $data)
    {
        $this->db->where('id_detail_kamar', $id_detail_kamar);
        $this->db->update('detail_kamar', $data);
        return $this->db->affected_rows() > 0;
    }

    public function deleteTipeKamar($id_detail_kamar)
    {
        $this->db->where('id_detail_kamar', $id_detail_kamar);
        return $this->db->delete('detail_kamar');
    }


    public function getIddetailkamar($tipe_kamar)
    {
        $this->db->select('id_detail_kamar');
        $this->db->where('jenis_kamar', $tipe_kamar);
        $this->db->from('detail_kamar');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertKamar($data)
    {
        return $this->db->insert('kamar', $data);
    }
    public function inserttipe($data)
    {
        return $this->db->insert('detail_kamar', $data);
    }

    public function updateKamar($id_kamar, $data)
    {
        $this->db->where('id_kamar', $id_kamar);
        return $this->db->update('kamar', $data);
    }

    public function deleteKamar($id_kamar)
    {
        $this->db->where('id_kamar', $id_kamar);
        return $this->db->delete('kamar');
    }

    public function getMonthlyOrders($monthYear)
    {
        $dateParts = explode('-', $monthYear);

        if (count($dateParts) >= 2) {
            $month = $dateParts[1];
            $year = $dateParts[0];

            $start_date = date("$year-$month-01 00:00:00");
            $end_date = date("Y-m-t 23:59:59", strtotime($start_date));

            $this->db->select('pemesanan.*, tamu.nama');
            $this->db->from('pemesanan');
            $this->db->join('tamu', 'pemesanan.id_tamu = tamu.id_tamu', 'left');
            $this->db->where('status', '1');
            $this->db->where('pemesanan.tgl_pemesanan >=', $start_date);
            $this->db->where('pemesanan.tgl_pemesanan <=', $end_date);

            $query = $this->db->get();

            return $query->result_array();
        } else {
            return [];
        }
    }
    public function getIdAdmin($username)
    {
        
        $this->db->select('id_admin');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $query = $this->db->get();

        return $query->result_array();
    }
}
   




/* End of file M_dashboard.php */
