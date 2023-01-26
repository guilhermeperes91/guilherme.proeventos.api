<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Leadloverstest extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /*
     * --------------------------------------------------------
     */

    public function getMachines() {
        $this->load->library("leadlovers");

        $retorno = $this->leadlovers->getMachines();
        $retorno = json_decode($retorno, true);

        echo '<table style="border-collapse: collapse">';
        echo "<tr>";
        echo '<th style="border: 1px solid black;padding:5px 15px;">MachineCode</th>';
        echo '<th style="border: 1px solid black;;padding:5px 15px;">MachineName</th>';
        echo "</tr>";

        foreach ($retorno['Items'] as $r) {
            echo "<tr>";
            echo '<td style="border: 1px solid black;padding:5px 15px;">';
            echo $r['MachineCode'];
            echo "</td>";
            echo '<td style="border: 1px solid black;;padding:5px 15px;">';
            echo '<a href="' . base_url("leadloverstest/getSequence/{$r['MachineCode']}") . '">';
            echo $r['MachineName'];
            echo '</a>';
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    /*
     * --------------------------------------------------------
     */

    public function getSequence($machineCode) {
        $this->load->library("leadlovers");

        $retorno = $this->leadlovers->getSequence($machineCode);
        $retorno = json_decode($retorno, true);

        echo '<table style="border-collapse: collapse">';
        echo "<tr>";
        echo '<th style="border: 1px solid black;padding:5px 15px;">MachineCode</th>';
        echo '<th style="border: 1px solid black;padding:5px 15px;">SequenceCode</th>';
        echo '<th style="border: 1px solid black;;padding:5px 15px;">SequenceName</th>';
        echo "</tr>";

        foreach ($retorno['Items'] as $r) {
            echo "<tr>";
            echo '<td style="border: 1px solid black;padding:5px 15px;">';
            echo $machineCode;
            echo "</td>";
            echo '<td style="border: 1px solid black;padding:5px 15px;">';
            echo $r['SequenceCode'];
            echo "</td>";
            echo '<td style="border: 1px solid black;;padding:5px 15px;">';
            echo $r['SequenceName'];
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<Br/>";
        echo '<a href="' . base_url("leadloverstest/getMachines") . '">Voltar</a>';
    }

}
