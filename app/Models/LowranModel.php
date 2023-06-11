<?php

namespace App\Models;

use CodeIgniter\Model;

class LowranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lowran';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = [
        'tower_id_ne',
        'site_name',
        'long',
        'lat',
        'priority',
        'tower_id_fe',
        'site_name',
        'long',
        'lat',
        'priority',
        'ba_desain',
        'ba_design_status',
        'pag_link',
        'link_name',
        'city_design',
        'city_dominan',
        'status_design',
        'span_seq',
        'plan_ring',
        'type_design',
        'flp',
        'plan_distance_km',
        'x_c',
        'status_design_xc',
        'syncron_own',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
