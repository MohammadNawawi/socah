<?php
class M_data extends CI_Model
{
    public function tampil_data()
    {
        $this->db->order_by("nik", "ASC");
        return $this->db->get('data_masyarakat');
    }
    public function tampil_rekapitulasi()
    {
        return $this->db->get('data_rekapitulasi');
    }
    public function tampil_data2()
    {
        $this->db->order_by("nik", "ASC");
        return $this->db->get('data_masyarakat');
    }
    public function tampil_map()
    {
        return $this->db->get('map');
    }
    public function tampil_kritiksaran()
    {
        return $this->db->get('kritiksaran');
    }
    public function log()
    {
        $this->db->order_by('log_time', 'DESC');
        return $this->db->get('tabel_log');
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function input_map($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hitungJumlahMasyarakat()
    {
        $query = $this->db->get('data_masyarakat');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungJumlahUser()
    {
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function hitungJumlahKritiksaran()
    {
        $query = $this->db->get('kritiksaran');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function insert($data)
    {
        $this->db->insert('lakib_renstra', $data);
    }
    public function view()
    {
        return $this->db->get('lakib_renstra');
    }


    public function menikah(){
        $this->db->select('*');
        $this->db->from('data_masyarakat'); 
        $this->db->where('sts' , 'menikah'); 

        $query = $this->db->get();
        return $query;
    }

    public function hitungJumlahLakilaki()
    {
   $this->db->select_sum('pend_l');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function hitungJumlahPerempuan()
    {
   $this->db->select_sum('pend_p');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function jumlahwajibktpl()
    {
   $this->db->select_sum('wajib_ktp_l');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->wajib_ktp_l;
   }
   else
   {
     return 0;
   }
}
    public function jumlahwajibktpp()
    {
   $this->db->select_sum('wajib_ktp_p');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->wajib_ktp_p;
   }
   else
   {
     return 0;
   }
}
    public function jumlahelktpl()
    {
   $this->db->select_sum('el_ktp_l');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->el_ktp_l;
   }
   else
   {
     return 0;
   }
}
    public function jumlahelktpp()
    {
   $this->db->select_sum('el_ktp_p');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->el_ktp_p;
   }
   else
   {
     return 0;
   }
}
    public function jumlahkepkeluarga()
    {
   $this->db->select_sum('kep_keluarga');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->kep_keluarga;
   }
   else
   {
     return 0;
   }
}
    public function jumlahkk()
    {
   $this->db->select_sum('pend_kk');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_kk;
   }
   else
   {
     return 0;
   }
}
    public function socah()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','socah');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function keleyan()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','keleyan');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function bilaporah()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','bilaporah');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function parseh()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','parseh');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function jaddih()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','jaddih');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function buluh()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','buluh');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function junganyar()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','junganyar');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function dakiring()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','dakiring');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function petaonan()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','petaonan');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function pernajuh()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','pernajuh');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}
    public function sanggraagung()
    {
   $this->db->select_sum('pend_l');
   $this->db->where('nama_desa','sanggraagung');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_l;
   }
   else
   {
     return 0;
   }
}

public function socah2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','socah');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function keleyan2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','keleyan');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function bilaporah2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','bilaporah');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function parseh2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','parseh');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function jaddih2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','jaddih');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function buluh2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','buluh');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function junganyar2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','junganyar');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function dakiring2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','dakiring');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function petaonan2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','petaonan');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function pernajuh2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','pernajuh');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
    public function sanggraagung2()
    {
   $this->db->select_sum('pend_p');
   $this->db->where('nama_desa','sanggraagung');
   $query = $this->db->get('data_rekapitulasi');
   if($query->num_rows()>0)
   {
     return $query->row()->pend_p;
   }
   else
   {
     return 0;
   }
}
}
