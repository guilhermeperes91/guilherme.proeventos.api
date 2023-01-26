<?php

class Email_model extends CI_Model {
    /*
      | -------------------------------------------------------------------
      | configuração do construtor
      | -------------------------------------------------------------------
      | $this->tab              o nome da tabela principal
      |
      | -------------------------------------------------------------------
     */

    public function __construct() {
        parent::__construct();
        $this->tab = "email";
    }

    // --------------------------------------------------------------------

    /*
      | -------------------------------------------------------------------
      | pega todos os registros da tabela
      |
      | -------------------------------------------------------------------
     */

    public function get() {
        $this->db->select(array('*'));
        $this->db->from($this->tab);
        $this->db->order_by("id", "desc");
        return $this->db->get()->result_array();
    }

    /*
      | -------------------------------------------------------------------
      | pega os registros da tabela com a id igual a que foi enviada
      | por parametro
      |
      | -------------------------------------------------------------------
     */

    public function getByID($id) {
        $this->db->select(array('*'));
        $this->db->from($this->tab);
        $this->db->where("id", $id);
        return $this->db->get()->row_array();
    }

    // --------------------------------------------------------------------

    /*
      | -------------------------------------------------------------------
      | inclui os dados no banco
      |
      | -------------------------------------------------------------------
     */

    public function set($info) {
        $add = $this->db->insert($this->tab, $info);
        if ($add) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // --------------------------------------------------------------------

    /*
      | -------------------------------------------------------------------
      | atualiza os dados no banco
      |
      | -------------------------------------------------------------------
     */

    public function up($info) {
        $this->db->where("id", $info['id']);
        $up = $this->db->update($this->tab, ($info));
        if ($up) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // --------------------------------------------------------------------

    /*
      | -------------------------------------------------------------------
      | apaga o registro no banco
      |
      | -------------------------------------------------------------------
     */

    public function del($id) {
        $this->db->where("id", $id);
        $del = $this->db->delete($this->tab);
        if ($del) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
