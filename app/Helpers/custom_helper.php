<?php

// Status Design
function countDataReview($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'NPD Review')->countAllResults();
    return $query;
}
function countDataProcess($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'LMS Process')->countAllResults();
    return $query;
}
function countDataRelease($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'SPK Release')->countAllResults();
    return $query;
}

// Type Design

function countTypeRing($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'Ring')->countAllResults();
    return $query;
}
function countTypeStar($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'Star')->countAllResults();
    return $query;
}
function countTypeInsert($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'Insert')->countAllResults();
    return $query;
}

// Status Design XC

function countStatusCore($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'Design Review IP Core')->countAllResults();
    return $query;
}

function countStatusDRM($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'DRM')->countAllResults();
    return $query;
}
function countStatusGHApprove($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'GH Approve')->countAllResults();
    return $query;
}
function countStatusHold($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'Hold')->countAllResults();
    return $query;
}
function countStatusNeedApproval($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'Need Approval GH')->countAllResults();
    return $query;
}
function countStatusReject($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'Reject')->countAllResults();
    return $query;
}
function countStatusrRevisi($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'Revisi')->countAllResults();
    return $query;
}
function countStatusRelease($table, $column) {
    $db = \Config\Database::connect();
    $query = $db->table($table)->like($column, 'SPK Release')->countAllResults();
    return $query;
}


?>